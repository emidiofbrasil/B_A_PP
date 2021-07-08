<?php 
/*
**  Script linha de comando
*/

// @CoreAPP
$B = new main($argv);

if ( in_array("Document",$argv) ) $B->WillBeCreate();
if ( in_array("Remenber",$argv) ) $B->WillBeCreate();
if ( in_array("update",  $argv) ) $B->WillBeCreate();
if ( in_array("clear",   $argv) ) $B->clear();
if ( in_array("create",  $argv) ) $B->create();
if ( in_array("config",  $argv) ) $B->config();
if ( in_array("clone",   $argv) ) $B->WillBeCreate();
if ( in_array("info",    $argv) ) echo $B->getContentFile( "alert\Leiame" );

echo $B->LOG;
die();

// @Class Principal
class main 
{
	public $Identy;
	public $LOG ="";
	public $arg =[];

	function __construct($arg)
	{
		$_getcwd = explode("\\", getcwd() );
		$this->Identy = array(
			"PHPScript" => $_SERVER["PHP_SELF"],
			"Vendor" 	=> "..\Vendor\startFiles\\",
			"APP" 		=> $_getcwd[count($_getcwd)-1],
			"Ver"	 	=> "1.0.1",
			"TITLE" 	=> "Builder Application BAPP",
			"FOLDER" 	=> ["w","w\css","w\js","w\JSON","upload","Assests","Assests\JSON","Test","Database"],
			"FILES" 	=> ["BUSSINES.PHP","index.php","config.php"],
			"startFiles"=> ["w\js\main.js", "w\css\style.css","w\Home.html","w\Login.html","w\welcome.html"]
		);

		$this->param($arg);

		$this->LOG	.=  "\n".$this->Identy["TITLE"]." Ver:".$this->Identy["Ver"];
	}

	public function create()
	{

		foreach ($this->Identy["FOLDER"] as $Folder) {
			if (!file_exists($Folder)) {
	    		mkdir($Folder, 0777, true);
			}
		}

		foreach ( array_merge($this->Identy["FILES"], $this->Identy["startFiles"]) as $File )
		{
			// echo "\nCriando $File";
			$F = ( $File===$this->Identy["FILES"][0] )?$this->Identy["APP"].".PHP":$File;

			if (!file_exists($F)) {
				file_put_contents( $F, $this->getContentFile( $File ) );
			}

		}

		$this->LOG	.=  "\n\nCriada Aplicação ".$this->Identy["APP"]." !";	
	}

	public function config()
	{
		echo "\n\n".file_get_contents("config.php")."\n\n";
	}	

	public function param($param)
	{

		if ( file_exists("config.php") ) {
			$configPHP = file_get_contents("config.php");

			for ($i=1; $i < count($param) ; $i++) { 
				if ( !in_array($param[$i],["create","clear","info"] ) ){
					array_push($this->arg, $param[$i] );
				}
			}
			foreach ($this->arg as $a){
				switch (explode(":",$a)[0]) {
					case 'pws':
					case 'user':
					case 'db':
					case 'Title':
					case 'Author':
					case 'NameAPP':
					case 'Folder':

						$this->setDataConfig($a);
					break;
					default: 

						echo $this->getContentFile( "alert\badCommand" );
					break;
				}
			}
		}
		$this->LOG	.=  "\nObrigado por usar BAPP!";
	}

	public function setDataConfig($a)
	{

		$Const 		= sprintf("define('%s','%s');", explode(":",$a)[0], explode(":",$a)[1]);
		$configPHP 	= file_get_contents("config.php");
		$configPHP 	=
			preg_replace("/define\(\'".explode(":",$a)[0]."\',\'[a-zA-Z]*'\);/",
				$Const, $configPHP);

		$this->rrmFile("config.php");
		file_put_contents("config.php",$configPHP );

		$this->LOG	.=  "\nArquivo config.php Atualizado!";
	}
	public function WillBeCreate()
	{
		echo $this->getContentFile( "alert\WillBeCreate" );
	}

	public function getContentFile($File){

		if ( file_exists($this->Identy["Vendor"].$File) ) {

			return( file_get_contents($this->Identy["Vendor"].$File) );
		} else {
			return( " " );
		}
	}

	public function clear()
	{

		foreach (array_reverse( $this->Identy["FOLDER"] ) as $file) {
			$this->rrmDir($file);
		}

		foreach ($this->Identy["FILES"] as $file) {
			$this->rrmFile($file);
		}

		$this->rrmFile( $this->Identy["APP"].".PHP" );

		$this->LOG	.=  "\nDeletada Aplicação!";
	}

	public function rrmDir($FOLDER)
	{

		if (file_exists($FOLDER)) {
			$files = array_diff(scandir($FOLDER), array('.','..'));
			foreach ($files as $file) {
				$this->rrmFile("$FOLDER/$file");
			}
			rmdir($FOLDER);
		}
	}

	public function rrmFile($FILE)
	{
		if (file_exists($FILE)) {
			unlink($FILE);
		}
	}

}
