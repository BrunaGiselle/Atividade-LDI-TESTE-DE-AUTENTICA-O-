<center>DIGITE USUÁRIO E SENHA:<br><br><br></center>
<center><form id="frmLogin">
	Usuário:  <input type="text" name="user" ><br>
	Senha: <input type="password" name="pass"><br><br><br>
	<input type="button" id="btnEnviar" value="Enviar">
	</form></center>


<center>x<script type="text/javascript">
	$(document).ready(function() {
		$("#btnEnviar").click(function() {
			var url   = "section04.php";
			var dados = $("#frmLogin").serialize();
			$.post( url, dados, function( responseText ) {
				// $("#sct02" ).html( responseText );
				var objResponse = JSON.parse( responseText );
				var outText = "Status da Autenticação:"+objResponse.login+"<br>"+"Mensagem:"+objResponse.message;  
				$("#sct02" ).html( outText);
				console.log( objResponse );
			} );
		});
	});
</script></center>
