<?php
    include_once "header.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section>
    <div class="container">
    <div class="form">
    <h1>Login</h1>
        <form action="includes/login_inc.php" method="post" >
        <input type="text" placeholder="Username..." name="name">
        <input type="password" placeholder="Password..." name="pwd">
        <button type="submit" name="submit">Submit</button>

        </form>
        <?php

    if(isset($_GET["error"])){
        if($_GET["error"]=="InvalidName"){
            echo "<p>Invalid Name</p>";
        }
        else{
            header("location :../login.php?error=emptyinput");
        }
    }



?>
    </div>
    </div>
    
       
</section>
</body>
</html>