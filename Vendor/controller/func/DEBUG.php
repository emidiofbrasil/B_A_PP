<?php 

/* *******************************

@Jose_Emidio_Francelino_
@08_May_2021_
@function_DEBUG_
@Informa_Test_DEBUG. 

	Formato: DEBUG(__FILE__,__LINE__);

*/

function DEBUG(
	$page,
	$line
)
{

echo 
"
<hr>
<center>
<br><a href='".server."/bussines.php'>Home</a>  
<br><a href='".server."/test/README.MD'>README.MD</a>

- <a href='".server."'>Root</a>

</center>
<table>
	<tr>
		<td>System</td>			
		<td>:</td>
		<td>".PHP_OS."</td>
	</tr>
	<tr>
		<td>PHP_SAPI</td>			
		<td>:</td>
		<td>".PHP_SAPI."</td>
	</tr>	
	<tr>
		<td>PHP Ver</td>			
		<td>:</td>
		<td>".PHP_VERSION."</td>
	</tr>
	<tr>
		<td>Page</td>			
		<td>:</td>
		<td>".$page."</td>
	</tr>
	<tr>
		<td>Line</td>			
		<td>:</td>
		<td>".$line."</td>
	</tr>
</table><hr>";

echo implode(
	"<br>",
	getIdenty(file_get_contents($page))
);
}