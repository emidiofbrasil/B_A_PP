<?php 
/* @Mesmo_App.PHP */

$server = "home/B_A_PP/Bussines";
// $server ="Bussines";

$Pth = explode("\\", getcwd() );

$Fdr = array_pop( $Pth );

header('location: http://localhost/'.$server.'/'.$Fdr.'.php/login');