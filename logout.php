<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<style>
h1 {
color: black;
}
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=password], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
body {
  background-color: black;
  font-family: sans-serif;
  margin: 0px;
}
* {
 box-sizing: border-box;
}
div {
  margin: auto;
  width: 600px;
  max-width: 90%;
  border: 15px solid black;
  background-color: lightgrey;
  padding: 50px;

}
</style>
<title>Logare</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div style="background-color:#E5E4E2;color:white;width: 600px;margin: auto;padding:20px;">
<?php
session_start();
session_unset();
session_destroy();
 echo '<h1>ALGODEV</h1>';
 echo '<form action="login.php" method="post">
         <input type="text" name="mailuid" placeholder="Utilizator/Mail">
         <input type="password" name="pwd" placeholder="Parolă">
         <button type="submit" name="login-submit">Loghează-te</button>
        </form>';
?>
</div>

</body>
</html>