<?php 
/* *******************************

@Jose_Emidio_Francelino_
@08_May_2021_
@function_PageBeConstruct_

Format: PageBeConstruct(NameFILE);

*/
function PageBeConstruct( $arg )
{
	return(

		sprintf(
		'
		<div class="w3-display-container w3-red w3-padding w3-margin w3-border w3-orange w3-round-large" style="height:150px;margin:50px">

		  <div class="w3-display-topmiddle">Pagina %s</div>

		  <div class="w3-display-middle">%s</div>
		  
		  <div class="w3-display-bottommiddle">%s</div>

		</div>			
		',$arg,'Em','Construção'
		)

	);
}	