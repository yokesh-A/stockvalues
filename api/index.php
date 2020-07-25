<?php

//super admin details

$userid = "admin";
$password = "admin";

session_start();

function notify($msg) {
    echo "<script>notify('".$msg."');</script>";
  }
if(isset($_POST['__a'])){

    if($_POST['__a'] == 'login'){
        if($_POST['user'] == $userid AND $_POST['password'] == $password){
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
    //header("Location: /");
    echo "helo";
}


?>