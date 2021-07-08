<?php
/* *******************************
@Jose_Emidio_Francelino
@26_May_2021 @08_Jun_2021
@CoreApp
@Start_up_Application
******************************** */
	// Autoload CLASSES
	require('config.php');
	use controller\_PDO;
	use controller\files;		
	use View\View_II; 
	use controller\Auth;	
	use controller\router;

	$r = new router('');					 // Get route
	$Page = array_pop( $r->route );          // Get Name of Page, or command
	if(session_id() === "") session_start(); // This start session security

	// Combine Data with your view
	function ShowDataView($Page,$Data)
	{
		$View = (new Files(Template."\\".$Page))->Content;
		$P_D_O = new _PDO("MYSQL");
		$DtView = ArrayDtVw("Welcome!!",$Data);
		// Definition the table in Database. Name View=Table=Class
		if ( in_array($Data, Pages ) ){

			$cmdSQL = $Data=="HISTORY"?SQL_History:cmdSQL;

			$P_D_O->runSQL(sprintf($cmdSQL,"tkinact_".$Data));
			$DtView = ArrayDtVw($P_D_O->table(),$Data);
		} 
		return ( ( new View_II($View,$DtView) )->Page );
	}
	// Return Data Principal 
	/* Sintaxe ArrayDtVw(=PAGE) e ArrayDtVw(=PAGE,=TITLE) */
	function ArrayDtVw(){
		if ( func_num_args() > 1){
			return(
				array(
					"=SERVER" => server."/".Folder.".PHP",
					"=NameAPP" => NameAPP,
					"=VERSION" => VersionBussines,
					"=USER" => user,
				    "=AUTOR" => "Nome Progamador",
				    "=PAGE" => func_get_args()[0],
				    "=TITLE" => func_get_args()[1],
					"=CSS" => (new Files(Template."\\css\\stylePHP.css"))->Content
				)		
			);
		}
	}

	function Test_MySQL()
	{

	try{

		$dbh = new pdo('mysql:host='.MySQL.';dbname='.db,user,pws);
		// die(json_encode(array('outcome' => true)));
		
		}catch(PDOException $ex){
		
			die(json_encode(array(
			
				'outcome' => false,
				'message' => 'Unable to connect'
			)));
		}		
	}

// *****************************************************************	
// ******************  CORE APPLICATION   **************************	
// *****************************************************************	

	Test_MySQL();

	switch ( strtoupper($Page) ) {
		// Leave of APP
		case 'LOGOUT':  
			(new Auth([]))->logout();
			echo ShowDataView("Login.html",strtoupper(Title));
			//header('location: http://localhost/home/BAPP/'.Folder.'/'.Folder.'.php/Login');			
		break;
		// Present Page LOGIN
		case 'LOGIN':
			if (isset($_POST["USER"])){
				// Login
				(new Auth(["pws"=>pws, "user"=>user]));
				if ($_POST['USER']===$_SESSION['user']){
					echo ShowDataView("Home.html","HOME");
					die();
				} else {
					_Print( _Htm(["h2","center"],[err_MessageLogin]) );
				}
			}
			echo ShowDataView("Login.html",strtoupper(Title));
		break;
		// Present Page Bussines, only insert manual
		case strtoupper(Title).'.PHP':
			echo ShowDataView("welcome.html",strtoupper(Title));
		break;
		// ***************************************
		// this Here your code APP implementation
		// ***************************************
		default:
			if (Connect()===TRUE) {
				echo ShowDataView("Home.html",strtoupper($Page));
			} else {
				echo ShowDataView("Login.html",strtoupper(Title));
			}
		break;
		// ***************************************
		// The end, the Code of implementation.
		// List for search TASK
		// ***************************************		
	}

// *****************************************************************	
// *****************************************************************	
// *****************************************************************	
