<?php 
/*
@JoseEmidioFrancelino
@30_Mai_2021
@Ferramenta_Linha_Comando_Automatizar_EmDesenvolvimento
*/
namespace controller;

class BuilderAPP{

    Public $Me="Tools Command Line";
    Public $Par;
    Public $Cmd=array(
        "Proccess" => array(
          "DropAllData",
          "Population"  
        ),
    	"Create" => array(
            "Database",
            "Table",
            "Page:Blog",
            "Page:CRUD",
        ),
    	"Compilar" => array(
            "Cache",
            "Fast",
            "Parts"
        );
    );
    
	function __construct($Par)
    {

   		$this->Par = $Par;
    }
    PUblic function getParam()
    {
        for ($i=1; $i < $this->Par ; $i++) { 
            # code...
        }      
    }
    Public function Commands()
    {
        

    }
}
?>