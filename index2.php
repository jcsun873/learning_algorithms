<?php
  date_default_timezone_set('Europe/Bucharest');
  include 'db.php';
  include 'comments.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Comentarii</title>
<style>
body {
  background-color: grey;
}
textarea{
 width: 460px;
 height: 150px;
 border-radius: 17px;
 border-color: #484848;
 border-width: 3px;
 resize: none;
}
button {
 width: 200px;
 height: 50px;
 background-color: #202020;
 border: none;
 color: #fff;
 font-family: arial;
 font-weight: 750;
 cursor: pointer;
 margin-bottom: 60px;
}
.comment-box {
width: 430px;
padding: 20px;
margin-bottom: 6px;
background-color: #DCDCDC;
border-radius: 17px;
border-color: #484848;
border-style: solid;
position: relative;
}
.comment-box p {
font-family: arial;
font-size: 16px;
border-style: groove;
color: white;
background-color: #404040;
line-height: 16px;

font-weight: 300;
}

</style>
</head>
<body>
<?php
echo "<form method='POST' action='".setComments($conn)."'>
<input type='hidden' name='uid' value='Anonim'>
<input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
<textarea name='message'></textarea><br>
<button type='submit' name='commentSubmit'>Salvează Comentariu</button>
</form>";

getComments($conn);
?>

</body>
</html>