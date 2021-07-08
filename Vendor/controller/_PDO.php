<?php 

/* *******************************

@Jose_Emidio_Francelino_
@08_May_2021_
@class_Controller_PDO
@Acess_MySQL_SQLite3_PDO_

 ******************************* */

namespace controller;
use PDO;


/**
 * Class PDO internacionalization, receive DB for SQlite or MySQL. 
 */
class _PDO extends PDO
{
	// Result off SELECT

	public $Msg; 
	public $rows;
	public $Me;
	public $SQL;
	public $frmTable;
	public $myMethods=array();
	
	function __construct($DB)
	{
	 $this->myMethods=["table","runSQL","run"];
	 $this->Me = "class responsavel PDO";	
	 try {

		// DB is Database	
		switch (Strtoupper($DB)) 
		{
			case 'MYSQL': 

			parent::__construct('mysql:host='.MySQL.';dbname='. db, user, pws);
			break;

			case 'SQLITE':

			parent::__construct('sqlite:'.Database.'/'.db);
			break;

		default: break;
		} 	
	 } catch (PDOException $e) {
	 	
		$this->Msg = "Err! :: ".$e->message;
	 }

	}

	// Command Insert Into, Delete From
	public function run($sql)
	{
		$this->SQL = $sql;
		parent::query($sql);
	}

	// Command Select
	public function runSQL($sql)
	{
		$this->SQL = $sql;
		$arr = array();
		
		foreach (parent::query($sql) as $row) {
			array_push($arr, $row);
		}
		
		$this->rows = $arr;
	}

	// Format TAG for Table no HTML.
	public function table()
	{
		$Rows_="";
		$Caption="";

		foreach (array_keys(array_unique($this->rows[0])) as $k=>$v)
		{
			$Caption .= _Htm(["TH"],[$v]);	
		}

		$Caption = _Htm(["TR","THEAD"], [$Caption]);


		for ($i=0; $i < count($this->rows) ; $i++) { 
			
			$Row_="";
			foreach (array_values(array_unique($this->rows[$i])) as $k=>$v)
			{
				$Row_ .= _Htm(["TD"],[$v]);	
			}
			$Rows_ .= _Htm(["TR"], [$Row_]);
		}

		$Rows_ = _Htm(["TBODY"], [$Rows_]);

		$this->frmTable = _Htm(["TABLE"], [$Caption . $Rows_] );

		return( $this->frmTable );		
	}
}