
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<style>
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
button {
 width: 200px;
 height: 50px;
 background-color: #003300;
 border: none;
 color: #fff;
 font-family: arial;
 font-weight: 750;
 cursor: pointer;
 margin-bottom: 60px;
}
body {
  background-color: black;
  font-family: sans-serif;
  margin: 0px;
}


h1, h2 {
color: black;
}
* {
 box-sizing: border-box;
}
</style>
<title>Algodev</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<header>
<div style="background-color:#E5E4E2;text-align:center;color:white;width: 400px;margin: auto;padding:20px;">
<?php
 if (isset($_SESSION['userId'])) {
  
  echo '<form action="logout.php" method="post">
         <button style="font-size: 25px;" type="submit" name="logout-submit">Deloghează-te</button>
        </form>';
 }
 else {
  echo '<h1>ALGODEV</h1>';
  echo '<h2>Loghează-te! Dacă nu ai deja cont apasă butonul de mai jos și înregistrează-te!</h2>';
  echo '<form action="login.php" method="post">
         <input type="text" name="mailuid" placeholder="Utilizator/Mail">
         <input type="password" name="pwd" placeholder="Parolă">
         <button type="submit" name="login-submit">Loghează-te</button>
        </form>
        <br>
 
       <a href="signupForm.php" target="_blank">Înregistrează-te</a>';
 }
?>
</div>
</header>

</body>
</html>