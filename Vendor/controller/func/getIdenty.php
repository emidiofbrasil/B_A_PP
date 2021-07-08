<?php 
/* *******************************

@Jose_Emidio_Francelino_
@08_May_2021_
@Function_getIdenty_FILE
@Return_Identy_Script. 

 ******************************* */
function getIdenty($FILE){

   preg_match_all("/\@[a-zA-Z0-9_]*/",$FILE,$Identy);

   $Ident = preg_replace("/\@|\_/", " ", $Identy[0]);

   return( $Ident ); 
}