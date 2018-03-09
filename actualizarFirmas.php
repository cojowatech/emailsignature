<?php
	require_once __DIR__ . '/vendor/autoload.php';
	define('APPLICATION_NAME', 'Update Signature');
	// define('CREDENTIALS_PATH', '~/.credentials/gmail-php-quickstart.json');
	define('CLIENT_SECRET_PATH', __DIR__ . '/client_secret.json');

	// If modifying these scopes, delete your previously saved credentials
	// at ~/.credentials/gmail-php-quickstart.json
	define('SCOPES', implode(' ', array(Google_Service_Gmail::GMAIL_SETTINGS_BASIC)));

	if(isset($_POST['accion'])){
		include 'clsConnectDB.php';
		if($_POST['accion'] == "actualizarFirma"){
			$txtNombre = isset($_POST['txtNombre']) ? $_POST['txtNombre'] : '';
			$txtCargo = isset($_POST['txtCargo']) ? $_POST['txtCargo'] : '';
			$txtEmail = isset($_POST['txtEmail']) ? $_POST['txtEmail'] : '';
			$txtFirma = isset($_POST['txtFirma']) ? $_POST['txtFirma'] : '';
			$cnx = new ConnectDB();
			$rst = $cnx->enviarQuery("CALL SP_Signature('consultarRegistro','".trim($txtNombre)."','".trim($txtCargo)."','".trim($txtEmail)."','','".trim($txtFirma)."')","R");

			if($rst[0]['cos_app_codigo'] == ""){
				echo json_encode(array('status'=>'failed','type'=>'appCode','url'=>getUrlConfirmation()));
			}else{
				$ans = procesarFirma($rst[0]);
				echo json_encode($ans);
			}
		}

		if($_POST['accion'] == "actualizarCodigoApp"){
			$txtEmail = isset($_POST['txtEmail']) ? $_POST['txtEmail'] : '';
			$codigo = isset($_POST['codigo']) ? $_POST['codigo'] : '';
			$cnx = new ConnectDB();
			$accessToken = getToken($codigo);
			$rst = $cnx->enviarQuery("CALL SP_Signature('actualizarAppCodigo','".$txtEmail."','".trim($codigo)."','','','".json_encode($accessToken)."')","R");
			$ans = procesarFirma($rst[0]);
			echo json_encode($ans);
		}
	}

	function getUrlConfirmation(){
		$client = new Google_Client();
	   $client->setApplicationName(APPLICATION_NAME);
	   $client->setScopes(SCOPES);
	   $client->setAuthConfig(CLIENT_SECRET_PATH);
	   $client->setAccessType('offline');
      $authUrl = $client->createAuthUrl();
      return $authUrl;
	}

	function getToken($authCode){
		$client = new Google_Client();
	   $client->setApplicationName(APPLICATION_NAME);
	   $client->setScopes(SCOPES);
	   $client->setAuthConfig(CLIENT_SECRET_PATH);
	   $client->setAccessType('offline');
      $accessToken = $client->fetchAccessTokenWithAuthCode($authCode);
      return $accessToken;

	}

	function procesarFirma($userInfo){
		$client = new Google_Client();
	   $client->setApplicationName(APPLICATION_NAME);
	   $client->setScopes(SCOPES);
	   $client->setAuthConfig(CLIENT_SECRET_PATH);
	   $client->setAccessType('offline');
	   
		$accessToken = $userInfo['cos_token'];
		$client->setAccessToken($accessToken);
		if($client->isAccessTokenExpired()) {
			$client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());
			$cnx = new ConnectDB();
			$rst = $cnx->enviarQuery("CALL SP_Signature('actualizarToken','".$txtEmail."','','','','".json_encode($client->getAccessToken())."')","R");
		}

		$gmailService = new Google_Service_Gmail($client);
		$primary_email = $userInfo['cos_email'];
		$sendAsEmail = new Google_Service_Gmail_SendAs();
		$sendAsEmail->setSignature($userInfo['cos_firma']);
		try{
			$createSendAsResult = $gmailService->users_settings_sendAs->update($primary_email, $primary_email, $sendAsEmail)->setSignature();
			return array('status'=>'success','msg'=>'Firma actualizada satisfactoriamente.!');
		}catch (Google_IO_Exception $gioe){
			return array('status'=>'error','msg'=>'Error al actualizar la firma. Consulte con su administrador.');
		}catch (Google_Service_Exception $gse){
			return array('status'=>'error','msg'=>'Error al actualizar la firma. Consulte con su administrador.');
		}
	}
?>