<?php
session_start();
class User {
  private $name;
  private $lastname;
  private $email;
  private $id;

  function __construct($id, $name, $lastname, $email)
  {
    $this->id = $id;
    $this->name = $name;
    $this->lastname = $lastname;
    $this->email = $email;
  }

  function getId() {return $this->id;}
  function getName() {return $this->name;}
  function getLastname() {return $this->lastname;}
  function getEmail() {return $this->email;}

  //Статический метод добавления (регистрации) пользователя
  static function addUser($name, $lastname, $email, $pass) {
    global $mysqli;

    $email = mb_strtolower(trim($email));
    $pass = trim($pass);
    $pass = password_hash($pass, PASSWORD_DEFAULT);

    $result = $mysqli->query("SELECT * FROM `user` WHERE `email`='$email'");

    if ($result->num_rows != 0) {
      return json_encode(["result"=>"exist"]);
    } else {
      $mysqli->query("INSERT INTO `user`(`name`, `lastname`, `email`, `pass`) VALUES ('$name', '$lastname', '$email', '$pass')");
      return json_encode(["result"=>"success"]);
    }

  }
  //Статический метод авторизации пользователя
  static function authUser($email, $pass) {
    global $mysqli;
   
    $email = mb_strtolower($_POST["email"]);
    $pass = trim($_POST["pass"]);
    //$pass = password_hash($pass, PASSWORD_DEFAULT);
    $result = $mysqli->query("SELECT * FROM `user` WHERE `email`='$email'");

$result = $result->fetch_assoc();
$pass_hash = $result["pass"];

if (password_verify($pass, $pass_hash)) {
  
  $_SESSION["id"] = $result["id"];
  $_SESSION["name"] = $result["name"];
  $_SESSION["lastname"] = $result["lastname"];
  $_SESSION["email"] = $result["email"];
  echo $result["id"];
      return json_encode(["result"=>"exist"]);
    } else {
      return json_encode(["result"=>"success"]);
    }
  }
}
