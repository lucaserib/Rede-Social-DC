<!DOCTYPE html>
<html>
<head>
	
	<title>Login na Rede Social</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
	<link href="<?php echo INCLUDE_PATH_STATIC; ?>estilos/style.css" rel = "stylesheet">
</head>
<body>

	<div class="sidebar"><div/>

	<div class ="form-container-login">

		<div class="logo-chamada-login">
			<img src="<?php echo INCLUDE_PATH_STATIC ?>images/logodanki.svg" >		
			<p>Conecte-se com seus amigos e expanda seus aprendizados com sua rede social LuCodex.</p>	
		</div><!--logo-chamada-login-->

		<div class="form-login">
			<form>
				<input type="text" name="login" placeholder="Login...">
				<input type="password" name="senha" placeholder="Senha...">
				<input type="submit" name="acao" value="Logar">
			</form>
			<p><a href="<?php echo INCLUDE_PATH; ?>registrar">Criar Conta</a></p>

		</div><!--form-login-->

	</div>


</body>
</html>

