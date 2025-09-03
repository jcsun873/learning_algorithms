<?php
 include 'database.php';
?>
<?php
$query = "SELECT * FROM questions";
$results = $mysqli->query($query) or die("Connection failed: ".mysqli_connect_error());
$total = $results->num_rows;
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Testează-ți cunoștințele</title>
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
   <h2>Verifică-ți cunoștințele</h2>
   <ul>
    <li><strong>Număr de întrebări: </strong><?php echo $total; ?></li>
    <li><strong>Tip de grilă: </strong>variantă unică</li>
    <li><strong>Timp estimativ: </strong><?php echo $total * .5; ?>minute</li>
   </ul>
    <font size="5px"><a href="question.php?n=1">Începe testul</a></font>
  </div>
 </main>

</body>
</html>