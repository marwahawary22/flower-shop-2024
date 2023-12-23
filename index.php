<?php

$NAME=$_REQUEST['name'];
$EMAIL=$_REQUEST['mail'];
$NUMBER=$_REQUEST['number'];
$MESSAGE=$_REQUEST['message'];

if(isset($_POST['btntest']))
{

    $host="localhost";
    $user="root";
    $password="";
    $db="flower_shop";

    $conn=mysqli_connect($host,$user,$password,$db);

    $insert="insert into clientsinfo values"('$NAME','$EMAIL','$NUMBER','MRSSAGE');
    mysqli_query($conn,$insert);
    if($conn){
        echo("<h1> your registration is done!</h>");
    }

    else{
        echo("<h1> your registration is faild!</h1>");
    }
}









?>