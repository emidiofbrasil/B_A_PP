<?php 
/*
@Jose_Emidio_Francelino
@Configuration
@07_Jun_2021
@Define_Constant_And_Variavel_Load_FuncPHP_Javascript

*/
// @Constants
define('Folder','Bussines');
define('Title','Bussines');
define('NameAPP','Framework BAPP');
define('Author','Programador');
define('VersionBussines','01.01.01');
define('CDN','http://localhost/cdn');
define('IPServer','127.0.0.1');
define('PortServer','8090');
define('server','http://localhost/home/B_A_PP/'.Folder);
define('domain','http://localhost/home/B_A_PP/'.Folder);
define('MySQL','localhost');
define('db','tkinact');
define('user','root');
define('pws','masterkey');
define('Pages',["none"]);
// @Message
define('err_001_Database','No data!');
define('err_100_MessageLogin','Access Denied!');
// @Commands_SQL
define('cmdSQL','SELECT * FROM %s'); // Veja sprintf
define('SQLWhere','WHERE %s REGEXP "%s"'); // Veja sprintf
// @Folders_Bapp
define('FolderBAPP',__dir__);
define('Template',__dir__."\\w");
define('Upload',__dir__."\\upload");
define('Assets',__dir__."\\Assets\\img");
define('func_JS',__dir__."\\w\\js");
// @Type_File_Use
define('Extension',['.HTM','.HTML','.PHP','.JS','.JSON','.XML','.PDF','.JPG','.PNG']);

require('../Vendor/config.php');
