<?php 
/* *******************************

@Jose_Emidio_Francelino_
@08_May_2021_
@class_Controller_router
@Gerencia_Roteamento_

 ******************************* */
namespace controller;

class router
{

	// Array population with parts the router
	public $route;

	// Number of the elements OBSOLET
	public $count;
	
	function __construct($arg)
	{
		// Array acho element in the router
		$this->route = preg_split("/[\/]+/", $_SERVER["REQUEST_URI"]);

		// Size of array
		$this->count = count( $this->route );
	}
}