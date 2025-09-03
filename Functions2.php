<?php
function cel_mai_mare_divizor_comun($nr1, $nr2){

	   while($nr1 != $nr2){
	     if($nr1 > $nr2){
	         $nr1 = $nr1 - $nr2;
	     }else{
	         $nr2 = $nr2 - $nr1;
	     } 
	   }
	   
 return $nr1;
}
function cel_mai_mic_multiplu_comun($nr1, $nr2){
           
	   $x = $nr1;
	   $y = $nr2;

	   while($x != $y){

	     if($x > $y){
	         $x = $x - $y;
	     }else{
	         $y = $y - $x;
	     }  
	   }
	   $cmmmc = ($nr1 * $nr2) / $x;
return $cmmmc;
}
function interschimbarea_valorilor_a_două_variabile($nr1, $nr2){
    $aux = 0;
    $nr1;
    $nr2;
    $aux = $nr1;
    $nr1 = $nr2;
    $nr2 = $aux;
   
return $nr1." și ".$nr2;
}

function myFunction($nr1, $algoritm, $nr2){
  $algo;
  switch($algoritm){
   case "cel mai mare divizor comun":
    $algo = cel_mai_mare_divizor_comun($nr1, $nr2);
    break;
   case "cel mai mic multiplu comun":
    $algo = cel_mai_mic_multiplu_comun($nr1, $nr2);
    break;
   case "interschimbarea valorilor a două variabile":
    $algo = interschimbarea_valorilor_a_două_variabile($nr1, $nr2);
    break;
   default:
    echo "A apărut o eroare!";
    break;
}
  return $algo;
}

$nr1 = $_GET["nr1"];
$algoritm = $_GET["algoritm"];
$nr2 = $_GET["nr2"];


echo "Rezultat: ". myFunction($nr1, $algoritm, $nr2);
?>

