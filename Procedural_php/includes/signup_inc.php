<?php
if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $mail=$_POST["mail"];
    $pwd=$_POST["pwd"];
    $pwdrepeat=$_POST["pwdrepeat"];

    require_once "dbh_inc.php";
    require_once "function_inc.php";

    if(emptyinput($name,$mail,$pwd,$pwdrepeat)!==false){
        header("location:.../signup.php?error=emptyinput");
        exit();
    }
    if(invalidname($name)!==false){
        header("location:.../signup.php?error=InvalidName");
        exit();
    }
    if(invalidemail($mail)!==false){
        header("location:.../signup.php?error=InvalidEmail");
        exit();
    }
    if(pwdmatch($pwd,$pwdrepeat)!==false){
        header("location:.../signup.php?error=passworddoesnotmatch");
        exit();
    }
    if(Uidexists($conn,$name,$mail)!==false){
        header("location:.../signup.php?error=UsernameAlreadyTaken");
        exit();
    }
    createuser($conn,$name,$mail,$pwd);

}
else{
    header("location:.../signup.php?error=doItInProperWay");
    exit();}