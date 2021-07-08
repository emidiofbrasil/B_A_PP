<?php 
/* *******************************

@Jose_Emidio_Francelino_
@08_May_2021_
@function_words_
@class_Model_Login_
@Model_Login_com_View_Login

******************************** */
namespace Model;
use controller\auth;
/**
 * 
 */
class Login
{
	public $message = "";	
	function __construct($arg)
	{
		$Sessn = new auth(
			array(
			'Area' => 'BAPP',
			'user' => $_POST["user"], 
			'pws' => $_POST["pws"], 
			'data' => date("Y-m-d h:m")
			)
		);

		if ($Sessn->status==="OK"){

			_Print( _Htm( ["h1"]), ["Welcome!"] ) );

			header('location: '.server );
		} else {

			$Sessn->logout();
			$this->message = "
			<center>
			<h2>
			Usuário ou senha invalidos!
			</h2>
			</center>
			";	
		}
	}
}