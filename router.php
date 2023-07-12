<?php
session_start();
$url = explode("/", $_SERVER['REQUEST_URI']);
require_once("php/bd.php");
require_once("php/classes/User.php");




if ($url[1] == "blog") {
  $content = file_get_contents("pages/blog.php");
} else if ($url[1] == "auth") {
  $content = file_get_contents("pages/login.html");
} else if ($url[1] == "register") {
  $content = file_get_contents("pages/register.html");
} else if ($url[1] == "users") {
  require_once("pages/users/index.html");
} else if ($url[1] == "lk") {
  $content = file_get_contents("pages/lk.php");
} else if ($url[1] == "addUser") {
  echo User::addUser($_POST["name"], $_POST["lastname"], $_POST["email"], $_POST["pass"]);
} else if ($url[1] == "authUser") {
  echo User::authUser($_POST["email"], $_POST["pass"]);
  // echo $_SESSION["id"];
  // echo $_SESSION["name"];
  // echo $_SESSION["lastname"];
  // echo $_SESSION["email"];

} else {
  $content = file_get_contents("pages/index.php");
}

if (!empty($content)) require_once("template.php");

