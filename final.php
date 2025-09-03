<?php
 session_start(); 
?>
<?php
 session_destroy();
 session_unset();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Final test</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
 box-sizing: border-box;
}
body {
  background-color: #f1f1f1;
  margin: 0px;
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
h3 {
background-color: white;
}
</style>
</head>
<body>
 <header>
  <div style="background-color:black;color:white;width: 470px;margin: auto;padding:5px;">
   <h1>Test algoritmi</h1>
  </div>
 </header>
 <main>
  <div style="background-color:#E5E4E2;color:black;width: 470px;margin: auto;padding:5px;">
   <h3>Testul este încheiat!</h3>
    <p>Felicitări! Ai parcurs testul de algoritmi</p>
    <p>Răspunsuri corecte: <?php echo $_SESSION['score']; ?> din 10</p>
    <a href="question.php?n=1">Încearcă încă o dată!</a><p>SAU</p>
    <a href="raspunsuri_corecte.html" target="_blank">Vezi răspunsurile corecte!</a>
  </div>
 </main>

</body>
</html>
