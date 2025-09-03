<?php
function cea_mai_mare_cifră_a_unui_număr_întreg($nr){
            $nr;
	    $cea_mai_mare_cifra = 0;
	    $ultima_cifra = 0;

	    while($nr > 0){

	        $ultima_cifra = $nr % 10;
	        if($cea_mai_mare_cifra < $ultima_cifra){
	            $cea_mai_mare_cifra = $ultima_cifra;
	        }
	        $nr = floor($nr / 10);
	    }
		
     return $cea_mai_mare_cifra;
}
function eliminarea_primei_cifre_a_unui_număr_întreg($nr){
     
     $a = $nr;
     $prima_cifra = 1;
     
     while($a > 9){
         
       $prima_cifra = $prima_cifra * 10;
       $a = floor($a / 10);
     }
     $nr = $nr % $prima_cifra;
     
    return $nr;
}
function eliminarea_cifrelor_pare_ale_unui_număr_întreg($nr){
            $nr;
	    $ultima_cifra = 0;
	    $nr_nou = 0;

	    while($nr > 0){

	        $ultima_cifra = $nr % 10;
	        if($ultima_cifra % 2 != 0){
	           $nr_nou = $nr_nou * 10 + $ultima_cifra; 
	        }
	        $nr = floor($nr / 10);
	    }
	    $a = 0;
	    while($nr_nou != 0){

	        $a = ($a * 10) + ($nr_nou % 10);
	        $nr_nou = floor($nr_nou / 10);
	    }
	    
  return $a;
}
function înlocuirea_primei_cifre_cu_ultima_și_viceversa($nr){
           $nr;
	   $ultima_cifra = $nr % 10;
	   $a = $nr;
	   $b = 1;
	   
	   while($nr > 9){
	       
	       $b = $b * 10;
	       $nr = floor($nr / 10);
	   }
	   $a = floor((($ultima_cifra * $b + $a % $b) / 10)) * 10 + $nr;
  return $a;
}
function inversul_unui_număr_întreg($nr){
     $nr;
     $b = 0;     
     while($nr != 0){

       $b = $b * 10 + $nr % 10;
       $nr = floor($nr / 10);
     }
  return $b;
}
function media_aritmetică_a_cifrelor_unui_număr_întreg($nr){
           $nr;
	   $ultima_cifra = 0;
	   $nr_cifre = 0;
	   $suma = 0;
	   
	   while($nr > 0){
	       
	       $ultima_cifra = $nr % 10;
	       $suma = $suma + $ultima_cifra;
	       $nr_cifre++;
	       $nr = floor($nr / 10);
	   }
	   $media_aritmetica = $suma / $nr_cifre;
	   
return $media_aritmetica;
}
function numărul_de_cifre_ale_unui_număr_întreg($nr){
           $nr;
	   $cifre = 0;
	   
	   while($nr > 0){
	       
	        $nr = floor($nr / 10);
	        $cifre++;
	    }
  return $cifre;
}
function testul_de_număr_palindrom($nr){
            $nr;
	    $nr2 = $nr;
	    $a = 0;
	    while($nr2 != 0){
	        
	        $a = $a * 10 + $nr2 % 10;
	        $nr2 = floor($nr2 / 10);
	    }
	    $text;
	    if($a == $nr){
	        
	        $text = "Numărul este palindrom";
	    }else{
	        
	        $text = "Numărul nu este palindrom";
	    }
return $text;
}
function prima_cifră_a_unui_număr_întreg($nr){
            $nr;
	    while($nr > 9){
	        
	        $nr = floor($nr / 10);
	    }   
	    
  return $nr;
}
function produsul_cifrelor_unui_număr_întreg($nr){
     $nr;
     $produsul = 1;
     $ultima_cifra = 0;
     
     while($nr > 0){
         
       $ultima_cifra = $nr % 10;
       $produsul = $produsul * $ultima_cifra;
       $nr = floor ($nr / 10);
     }
    
    return $produsul;
}
function produsul_cifrelor_pare_ale_unui_număr_întreg($nr){
     $nr;
     $produsul=1;
     $ultima_cifra=0;
     
     while ($nr>0){ 
         
       $ultima_cifra = $nr % 10;
       if($ultima_cifra % 2 == 0){ 
           
       $produsul = $produsul * $ultima_cifra;
       }
       $nr = floor($nr / 10);
       }

    return $produsul;
}
function suma_cifrelor_unui_număr_întreg($nr){
            $nr;
	    $ultima_cifra = 0;
	    $suma = 0;
	    
	    while($nr > 0){
	        
	        $ultima_cifra = $nr % 10;
	        $suma = $suma + $ultima_cifra;
	        $nr = floor($nr / 10);
	    }
    return $suma;
}
function suma_cifrelor_pare_ale_unui_număr_întreg($nr){
     $nr;
     $suma = 0;
     $ultima_cifra=0;
     
     while ($nr>0){
         
       $ultima_cifra = $nr % 10;
       if($ultima_cifra % 2 == 0){
           
       $suma = $suma + $ultima_cifra;
       }
       $nr = floor($nr / 10);
       }

    return $suma;
}
function testul_de_număr_prim($nr){
           $nr;
	   $numar_Divizori = 0;
	   
	   for($d = 1; $d <= $nr; $d++){
	       
	       if($nr % $d == 0){
	           $numar_Divizori++;
	       }
	   }
           $text;
	   if($numar_Divizori == 2){
	       
	      $text = "Numărul este prim ";
	   }else{

	      $text = "Numărul nu este prim ";
	   } 
   return $text;
}
function ultima_cifră_a_unui_număr_întreg($nr){
            $nr;
	    $cifra = $nr % 10;
  return $cifra;
}
function myFunction($nr, $algoritm){
  $algo;
  switch($algoritm){
   case "cea mai mare cifră a unui număr întreg":
    $algo = cea_mai_mare_cifră_a_unui_număr_întreg($nr);
    break;
   case "eliminarea primei cifre a unui număr întreg":
    $algo = eliminarea_primei_cifre_a_unui_număr_întreg($nr);
    break;
   case "eliminarea cifrelor pare ale unui număr întreg":
    $algo = eliminarea_cifrelor_pare_ale_unui_număr_întreg($nr);
    break;
   case "înlocuirea primei cifre cu ultima și viceversa":
    $algo = înlocuirea_primei_cifre_cu_ultima_și_viceversa($nr);
    break;
   case "inversul unui număr întreg":
    $algo = inversul_unui_număr_întreg($nr);
    break;
   case "media aritmetică a cifrelor unui număr întreg":
    $algo = media_aritmetică_a_cifrelor_unui_număr_întreg($nr);
    break;
   case "numărul de cifre ale unui număr întreg":
    $algo = numărul_de_cifre_ale_unui_număr_întreg($nr);
    break;
   case "testul de număr palindrom":
    $algo = testul_de_număr_palindrom($nr);
    break;
   case "prima cifră a unui număr întreg":
    $algo = prima_cifră_a_unui_număr_întreg($nr);
    break;
   case "produsul cifrelor unui număr întreg":
    $algo = produsul_cifrelor_unui_număr_întreg($nr);
    break;
   case "produsul cifrelor pare ale unui număr întreg":
    $algo = produsul_cifrelor_pare_ale_unui_număr_întreg($nr);
    break;
   case "suma cifrelor unui număr întreg":
    $algo = suma_cifrelor_unui_număr_întreg($nr);
    break;
   case "suma cifrelor pare ale unui număr întreg":
    $algo = suma_cifrelor_pare_ale_unui_număr_întreg($nr);
    break;
   case "testul de număr prim":
    $algo = testul_de_număr_prim($nr);
    break;
   case "ultima cifră a unui număr întreg":
    $algo = ultima_cifră_a_unui_număr_întreg($nr);
    break;
   default:
    echo "A apărut o eroare!";
    break;
}
  return $algo;
}

$nr = $_GET["nr"];
$algoritm = $_GET["algoritm"];



echo "Rezultat: ". myFunction($nr, $algoritm);
?>