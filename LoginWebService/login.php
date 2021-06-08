<?php
include("connect.php");

Class users{
    public $id = $_POST["id"];
    public $userName = $_POST["userName"];
    public $password = $_POST["password"];
}

$usersObject = new users();

$userName = $_POST["userName"];
$password = $_POST["password"];


$control = mysqli_query($connect,"select * from users where userName = '$userName' and password = '$password'");


while($fetch = mysqli_fetch_assoc($control)){
    $usersObject->id=$fetch["id"];
       $usersObject->userName=$fetch["userName"];
          $usersObject->password=$fetch["password"];
          
          echo(json_encode($usersObject));
}
?>