<?php
 include 'database.php';
?>

<?php
 $number = (int) $_GET['n'];

  $query = "SELECT * FROM questions";
  $results = $mysqli->query($query) or die($mysqli->error._LINE_);
  $total = $results->num_rows;

 $query = "SELECT * FROM questions WHERE question_number = $number";
 $result = $mysqli->query($query) or die("Connection failed: ".mysqli_connect_error());
 $question = $result->fetch_assoc();

 $query = "SELECT * FROM choices WHERE question_number = $number";
 $choices = $mysqli->query($query) or die("Connection failed: ".mysqli_connect_error());
 
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
h3 {
background-color: dark grey;
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
   <h3>Întrebarea <?php echo $question['question_number']; ?> din <?php echo $total; ?></h3>
   <p>
    <?php echo $question['text']; ?>
   </p>
   <form method="post" action="process.php">
    <ul>
     <?php while($row = $choices->fetch_assoc()): ?>
      <li><input name="choice" type="radio" value="<?php echo $row['id']; ?>" /><?php echo $row['text']; ?></li>
     <?php endwhile; ?>
    </ul>
    <input type="submit" value="Submit" />
    <input type="hidden" name="number" value="<?php echo $number; ?>" />
    
   </form>
  </div>
 </main>

</body>
</html>