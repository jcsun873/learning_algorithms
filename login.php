<style>
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
<?php

if (isset($_POST['login-submit'])) {

 require 'dbh.php';

 $mailuid = $_POST['mailuid'];
 $password = $_POST['pwd'];

 if (empty($mailuid) || empty($password)) {
  echo "emptyfields";
  exit();
 }
 else {
  $sql = "SELECT * FROM users WHERE uidUsers=? OR emailUsers=?;";
  $statement = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($statement, $sql)) {
   echo "sqlerror";
   exit();
  }
  else {
   mysqli_stmt_bind_param($statement, "ss", $mailuid, $password);
   mysqli_stmt_execute($statement);
   $result = mysqli_stmt_get_result($statement);
   if ($row = mysqli_fetch_assoc($result)) {
    $pwdCheck = password_verify($password, $row['pwdUsers']);
    if ($pwdCheck == false) {
     echo "wrongpassword";
     exit();
    }
    else if ($pwdCheck == true) {
     session_start();
     $_SESSION['userId'] = $row['idUsers'];
     $_SESSION['userUid'] = $row['uidUsers'];
     echo "login=success";
     echo "<br>";
     echo "<br>";
     echo '<a href="index1.php">ACCES SITE</a>';
     exit();
    }
    else {
     echo "wrongpassword";
     exit();
    }
   }
   else {
    echo "no-user";
    exit();
   }
}
}
}
else {
 exit();
}