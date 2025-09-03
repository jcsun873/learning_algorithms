<?php
$conn=new mysqli('localhost','root','','comment');

if (!$conn) {
  die("Connection failed: ".mysqli_connect_error());
}