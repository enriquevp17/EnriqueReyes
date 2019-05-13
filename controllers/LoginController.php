<?php

//require_once 'models/usuario.php';

class loginController{

	public function index(){
		require_once('views/share/head.php');
		require_once('views/login.php');
 require_once('views/share/footer.php');
	}

  public function login(){

			$_SESSION['identidad'] = "Administrador";

	  header("Location:".base_url);
	}

	public function logout(){
		  if(isset($_SESSION['identidad'])){
		    unset($_SESSION['identidad']);
		  }


		  header("Location:".base_url);
	}



} // fin clase ?>
