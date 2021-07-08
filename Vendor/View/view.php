<?php 
/* *******************************

@Jose_Emidio_Francelino
@08_May_2021
@function_words
@class_View
******************************** */
namespace View;
use controller\files;

/**  
**  Template 
**  Variaveis:
**  - $k, diminutivo de Key 
**  - $v, diminutivo de value
**/
class View
{

public $Tmpl; // Html, o Template
public $Page; // Html, Pagina Reiderizada
public $Data; // Array pares Mnemonico valor

function __construct($Tmpl,$Data)
{
	// Le conteudo do template para Tmpl
	$this->Tmpl=(new Files($Tmpl))->Content;
	
	$this->Data=$Data;
	
	$this->Page=$this->Tmpl;

	$this->prepare();

} // __construct

public function prepare()
{
	foreach ($this->Data as $key => $value) {
		
		if (gettype($value)=="string"){

			$this->Page = 
			preg_replace("/".$key."/", $value, $this->Page);

		} else if (gettype($value)=="array"){

			if (preg_match_all(
				"/ListFor.*".$key.".*ListForEnd/", 
				$this->Page, 
				$StartForEnd)==1){

				$tmp = str_replace("ListForEnd", "", $StartForEnd[0][0]);
				$tmp = str_replace("ListFor", "", $tmp);
				$Lst="";

				foreach ($this->Data[$key] as $k => $v ) {

					$Lst .= str_replace($key, $v, $tmp);
				}			

				$this->Page = 
				preg_replace("/ListFor.*".$key.".*ListForEnd/", 
					$Lst, 
					$this->Page);
			}

			
			if (preg_match_all(
				"/TabFor".$key."=TabForEnd/", 
				$this->Page, 
				$StartForEnd)==1){

				$s_Ext="";
				foreach ( $this->Data[$key] as $k) {

					$s_Int="";
					foreach ($k as $V) {

						$s_Int .= sprintf("<td>%s</td>",$V);
						
					}

					$s_Ext .= sprintf("<tr>%s</tr>",$s_Int);		
				}

				$this->Page = 
				preg_replace("/TabFor.*".$key.".*TabForEnd/", 
					$s_Ext, 
					$this->Page);				
			}			

		}
	}
} // End prepare

} // End Class