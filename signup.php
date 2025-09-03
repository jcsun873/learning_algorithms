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

if (isset($_POST['signup-submit'])) {
  require 'dbh.php';

$username = $_POST['uid'];
$email = $_POST['mail'];
$password = $_POST['pwd'];
$passwordRepeat = $_POST['pwd-repeat'];

if (empty($username) || empty($email) || empty($password) || empty($passwordRepeat)) {
 echo "emptyfields";
 exit();
}
else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$username)) {
 echo "invalidmail&uid";
 exit();
}
else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
 echo "invalidmail";
 exit();
}
else if (!preg_match("/^[a-zA-Z0-9]*$/",$username)) {
 echo "invaliduid";
 exit();
}
else if ($password !== $passwordRepeat) {
 echo "passwordcheck";
 exit();
}
else {
 $sql = "SELECT uidUsers FROM users WHERE uidUsers=?";
 $statement = mysqli_stmt_init($conn);
 if (!mysqli_stmt_prepare($statement, $sql)) {
  echo "sqlerror";
  exit();
 }
 else {
  mysqli_stmt_bind_param($statement, 's', $username);
  mysqli_stmt_execute($statement);
  mysqli_stmt_store_result($statement);
  $resultCheck = mysqli_stmt_num_rows($statement);
  if ($resultCheck > 0) {
    echo "usertaken";
    exit();
  }
  else {
    $sql = "INSERT INTO users (uidUsers, emailUsers, pwdUsers) VALUES (?, ?, ?)";
    $statement = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($statement, $sql)) {
     echo "sqlerror";
     exit();
    }
    else {
     $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
     mysqli_stmt_bind_param($statement, "sss", $username, $email, $hashedPwd);
     mysqli_stmt_execute($statement);
     echo "signup=success";
     echo '<br>';
     echo '<br>';
     echo '<a href="index1.php">ACCES SITE</a>';
     exit();
    }
}
}
}
mysqli_stmt_close($statement);
mysqli_close($conn);
}
else {
 #header("Location: signup.php");
 exit();
}