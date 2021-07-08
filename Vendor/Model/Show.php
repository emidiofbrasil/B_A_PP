<?php 
/* *******************************
@Jose_Emidio_Francelino_
@26_May_2021_
@function_words_
@class_Model_Show_
@Model_Painel_De_Controle
******************************** */
namespace Model;

use controller\files;
use controller\_PDO;
use controller\auth;

use View\view;
use View\View_II;
use Model\Login;
use Model\history;
use Model\Dashboard;

/**
 *  Mount the page for show.
 */
class Show 
{
	// Propety is Page to Show
	public $Page;

	function __construct($arg)
	{

		// Get the header.
		$this->Page  .= (new Files(Template."\\header.html"))->Content;

		// Navegation between in the page

		// Get name page with regular express
		switch (preg_split("/\?|\&/", $arg)[0]) {

			case 'History':			

				$this->Page .= Message( "ALERT!", (new History(""))->LOG );	
			
			break;								
			case 'Welcome':

				if( (user==$_POST["user"]) && (pws==$_POST["pws"]) ){

					$welcome = (new Files(Template."\\welcome.html"))->Content;
					
					$DataToView = array(
						"=SERVER" => server."/Bussines.php/Welcome",
						"=IPServer" => IPServer
					);				

					$this->Page .= (new View_II($welcome, $DataToView ))->Page;	

				} else {

					$this->Page .= Message( "Sorry!","Access Denied" );	
				}
			break;				
			case 'Contact':

				$this->Page .= PageBeConstruct( $arg );
			break;				
			case 'auth':

				$this->Page .= ( new Login($arg) )->message;
			break;		
			case 'Logoff':		
				session_start(["Area"]);
				$Sessn = new auth([]);
				$Sessn->logout();
				header('location: '.server );			
			break;		
			case 'Bussines.php':
			case 'Login':


				$DataToView = array(
					"=SERVER" => server."/Bussines.php/Welcome"
				);
				$this->Page .= (new View(Template."\\login.html", $DataToView ))->Page;	

			break;	
			default:			

				$this->Page .= DataNotFound( $arg );				

			break;
		}

		// Get the footer

		$DataToView = array(
			"=Author" => Author,
			"=Version" => Version,
			"=SERVER=" => server
		);
		$this->Page .= (new View(Template."\\footer.html", $DataToView ))->Page;				

		// Script Javascript Global
		$TagJS=""; 	$js = new Files(''); $js->listFiles( func_JS );

		foreach ($js->Files as $key => $value) {
			$TagJS .= sprintf("<script src='%s'></script>",func_JS."/".$value);
		}			

		$this->Page = str_replace('<script src="main.js"></script>', $TagJS, $this->Page);

	}
}