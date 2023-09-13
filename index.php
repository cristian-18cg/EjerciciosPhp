<?php
 include_once './procesar.php';

 $objOperaciones =new Operaciones(12,4);
 $objPromedio =new Promedio(30,0,2,5,3,15,28,11,15,10);
 

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
 
 echo ("<h3>Raíz Cuadrada</h3>");
 echo ("<p>Raiz de: ".$objOperaciones->getdatos()." = ".$objOperaciones->getraiz()."</p>");

 echo ("<h3>Modulo</h3>");
 echo ("<p>".$objOperaciones->getdatos()." mod ".$objOperaciones->getdatos2(). " = ".$objOperaciones->getModulo()."</p>");

 echo ("<h3>Porcentaje </h3>");
 echo ("<p>El ".$objOperaciones->getdatos2()." porciento de ".$objOperaciones->getdatos(). " = ".$objOperaciones->getporcentaje()."</p>");

 echo ("<h3>Area de un circulo </h3>");
 echo ("<p>El Area de un circulo con radio ".$objOperaciones->getdatos(). " = ".$objOperaciones->getAreaCirculo()."</p>");

 echo ("<h3>Promedio</h3>");
 echo ("<p>El promedio de 30+0+2+5+3+15+28+11+15+10 es: ".$objPromedio->getprome()."</p>");

 echo ("<h3>Conversión de Celsius a Fahrenheit</h3>");
 echo ("<p>".$objOperaciones->getdatos()." grados Celsius son equivalentes a " .$objOperaciones->getCelcuisaFarenheit()." grados Fahrenheit</p>");

 echo ("<h3>Suma de los Primeros N Números Naturales</h3>");
 echo ("<p>La suma de los primeros ".$objOperaciones->getdatos()." números naturales es: " .$objOperaciones->getnumnat()."</p>");

 echo ("<h3>Resolución de Ecuación Cuadrática</h3>");
 echo($objPromedio->ecuacioncua());

 echo ("<h3>Área de un Triángulo</h3>");
 echo ("<p>Base: ".$objOperaciones->getdatos()." Altura: ".$objOperaciones->getdatos2(). " Area = ".$objOperaciones->getareatriangulo()."</p>");


 echo ("<h3>Perímetro de un Cuadrado</h3>");
 echo ("<p>El perímetro de un cuadrado con lado ".$objOperaciones->getdatos()." es ".$objOperaciones->getarearectangulo()."</p>");
