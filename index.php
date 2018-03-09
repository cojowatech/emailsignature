<?php
	$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Actualización de Firmas Cojowa</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.4/sweetalert2.min.css">
		<style type="text/css" media="screen">
			.container{
				width: 900px;
			}	
		</style>
	</head>
	<body>
		<div class="pull-right" style="margin-top: 10px; margin-right: 20px;">
			<table>
				<tr>
					<td style="padding-right: 10px">
						<img style="cursor:pointer" src="spain.png" alt="ESPAÑOL" width="42px" onclick="updateText('es')">
					</td>
					<td>
						<img style="cursor:pointer" src="united-states.png" alt="INGLES" width="42px" onclick="updateText('en')">
					</td>
				</tr>
			</table>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="text-center" id="titulo">Actualización de Firmas de Correo.</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="form-group">
						<label for="txtNombre" id="nombre">Nombre</label>
						<input type="text" class="form-control" id="txtNombre" name="txtNombre" autofocus>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="form-group">
						<label for="txtCargo" id="cargo">Cargo</label>
						<input type="text" class="form-control" id="txtCargo" name="txtCargo">
					</div>
				</div>
				<div class="col-lg-6">
					<div class="form-group">
						<label for="txtEmail" id="correo">Correo Electrónico</label>
						<input type="email" class="form-control" id="txtEmail" name="txtEmail">
					</div>
				</div>
				<div class="col-lg-3">
					<div class="form-group">
						<div class="checkbox">
							<label><input type="checkbox" class="chkLevel" value="1" id="level1"><b>GCE Nivel 1 (Level 1)</b></label>
						</div>
						<div class="checkbox">
							<label><input type="checkbox" class="chkLevel" value="2" id="level2"><b>GCE Nivel 2 (Level 2)</b></label>
						</div>
					</div>
				</div>

				<!-- <div class="col-lg-6">
					<div class="form-group hide">
						<label for="txtCodigoApp">Código de Permiso</label>
						<input type="text" class="form-control" id="txtCodigoApp" name="txtCodigoApp">
					</div>
				</div> -->
				<div class="col-lg-3">
					<br>
					<input type="button" id="btnUpdateSignature" class="btn btn-primary" value="Actualizar Firma">
				</div>
			</div>
			<br>
			<div class="row">
				<h4 id="previsualizacion">Previsualización:</h4>
				<div id="ejemploFirma" class="col-lg-6 col-lg-offset-3">
					<div dir="ltr"><div class="gmail_default" style="font-family:verdana,sans-serif;color:rgb(68,68,68)"><span id="lblNombre" style="font-family:arial,sans-serif;font-size:18px;color:rgb(0,70,140);font-weight:bold">SU NOMBRE</span><br style="color:rgb(153,153,153);font-family:arial,sans-serif;font-size:12.8px"><span id="lblCargo" style="font-family:arial,sans-serif;font-size:14px;color:rgb(102,102,102)">SU CARGO</span></div><div class="gmail_default" style="font-family:verdana,sans-serif"><br></div><!-- BEGIN --><div style="font-family:verdana,sans-serif;color:rgb(68,68,68)"><span id="certified" style="font-family:arial,sans-serif;font-size:14px;color:rgb(102,102,102)"></span></div><div class="gmail_default" style="font-family:verdana,sans-serif"><br></div><!-- FIN --><div class="gmail_default" style="font-family:verdana,sans-serif"><div style="color:rgb(153,153,153);font-family:arial,sans-serif;font-size:12.8px"><div style="float:left"><img src="https://lh6.googleusercontent.com/tvlkE_BYWuzdtrbbZV_988zJQJcJvBePTGKslI80H5rsJEwJArhgSWf8x6Re4oHMi2rQQWXIvKZqOaCU5dkolr1OX3rqEW_7Z6QBdy5vr_4dJ7CHSAJQxebiExXsyuxu7Y9XdTB3" width="88" height="105" alt="IMG_2317.jpg" style="background-color:transparent;color:rgb(0,0,0);font-family:Arial;font-size:11pt;white-space:pre-wrap;border:none;margin-right:0px" class="CToWUd"></div><div style="margin-left:95px;padding-left:5px;font-size:12px;border-left:1px solid rgb(204,204,204)"><span style="font-weight:bold;font-size:14px">Colegio Jorge Washington</span><br>PBX&nbsp;<a href="tel:(5)%206930170" value="+5756930170" target="_blank">+57 5 6930170</a><br>USA&nbsp;<a href="tel:+1%20305-890-0621" value="+13058900621" target="_blank">+1 3058900621</a><br>Anillo Vial Km 12<br>Cartagena, Colombia, South America<br><a href="http://www.cojowa.edu.co/" style="color:rgb(0,176,240);font-size:14px;text-decoration-line:none" target="_blank" data-saferedirecturl="https://www.google.com/url?hl=es-419&amp;q=http://www.cojowa.edu.co/&amp;source=gmail&amp;ust=1509043085249000&amp;usg=AFQjCNFWmT4vz4cmFGh-OAgMXlJ-V9o2xA">www.cojowa.edu.co</a><br><br><a href="http://www.facebook.com/cojowa" title="Facebook" target="_blank" data-saferedirecturl="https://www.google.com/url?hl=es-419&amp;q=http://www.facebook.com/cojowa&amp;source=gmail&amp;ust=1509043085249000&amp;usg=AFQjCNGcqh1j8CYdz8KVXO5_6_JJupOXkw"><img src="https://ci4.googleusercontent.com/proxy/HzU8qv6fM95UclVdGiH5kNwNkQvD3Lftu3h8cJFf-izsM183iTuqaAqe4VIt_lDCiVt6AgCjk7mzygI5aF8_YBa7TLr8KCUQX4Nn4cPEyA=s0-d-e1-ft#http://www.cojowa.edu.co/images/social_icons/facebook.png" class="m_2741363690225643036gmail-CToWUd CToWUd"></a>&nbsp;<a href="http://www.twitter.com/cojowa" title="Twitter" target="_blank" data-saferedirecturl="https://www.google.com/url?hl=es-419&amp;q=http://www.twitter.com/cojowa&amp;source=gmail&amp;ust=1509043085249000&amp;usg=AFQjCNErSisqvmUMVchMKR3Ulr8-EWpcnQ"><img src="https://ci6.googleusercontent.com/proxy/IOKUZUVAAAobXYg3133Siin2r04eYk2Tmei50pSEeNmuqJcXA2m8NaJCBAU_i61uz_DbiZJkjRVMlwww2BdqlHb275AwSEAm5tkrxdw-=s0-d-e1-ft#http://www.cojowa.edu.co/images/social_icons/twitter.png" class="m_2741363690225643036gmail-CToWUd CToWUd"></a>&nbsp;<a href="http://www.youtube.com/webcojowa" title="YouTube" target="_blank" data-saferedirecturl="https://www.google.com/url?hl=es-419&amp;q=http://www.youtube.com/webcojowa&amp;source=gmail&amp;ust=1509043085249000&amp;usg=AFQjCNEYh8juQFDqDoqvIElU_AqRRnxNpA"><img src="https://ci4.googleusercontent.com/proxy/yydTymSAf9AgysKdwJ7o8_XIjUH1eQWxYaVphxLoW5hVM_FEu3dVOtJItc9rSCerYK4I2DjfuamVOpqOrW5gO6BYvfzlG1wC8XjkE5h6=s0-d-e1-ft#http://www.cojowa.edu.co/images/social_icons/youtube.png" class="m_2741363690225643036gmail-CToWUd CToWUd"></a>&nbsp;<a href="http://picasaweb.google.com/cojowa.web" title="Picasa Web Album" target="_blank" data-saferedirecturl="https://www.google.com/url?hl=es-419&amp;q=http://picasaweb.google.com/cojowa.web&amp;source=gmail&amp;ust=1509043085249000&amp;usg=AFQjCNGZXNkoERsL6wS4TsEbp_lPwtIu6w"><img src="https://ci3.googleusercontent.com/proxy/-eM8M7AYIZAOK8lOmNEM8Kn7GBMJtw8ADsb_ZEgy9DHYx5Kiv6s0nNAPpnQipQW8ORdY8f0oqOeQbjajHwji-YmDxHCPdo-CXm19p6w=s0-d-e1-ft#http://www.cojowa.edu.co/images/social_icons/picasa.png" class="m_2741363690225643036gmail-CToWUd CToWUd"></a></div></div><p style="color:rgb(153,153,153);font-family:arial,sans-serif;font-size:10px;text-align:justify">The information on this E-mail is intended to be confidential and only for use of the individual or entity to whom it is addressed. If you are not the intended recipient, any retention, dissemination, distribution or copying of this message is strictly prohibited and sanctioned by law. If you receive this message in error, please immediately send it back and delete the message received.<br><br>La información contenida en este E-mail es confidencial y sólo puede ser utilizada por el individuo o la compañía a la cual está dirigido. Si no es el receptor autorizado, cualquier retención, difusión, distribución o copia de este mensaje es prohibida y será sancionada por la ley. Si por error recibe este mensaje, favor reenviarlo y borrar el mensaje recibido inmediatamente.</p></div><div class="yj6qo"></div><div class="adL"><br></div><div class="adL"></div></div>
				</div>
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.4/sweetalert2.min.js"></script>
		<script src="vendor/i18n/jquery.i18n.js"></script>
		<script src="vendor/i18n/jquery.i18n.messagestore.js"></script>
		<script src="vendor/i18n/jquery.i18n.fallbacks.js"></script>
		<script src="vendor/i18n/jquery.i18n.parser.js"></script>
		<script src="vendor/i18n/jquery.i18n.emitter.js"></script>
		<script src="vendor/i18n/jquery.i18n.language.js"></script>
		<script>
			var modalTitle = "";
			var description = "";
			var paso1 = "";
			var paso11 = "";
			var paso12 = "";
			var paso2 = "";
			var paso3 = "";
			var paso4 = "";
			var btnAceptar = "";
			var btnCancelar = "";
			var sunombre = "";
			var sucargo = "";
			var enterName = "";
			var enterRole = "";
			var enterEmail = "";
			var validEmail = "";
			var signatureUpdate = "";
			var errorUpdate = "";
			var errorTitle = "";
			var errorDesc = "";
			var onlyCojowa = "";
			$(document).on("ready",function(){
				'use strict';
				updateText("<?php echo $lang; ?>");
			});
			function updateText(language){
				'use strict';
				var i18n = $.i18n();
				i18n.locale = language;
				i18n.load('vendor/i18n/language/signature-' + i18n.locale + '.json', i18n.locale).done(function() {
					var titulo = $.i18n('titulo');
					var nombre = $.i18n('nombre');
					var cargo = $.i18n('cargo');
					var correo = $.i18n('correo');
					var boton = $.i18n('boton');
					var previsualizacion = $.i18n('previsualizacion');
					sunombre = $.i18n('sunombre');
					sucargo = $.i18n('sucargo');
					$("#titulo").html(titulo);
					$("#nombre").html(nombre);
					$("#cargo").html(cargo);
					$("#correo").html(correo);
					$("#btnUpdateSignature").val(boton);
					$("#previsualizacion").html(previsualizacion);
					if($("#txtNombre").val().length == 0){
						$("#lblNombre").html(sunombre);
					}
					if($("#txtCargo").val().length == 0){
						$("#lblCargo").html(sucargo);
					}
					modalTitle = $.i18n('modalTitle');
					description = $.i18n('description');
					paso1 = $.i18n('paso1');
					paso11 = $.i18n('paso1-1');
					paso12 = $.i18n('paso1-2');
					paso2 = $.i18n('paso2');
					paso3 = $.i18n('paso3');
					paso4 = $.i18n('paso4');
					btnAceptar = $.i18n('btnAceptar');
					btnCancelar = $.i18n('btnCancelar');

					enterName = $.i18n('enterName');
					enterRole = $.i18n('enterRole');
					enterEmail = $.i18n('enterEmail');
					validEmail = $.i18n('validEmail');
					signatureUpdate = $.i18n('signatureUpdate');
					errorUpdate = $.i18n('errorUpdate');

					errorTitle = $.i18n('errorTitle');
					errorDesc = $.i18n('errorDesc');
					onlyCojowa = $.i18n('onlyCojowa');
				});
			}
			$("#txtNombre").on("keyup",function(){
				var nombre = $(this).val();
				if(nombre.length == 0){
					nombre = sunombre;
				}
				$("#lblNombre").html(nombre);
			});
			$("#txtCargo").on("keyup",function(){
				var cargo = $(this).val();
				if(cargo.length == 0){
					cargo = sucargo;
				}
				$("#lblCargo").html(cargo);
			});
			$("#btnUpdateSignature").on("click",function(){
				var nombre = $("#txtNombre").val();
				var cargo = $("#txtCargo").val();
				var email = $("#txtEmail").val();
				var msj = "";
				if(nombre.length == 0){
					msj = enterName+"<br>";
				}
				if(cargo.length == 0){
					msj += enterRole+"<br>";
				}
				if(email.length == 0){
					msj += enterEmail+"<br>";
				}else{
					var correo = email.split("@");
					if(correo.length == 2){
						if(correo[1] != "cojowa.edu.co"){
							msj += onlyCojowa;
						}
					}else{
						msj += validEmail;
					}
				}
				if(msj.length == 0){
					var firma = $("#ejemploFirma").html();
					$.ajax({
						url:"actualizarFirmas.php",
						type:"POST",
						dataType:"json",
						data:{accion:'actualizarFirma',txtNombre:nombre,txtCargo:cargo,txtEmail:email,txtFirma:firma},
						beforeSend:function(){

						},
						success:function(data){
							if(data.status == 'failed'){
								if(data.type == 'appCode'){
									swal({
										title: modalTitle,
										html:"<p class='text-justify'>"+description+"</p><br><span class='text-justify'><b>1.</b> "+paso1+" <b><a href='"+data.url+"' target='_blank'>"+paso11+"</a></b> "+paso12+"</span><br><span class='text-justify'><b>2.</b> "+paso2+"</span><br><span class='text-justify'><b>3.</b> "+paso3+"</span><br><span class='text-justify'><b>4.</b> "+paso4+"<br><br></span>",
										type:"warning",
										input: 'text',
										confirmButtonText:btnAceptar,
										showCancelButton: true,
										cancelButtonText:btnCancelar,
										preConfirm: function(codeApp) {
											return new Promise(function (resolve, reject) {
												if(codeApp.length == 0) {
													reject('Debe ingresar el código suministrado por la página.')
												}else{
													resolve();
												}
											})
										},
										allowOutsideClick: false
									}).then(function(codeApp){
										$.ajax({
											url:"actualizarFirmas.php",
											type:"POST",
											dataType:"json",
											data:{accion:'actualizarCodigoApp',txtEmail:email,codigo:codeApp},
											success:function(data){
												if(data.status == "success"){
													swal({
														title: "Proceso Exitoso!",
														html:data.msg,
														type:"success"
													});
												}else{
													swal({
														title: "Error!",
														html:data.msg,
														type:"error"
													});
												}
											}
										});
									});
								}
							}else{
								if(data.status == "success"){
									swal({
										title: "Proceso Exitoso!",
										html:signatureUpdate,
										type:"success"
									}).then(function(){
										location.href="";
									});
								}else{
									swal({
										title: "Error!",
										html:errorUpdate,
										type:"error"
									});
								}
							}
						},
						error:function(){

						}
					});
				}else{
					swal({
						title: errorTitle,
						html:errorDesc+"<br>"+msj,
						type:"error"
					});
				}
			});
			$(".chkLevel").on("change",function(){
				var level = "";
				if($("#level1").prop("checked")){
					level = '<img src="https://ci3.googleusercontent.com/proxy/V6fmPPNd2v5G97vYcRs4S6pcrFaArOlgp_V-g7U8k30b6tOi50lBZUfsXwPBvK-6Ihuo02B01Lz4kNae=s0-d-e1-ft#http://edu.nubedoso.com/gce/level1.png" width="96" height="95" class="CToWUd">';
				}
				if($("#level2").prop("checked")){
					level += '<img src="https://ci6.googleusercontent.com/proxy/4qANUDR5bKJdoCndvNwnybhcgzKA6AGTT5HY4wGAguhsjY5V7tPEYpeDGTRpfti8Q6_1g_j6UzBFphw3=s0-d-e1-ft#http://edu.nubedoso.com/gce/level2.png" width="94" height="96" class="CToWUd">';
				}

				if(level.length > 0){
					level += '<br>';
				}
				$("#certified").html(level);
			});
		</script>
	</body>
</html>
