<?php 
/* *******************************

@Jose_Emidio_Francelino_
@08_May_2021_
@function_Test_Connect
@Returna_True_Login. 
 ******************************* */
function Connect(){

	if(session_id() === "") session_start();

	if (count($_SESSION)>1){
		if (pws===$_SESSION['pws']){
			return( true );
		} else {
			return( false );
		}
	} else {
		return( false );
	}	
}
