<?php 
/* *******************************

@Jose_Emidio_Francelino_
@08_May_2021_
@classController_auth
@Controla_Acesso_APP

 ******************************* */
namespace controller;

/**
 *  Start session for security
 */
class auth
{

	// Name of session
	public $Area;

	// Status OK / nOK
	public $status;

	// Message of Err
	public $message;
	
	//  Start session with words and cookies
	function __construct($arr)
	{
		$this->message="Authentic!";
		
		if (count($arr)>0){
			if ((pws===$arr['pws']) and (user===$arr['user'])){
				
				// session_start();
				$this->Area=$arr;
				$this->addWords($arr);

			} else {

				$this->status = "nOK";
			}
		} else {
			$this->logout();
		}
	}

	//  Armazen Array
	public function addWords($arr)
	{
		try {

			if (isset($_SESSION)) {

				foreach ($arr as $key => $value) {

					$_SESSION[$key]=$value;
				}

				// $this->Area = $_SESSION;
				$this->status = "OK";
			}
		 	
		 } catch (Exception $e) {

			$this->status = "nOK";		 	
		 	$this->message = $e.message;
		 }
	}

	// Logout
	public function logout()
	{
		foreach ($_SESSION as $key => $value) {
			
			$this->status = "nOK";
			unset($_SESSION[$key]);
		}	
	}
}