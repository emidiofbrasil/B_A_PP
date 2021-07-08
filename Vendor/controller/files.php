<?php 
/* *******************************
@Jose_Emidio_Francelino_
@26_May_2021_
@class_Controller_files
@Manager_Files
 ******************************* */

 namespace controller;

/**
 *  Use for read and save the files text.
 */
class files
{
	public $nameFile;          	// Name file with Path
	public $Content;           	// Content of file
	public $Status;          	// Return status 
	public $Msg;  		        // Message return status
	public $extFile=Extension;  // Type of file
	public $Files=[];           // List files in the folder


	// Start class arg is name of file.
	function __construct($arg)
	{
		$this->nameFile = $arg;
		$this->readAll();
	}

	// show name of file - deprecated.
	public function getName()
	{
		return( $this->nameFile );
	}

	// Save content file as.
	public function saveAs($fileSave)
	{
		try {
			// Handler function open
			$id = fopen($fileSave, "a");

			// Save content of file.
			// Return number indicator result.
			$this->Status = fputs($id, $this->Content);
			$this->Msg = "OK";

		} catch (Exception $e) {

			// Has err access file.
			$this->Msg = "Err:".$e->message;	
		}			
	}

	// Read content of file
	public function readAll()
	{
		try {

			// Exist file is true
			if ( file_exists($this->nameFile) )
			{
				// Handler function open
				$id = fopen($this->nameFile, "r");

				// Read all content of file.
				$this->Content = fread($id, filesize($this->nameFile));

				fclose($id);

				$this->Msg = "OK";
			}

		} catch (Exception $e) {

			// Has err access file.
			$this->Msg = "Err:".$e->message;	
		}		
	}

	// List files in the folder.
	public function listFiles($dir_)
	{

		// Array with all files in the folder.
		$d = dir( $dir_ );

	    // Get name echo the file in the folder.
	    while ( ($file = $d->read()) !== false ) 
	    {

	    	// Array with extension.
	    	$extF = $this->extFile;

	    	// Pilha read extension ok.
			while ( count($extF) > 0 ) 
			{
		    	// Confirm the file with you extension in the list.
		    	if ( strpos( strtoupper($file) , array_pop($extF) ) > 0 )
		    	{
					// Insere in the list show class real.
					array_push($this->Files, $file);
		    	}			
			}    	
	    }
	    $this->Files = array_unique($this->Files);
	}
}
