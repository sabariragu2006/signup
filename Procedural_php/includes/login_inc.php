<?php

if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $pwd=$_POST["pwd"];


    require_once "dbh_inc.php";
    require_once "function_inc.php";

    if(emptyinputlogin($name ,$pwd)!==false){
        header("location :../login.php?error=emptyinput");
        exit();
    }
    loginuser($conn,$name,$pwd);

}
else{
    header("location :../login.php");
    exit();
}