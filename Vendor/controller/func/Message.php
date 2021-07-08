<?php 
/* *******************************

@Jose_Emidio_Francelino_
@20_May_2021_
@function_FieldsBlank_
@Show_Message. 

Format: Message(Field);

*/
function Message( $Title,$Message )
{
	return(

		sprintf(
		'
		<div class="w3-display-container w3-yellow w3-padding w3-margin w3-border w3-orange w3-round-large" style="height:150px;margin:50px">

		  <div class="w3-display-topmiddle"> %s </div>

		  <div class="w3-display-middle"> %s </div>
		  <div class="w3-display-middle">
		  <br><br><br>
		  <input type="button" name="back" onclick="window.history.go(-1);" value="Back">

		  </div>
		  

		</div>			
		', $Title,$Message 
		)

	);
}
?>

