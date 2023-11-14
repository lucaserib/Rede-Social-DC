<?php  
	
	namespace LuCodex\Controllers;

	class RegistrarController{

		public function index(){

			if(isset($_POST['registrar'])){
				$nome = $_POST['nome'];
				$email = $_POST['email'];
				$senha = $_POST['senha'];

				if(!filter_var($email, FILTER_VALIDATE_EMAIL)){

					\LuCodex\Utilidades::alerta('E-mail Inválido.');
					\LuCodex\Utilidades::redirect(INCLUDE_PATH.'registrar');
				} else if (strlen($senha) <6){
					\LuCodex\Utilidades::alerta('Sua senha é muito curta.');
					\LuCodex\Utilidades::redirect(INCLUDE_PATH.'registrar');
				}else if(\LuCodex\Models\UsuariosModel::emailExists($email)){

					\LuCodex\Utilidades::alerta('Este e-mail já existe no banco de dados!');
					\LuCodex\Utilidades::redirect(INCLUDE_PATH.'registrar');
				}else {
					//Registrar usuário.
					$senha = \LuCodex\Bcrypt::hash($senha);
					$registro = \LuCodex\MySql::connect()->prepare("INSERT INTO usuarios VALUES (null,?, ?, ?,'')");
					$registro->execute(array($nome,$email,$senha));

					\LuCodex\Utilidades::alerta ('Registrado com sucesso!');
					\LuCodex\Utilidades::redirect(INCLUDE_PATH);


				}

			}

			\LuCodex\Views\MainView::render('registrar');
			

		}

	}




?>