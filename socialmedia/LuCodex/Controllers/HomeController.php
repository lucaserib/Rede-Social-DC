<?php  
	
	namespace LuCodex\Controllers;

	class HomeController{

		public function index(){

			if(isset($_SESSION['login'])){
				//Renderiza a home do usuário.
				\LuCodex\Views\MainView::render('home');
			}else{
				//Renderizar para criar conta.
				\LuCodex\Views\MainView::render('login');
			}

		}


	}




?>