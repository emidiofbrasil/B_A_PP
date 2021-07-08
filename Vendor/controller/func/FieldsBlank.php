<?php 
/* *******************************

@Jose_Emidio_Francelino_
@20_May_2021_
@function_FieldsBlank_
@Alert_Field_Not_Is_Empty. 

Format: FieldsBlank(Field);

*/
function FieldsBlank( $arg )
{
	return(

		sprintf(
		'
		<div class="w3-display-container w3-red w3-padding w3-margin w3-border w3-orange w3-round-large" style="height:150px;margin:50px">

		  <div class="w3-display-topmiddle">Campo %s</div>

		  <div class="w3-display-middle">DEVE SER PREENCHIDO</div>
		  <div class="w3-display-middle">
		  <br><br><br>
		  <input type="button" name="back" onclick="window.history.go(-1);" value="Back">

		  </div>
		  

		</div>			
		',$arg
		)

	);
}
?>

