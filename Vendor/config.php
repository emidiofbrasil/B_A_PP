<?php 
/*
@Jose_Emidio_Francelino
@Configuration
@26_Mai_2021
@Define_Constant_And_Variavel_Load_FuncPHP_Javascript
*/
define('Version','7.5.6');
// @Folders_Vendor
define('FolderVendor',__dir__);
define('Controller',__dir__."\\controller");
define('func_PHP',__dir__."\\controller\\func");
define('View',__dir__."\\View");
define('Model',__dir__."\\Model");

// @Load_All_Class_App
require('../Vendor/Autoload.php');

// @Load_All_Function_App
use controller\files;

$fls = new Files('');
$fls->listFiles( func_PHP );

foreach ($fls->Files as $key => $v) {

	include sprintf("controller/func/%s",$v);
}