<?php

//super admin details

$userid = "admin";
$password = "admin";

session_start();

function notify($msg) {
    echo "<script>notify('".$msg."');</script>";
  }
if(isset($_GET['__a'])){

    if($_GET['__a'] == 'login'){
        if($_GET['user'] == $userid AND $_GET['password'] == $password){
            $_SESSION["log"]="open";
        }else{
            notify("Wrong Creditials");
        }
    }
    
        if(isset($_SESSION["log"])){
            include 'system/superadmin/dashboard.php';
        }else{
            include 'system/login/loginpage.php';
        }
}else{
    header("Location: /");
}


?>