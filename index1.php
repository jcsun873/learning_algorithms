<?php
 session_start();
 require "header.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ALGODEV</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
pre {
  white-space: pre-wrap;
  word-wrap: break-word;
  text-align: justify;
}
* {
 box-sizing: border-box;
}
body {
  background-color: #f1f1f1;
}
header {
  background-color: #28282B;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}
nav {
  float: left;
  width: 30%;
  height: auto; 
  background: #ccc;
  padding: 20px;
}
nav ul {
  list-style-type: none;
  padding: 0;
}
a:link, a:visited {
  background-color: #353935;
  color: white;
  padding: 14px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: grey;
}
article {
  float: left;
  padding: 20px;
  width: 70%;
  background-color: #f1f1f1;
  height: auto; 
}
h3.solid {border-style: solid;}
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
</style>
</head>
<body>
<header>ALGODEV</header>
<section>
<nav>
<ul>
<li style="font-size: 21px"><a href="Cea_mai_mare_cifra_a_unui_nr_intreg.html" target="_blank">Cea mai mare cifră a unui nr întreg</a></li>
<br>
<li style="font-size: 21px"><a href="Cel_mai_mare_divizor_comun.html" target="_blank">Cel mai mare divizor comun</a></li>
<br>
<li style="font-size: 21px"><a href="Cel_mai_mic_multiplu_comun.html" target="_blank">Cel mai mic multiplu comun</a></li>
<br>
<li style="font-size: 21px"><a href="Eliminarea_cifrelor_pare-impare.html" target="_blank">Eliminarea cifrelor pare/impare</a></li>
<br>
<li style="font-size: 21px"><a href="Eliminarea_primei_cifre.html" target="_blank">Eliminarea primei cifre a unui număr întreg</a></li>
<br>
<li style="font-size: 21px"><a href="Inlocuirea_primei_cifre_cu_ultima_si_viceversa.html" target="_blank">Înlocuirea primei cifre cu ultima și viceversa</a></li>
<br>
<li style="font-size: 21px"><a href="Interschimbarea_valorilor_a_doua_variabile.html" target="_blank">Interschimbarea valorilor a două variabile</a></li>
<br>
<li style="font-size: 21px"><a href="Inversul_unui_nr.html" target="_blank">Inversul unui număr întreg</a></li>
<br>
<li style="font-size: 21px"><a href="Media_aritmetica.html" target="_blank">Media aritmetică a două numere întregi</a></li>
<br>
<li style="font-size: 21px"><a href="Nr_de_cifre.html" target="_blank">Numărul de cifre ale unui număr întreg</a></li>
<br>
<li style="font-size: 21px"><a href="Prima_cifra.html" target="_blank">Prima cifră a unui număr întreg</a></li>
<br>
<li style="font-size: 21px"><a href="Produsul_cifrelor.html" target="_blank">Produsul cifrelor unui număr întreg</a></li>
<br>
<li style="font-size: 21px"><a href="Produsul_cifrelor_pare-impare.html" target="_blank">Produsul cifrelor pare/impare ale unui număr întreg</a></li>
<br>
<li style="font-size: 21px"><a href="Suma_cifrelor.html" target="_blank">Suma cifrelor unui număr întreg</a></li>
<br>
<li style="font-size: 21px"><a href="Suma_cifrelor_pare-impare.html" target="_blank">Suma cifrelor pare/impare ale unui număr întreg</a></li>
<br>
<li style="font-size: 21px"><a href="Test_nr_palindrom.html" target="_blank">Testul de număr palindrom</a></li>
<br>
<li style="font-size: 21px"><a href="Test_nr_prim.html" target="_blank">Testul de număr prim</a></li>
<br>
<li style="font-size: 21px"><a href="Ultima_cifra.html" target="_blank">Ultima cifră a unui număr întreg</a></li>
<br>
<br>
</ul>

</nav>

<article>

<h3><i><pre>"Un algoritm trebuie să fie văzut pentru a fi crezut."<br>
                                          Donald Knuth</pre></i></h3>
<h3>Un algoritm este o metodă în care se prezintă pașii necesari pentru rezolvarea unei probleme.<br>
<br>
Proprietățile algoritmilor:<br>
-corectitudinea<br>
-generalitatea<br>
-claritatea<br>
-verificabilitatea<br>
-optimalitatea<br>
-finitudinea<br>
-eficiența<br>
-existența unei intrări<br>
-existența unei ieșiri<br>
<br>
În funcție de modul de implementare un algoritm poate fi:<br>
-recursiv<br>
-iterativ<br>
-serial<br>
-aleatoriu<br>
-exact sau aproximativ<br>
<br>
Algoritmii se pot reprezenta prin următoarele metode:<br>
-schema logică<br>
-pseudocodul(limbajul algoritmic)<br>
-limbajul de programare<br>

</h3>

<h3>IF...ELSE</h3>
<h3 class="solid">Instrucțiunea IF evaluează expresia din paranteză și execută instrucțiunile aflate între acolade doar dacă rezultatul este nenul. 
În schimb dacă rezultatul este nul se va trece pe ramura ELSE și se vor executa instrucțiunule din acoladele respective.</h3>

<h3>WHILE</h3>
<h3 class="solid">Instrucțiunea WHILE execută un anumit bloc de instrucțiuni atâta timp cât condiția din paranteză este adevărată. 
Deoarece expresia este evaluată la fiecare intrare în ciclu, instrucțiunile pot fi executate o dată, de mai multe ori sau nici măcar o dată.</h3>


<h3>FOR</h3>
<h3 class="solid">Instrucțiunea FOR este repetitivă și are de obicei trei parametri: instrucțiune1, condiție, instrucțiune2. 
Instrucțiune1 este o instrucțiune de inițializare care se execută doar o dată . Apoi se testează condiția pentru a verifica dacă este adevărată sau falsă. 
Dacă este adevărată se parcurge blocul de instrucțiuni aflat între acolade, iar in final se execută instrucțiune2(de obicei incrementare/decrementare).</h3>

<h2>Apasă pe butonul de mai jos și testează algoritmii!</h2>
<font size="5px"><a href="Formulare.php" target="_blank" style="text-align: center">Testează algoritmii</a></font>
<br>
<h2>Parcurge materialul de pe site și apoi testează-ți cunoștințele cu ajutorul butonului de mai jos.</h2>
<font size="5px"><a href="pagina_test.php" target="_blank" style="text-align: center">Testează-ți cunoștințele!</a></font>
<h2>Apasă pe butonul de mai jos și lasă un comentariu!</h2>

<font size="6px"><a href="index2.php" target="_blank" style="text-align: center">Lasă un comentariu</a></font>
</article>
</section>

</body>
</html>