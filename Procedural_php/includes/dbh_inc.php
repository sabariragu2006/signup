<?php


$conn=new mysqli("localhost","root","","database");

if(!$conn){
    die("connection failed");
}
else{
    echo "connection success";
}