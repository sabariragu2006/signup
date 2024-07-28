<?php
function emptyinput($name,$mail,$pwd,$pwdrepeat){
    $result=false;
    if(empty($name)||empty($mail)||empty($pwd)||empty($pwdrepeat)){
        $result=true;

    }
    else{
        $result=false;
    }
    return $result;
}
function emptyinputlogin($name,$pwd){
    $result=false;
    if(empty($name)||empty($pwd)){
        $result=true;

    }
    else{
        $result=false;
    }
    return $result;
}
function invalidname($name){
    $result=false;
    if(!preg_match("/^[a-zA-z0-9]*$/",$name)){
        $result=true;

    }
    else{
        $result=false;
    }
    return $result;
}
function invalidemail($mail){
    $result=false;
    if(!filter_var($mail,FILTER_VALIDATE_EMAIL)){
        $result=true;

    }
    else{
        $result=false;
    }
    return $result;
}
function pwdmatch($pwd,$pwdrepeat){
    $result=false;
    if($pwd!==$pwdrepeat){
        $result=true;

    }
    else{
        $result=false;
    }
    return $result;
}
function Uidexists($conn,$name,$mail){
    $sql="SELECT * from users WHERE username=? OR usermail=?;";
    $stmt =mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location:.../signup.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt,"ss",$name,$mail);
    mysqli_stmt_execute($stmt);

    $resultData=mysqli_stmt_get_result($stmt);

    if($row=mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else{
        $result=false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}
function createuser($conn,$name,$mail,$pwd){
    $sql="INSERT INTO users (username,usermail,pwd) values(?,?,?);";
    $stmt =mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location:.../signup.php?error=stmtfailed");
        exit();
    }
    $hashedpwd=password_hash($pwd,PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt,"sss",$name,$mail,$hashedpwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
    exit();
}

function loginuser($conn,$name,$pwd){
    $uidexists= Uidexists($conn,$name,$name);

    if($uidexists==false){
        header("location:.../signup.php?error=wronglogin");
        exit();
    }

    $pwdhashed = $uidexists["pwd"];
    $checkpwd =password_verify($pwd ,$pwdhashed);

    if($checkpwd ==false){
        header("location:.../signup.php?error=wronglogin");
        exit();
    }
    else if($checkpwd ==true){
        session_start();
        $_SESSION["userid"]= $uidexists["uid"];
        $_SESSION["uname"]= $uidexists["username"];
        header("location:../signup_success.php");
        exit();

    }



}