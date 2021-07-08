<?php 
/* @Mesmo_App.PHP */

$Pth = explode("\\", getcwd() );

$Fdr = array_pop( $Pth );

header('location: http://localhost/home/B_A_PP/'.$Fdr.'/'.$Fdr.'.php/login');