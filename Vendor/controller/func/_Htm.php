<?php 
/* *******************************

@Jose_Emidio_Francelino_
@08_May_2021_
@function_Htm_
@Receive_Argument_Return_HTML. 

 ******************************* */
function _Htm($Tgs, $Vlr){

   $Ti="";
   $To="";
   foreach ($Vlr as  $k) {

      $Ti = $k;
      foreach ($Tgs as  $v) {
         
         $Ti = "\n". sprintf("<%s>%s</%s>",$v,$Ti,$v);
      }
      $To .= $Ti;
   }
   return( $To."\n" ); 
}

/*
** Exemplo

   $Tgs = ['center','h2']
   $Vlr  = ['Constante','User']
   
   _Htm($Tgs, $Vlr) -> <h2><center>Constante</center></h2><h2><center>user</center></h2>

   1. Inicializa.  $Ti, $To.

   2. Le cada elemento de $Vlr.

   2.1. Primeiro elemento 'Constante'.

   2.2. Atribui o valor para $Ti.

   2.2.1. Le cada elemento de $Tgs.

   2.2.2. $v tem o valor de center.

   2.2.3. Atribui a $Ti o valor <center>Constante</center>

   2.2.4. $v tem o valor de h2.

   2.2.5. Atribui a $Ti o valor <h2><center>Constante</center></h2>

   2.3. concantear $To e $Ti valor <h2><center>Constante</center></h2>.

   2.4. Segundo elemento 'User'.

   2.5. Atribui o valor para $Ti.   

   2.5.1. Le cada elemento de $Tgs.

   2.5.2. $v tem o valor de center.

   2.5.3. Atribui a $Ti o valor <center>use</center>

   2.5.4. $v tem o valor de h2.

   2.5.5. Atribui a $Ti o valor <h2><center>user</center></h2>   

   2.6. concantear $To e $Ti 
   valor <h2><center>Constante</center></h2><h2><center>user</center></h2>.

   2.7. retorna valor de $To

*/