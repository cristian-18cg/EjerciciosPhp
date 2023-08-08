<?php
 include_once './Controladores/procesar.php';

 $objOperaciones =new Operaciones(12,4);
 $objPromedio =new Promedio(10,10,8,10,10,10,30,10,10,10);
 

 echo ("<h1>Operaciones</h1>");

 echo ("<h3>Suma</h3>");
 echo ("<p>".$objOperaciones->getdatos()." + ".$objOperaciones->getdatos2(). " = ".$objOperaciones->getsumaFirst()."</p>");
 
 echo ("<h3>Resta</h3>");
 echo ("<p>".$objOperaciones->getdatos()." - ".$objOperaciones->getdatos2(). " = ".$objOperaciones->getRestaFirst()."</p>");

 echo ("<h3>Multiplicacion</h3>");
 echo ("<p>".$objOperaciones->getdatos()." * ".$objOperaciones->getdatos2(). " = ".$objOperaciones->getMultiplicacionFirst()."</p>");

 echo ("<h3>Division</h3>");
 echo ("<p>".$objOperaciones->getdatos()." / ".$objOperaciones->getdatos2(). " = ".$objOperaciones-> getDivisionFirst()."</p>");
 echo ("<h3>Potencia</h3>");
 echo ("<p>".$objOperaciones->getdatos()." ^ ".$objOperaciones->getdatos2(). " = ".$objOperaciones->getPotenciaFirst()."</p>");
 
 echo ("<h3>Promedio</h3>");
 echo ("<p>".$objPromedio->getprome()."</p>");


?>