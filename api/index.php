<?php

//super admin details

$userid = "admin";
$password = "admin";

session_start();

function notify($msg) {
    echo "<script>notify('".$msg."');</script>";
  }
if(isset($_REQUEST['aim'])){

        if($_REQUEST['aim'] === 'login'){
            if($_REQUEST['user'] == $userid AND $_REQUEST['password'] == $password){
                $_SESSION["log"]="open";
                $_REQUEST['aim'] = "connect";
            }else{
                notify("Wrong Creditials");
            }
        }

        if(isset($_SESSION["log"])){
            switch($_REQUEST['aim']){
                case "connect": include 'system/superadmin/dashboard.php';
                break;
                case "superadmintabs": if(file_exists('system/superadmin/'.$_REQUEST['file'].'.php')){include 'system/superadmin/'.$_REQUEST['file'].'.php';}else{echo "<h1>Bad Request!</h1>";}
                break;
                default:echo "<script> window.location.href='/'; </script>";
            }
        }else{
            include 'system/login/loginpage.php';
        }
    
}else{
    header("Location: /");
}


?>