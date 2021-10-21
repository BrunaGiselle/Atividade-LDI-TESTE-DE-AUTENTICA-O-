<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>AUTENTICAÇÃO</title>
		<style type="text/css">
			header{
				width: 100%;
				height: 50px;
				background-color: #F0E68C;
				
			}
			
			.sct{
				width: 100%;
				height: 150px;
			}
			
			#sct01{
				background-color: #FFA500;
			}
			#sct02{
				background-color: #FF8C00;
				height: 50px
				text-align: center;
				
			}

		</style>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script type="text/javascript">
				$(document).ready(function() {
					$("#header").load("header.php"   );
					$("#sct01" ).load("section01.php");
					$("#sct02" ).load("section02.php");
				});
		</script>
	</head>
<body>
	<header id="header"></header>
	<section class="sct" id="sct01" ></section>
	<section class="sct" id="sct02"></section>
</body>
</html>
