<?php 

	namespace LuCodex\Controllers;

	class ComunidadeController{

		public function index(){

			if (isset($_GET['solicitarAmizade'])) {
				$idPara = (int) $_GET['solicitarAmizade'];
				if(\LuCodex\Models\UsuariosModel::solicitarAmizade($idPara)) {
					\LuCodex\Utilidades::alerta('Amizade solicitada com sucesso!');
					\LuCodex\Utilidades::redirect(INCLUDE_PATH.'comunidade');
				}else{
					\LuCodex\Utilidades::alerta('Ocorreu um erro ao solicitar a amizade...');
					\LuCodex\Utilidades::redirect(INCLUDE_PATH.'comunidade');
				}
				
			}


			if(isset($_SESSION['login'])){
			\LuCodex\Views\MainView::render('comunidade');
		}else{ 
			\LuCodex\Utilidades::redirect(INCLUDE_PATH);
		}
	}


}




?>