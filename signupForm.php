<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<style>

h2 {
color: black;
}
input[type=text], select {
  width: 80%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-width: 4px;
  border-radius: 4px;
  box-sizing: border-box;
  border-color: grey;
}
input[type=password], select {
  width: 80%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-width: 4px;
  border-radius: 4px;
  box-sizing: border-box;
  border-color: grey;
}
</style>
<title>Înregistrare</title>
</head>
<body>
<?php
 require "header.php";
?>
<main>

 <h1>Înregistrează-te</h1>
 <?php
    if (isset($_GET["error"])) {
     if ($_GET["error"] == "emptyfields") {
      echo '<p="signuperror">Completează toate câmpurile!</p>';
     }
     else if ($_GET["error"] == "invaliduidmail") {
      echo '<p="signuperror">User sau mail invalid!</p>';
     }
     else if ($_GET["error"] == "invaliduid") {
      echo '<p="signuperror">User invalid!</p>';
     }
     else if ($_GET["error"] == "invalidmail") {
      echo '<p="signuperror">Mail invalid!</p>';
     }
     else if ($_GET["error"] == "passwordcheck") {
      echo '<p="signuperror">Verifică parola!</p>';
     }
     else if ($_GET["error"] == "usertaken") {
      echo '<p="signuperror">Există deja un utilizator cu acest user!</p>';
     }
    }
    

 ?>
<div style="background-color: grey;color:white;width: 400px;margin: auto;padding:20px;">
 <h1>ALGODEV</h1>
 <h2>Înregistrează-te</h2>
 <form action="signup.php" method="post">
  <input type="text" name="uid" placeholder="Utilizator">
  <input type="text" name="mail" placeholder="mail">
  <input type="password" name="pwd" placeholder="Parolă">
  <input type="password" name="pwd-repeat" placeholder="Repetă parola">
  <button type="submit" name="signup-submit">Înregistrează-te</button>

 </form>
</div>
</main>
</body>
</html>
