<?php  
	
	namespace LuCodex\Controllers;

	class HomeController{

		public function index(){

			if (isset($_GET['logout'])){
				session_unset();
				session_destroy();

				\LuCodex\Utilidades::redirect(INCLUDE_PATH);
			}

			if(isset($_SESSION['login'])){
				//Renderiza a home do usuário.

				//Existe pedido de Amizade?

				if (isset($_GET['recusarAmizade'])) {
					$idEnviou = (int) $_GET['recusarAmizade'];
					\LuCodex\Models\UsuariosModel::atualizarPedidoAmizade($idEnviou,0);
					\LuCodex\Utilidades::alerta('Amizade Recusada');
					\LuCodex\Utilidades::redirect(INCLUDE_PATH);
					
				}else if(isset($_GET['aceitarAmizade'])){
					$idEnviou = (int) $_GET['aceitarAmizade'];
					if(\LuCodex\Models\UsuariosModel::atualizarPedidoAmizade($idEnviou,1)){
						\LuCodex\Utilidades::alerta('Amizade Aceita!');
						\LuCodex\Utilidades::redirect(INCLUDE_PATH);
					}else{
						\LuCodex\Utilidades::alerta('Ops... ocorreu um erro');
						\LuCodex\Utilidades::redirect(INCLUDE_PATH);	
					}
				}


				//Existe postagem no feed?

				if (isset($_POST['post_feed'])){

					if ($_POST['post_content'] == ''){
						\LuCodex\Utilidades::alerta('Não permitimos posts vazios.');
						\LuCodex\Utilidades::redirect(INCLUDE_PATH);
					}

					\LuCodex\Models\HomeModel::postFeed($_POST['post_content']);
					\LuCodex\Utilidades::alerta('Post feito com sucesso!');
					\LuCodex\Utilidades::redirect(INCLUDE_PATH);
				}


				\LuCodex\Views\MainView::render('home');
			}else{
				//Renderizar para criar conta.

				if(isset($_POST['login'])){
					$login = $_POST['email'];
					$senha = $_POST['senha'];

					//Verificar no banco de dados.

					$verifica = \LuCodex\MySql::connect()->prepare("SELECT * FROM usuarios WHERE email = ?");
					$verifica->execute(array($login));

					if($verifica->rowCount() == 0){
						//Não existe o usuário!
						\LuCodex\Utilidades::alerta('Não existe nenhum usuário com este e-mail...');
						\LuCodex\Utilidades::redirect(INCLUDE_PATH);
					}else{
						$dados = $verifica->fetch();
						$senhaBanco = $dados['senha'];
						if(\LuCodex\Bcrypt::check($senha,$senhaBanco)){
							//Usuário logado com sucesso

							$_SESSION['login'] = $dados['email'];
							$_SESSION['id'] = $dados['id'];
							$_SESSION['nome'] = explode(' ',$dados['nome'])[0];
							\LuCodex\Utilidades::alerta('Logado com sucesso!!');
							\LuCodex\Utilidades::redirect(INCLUDE_PATH);
						}else {
						\LuCodex\Utilidades::alerta('Senha incorreta...');
						\LuCodex\Utilidades::redirect(INCLUDE_PATH);
						
						}
					}

				}

				\LuCodex\Views\MainView::render('login');
			}

		}


	}




?>