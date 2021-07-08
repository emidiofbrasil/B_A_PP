<?php 
/* *******************************

@Jose_Emidio_Francelino_
@08_May_2021_
@function_words_
@All_Words_Exists_Only_One_Order_Alfa

*/

function words($text){

	preg_match_all("/[A-Z]*[ |\(]/", strtoupper($text), $a);

	$b=[];

	foreach ($a as $k) {
		foreach ($k as $v) {

			if ( (trim($v)!="") && (trim($v)!="(") && (trim($v)!="|") )
			{
				array_push($b, str_replace("(", "",$v) ); 
			}
		}
	}

	sort($b);
	return( implode(" - ", array_unique($b) ) );
}