<?php
session_start();
//error_reporting (0);
global $conn;
if ($_SERVER['HTTP_HOST'] == 'localhost')
{
  define("HOST", "localhost");
  define("USER", "root");
  define("PASS", "1550");
  define("DB", "users");
}
else
{
  define("HOST", "localhost");
  define("USER", "colemurn");
  define("PASS", "Singleap4");
  define("DB", "colemurn_users");
}

$conn = mysqli_connect(HOST, USER, PASS, DB);

if(!$conn) die("Database Connection Error: ".mysqli_connect_error());
?>
