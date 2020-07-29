<?php

//super admin details

$userid = "admin";
$password = "admin";

session_start();

function notify($msg) {
    echo "<script>notify('".$msg."');</script>";
  }
if(isset($_GET['__a'])){

        if($_GET['__a'] === 'login'){
            if($_GET['user'] == $userid AND $_GET['password'] == $password){
                $_SESSION["log"]="open";
                $_GET['__a'] = "connect";
            }else{
                notify("Wrong Creditials");
            }
        }

        if(isset($_SESSION["log"])){
            switch($_GET['__a']){
                case "connect": include 'system/superadmin/dashboard.php';
                break;
                case "superadmintabs": if(file_exists('system/superadmin/'.$_GET['file'].'.php')){include 'system/superadmin/'.$_GET['file'].'.php';}else{echo "<h1>Bad Request!</h1>";}
                break;
                default:header("Location: /");
            }
        }else{
            include 'system/login/loginpage.php';
        }
    
}else{
    header("Location: /");
}


?>