<?php

session_start();

function notify($msg) {
    echo "<script>notify('".$msg."');</script>";
  }
if(isset($_REQUEST['__a'])){

        if($_REQUEST['__a'] === 'login'){ //super admin
            if($_REQUEST['user'] == "admin" AND $_REQUEST['password'] == "admin"){
                $_SESSION["log"]="open";
                $_SESSION["user"]="superadmin";
                $_REQUEST['__a'] = "connect";
            }else{
                if($_REQUEST['user'] == "user" AND $_REQUEST['password'] == "pass"){
                    $_SESSION["log"]="open";
                    $_SESSION["user"]="user";
                    $_REQUEST['__a'] = "connect";
                }else{
                    notify("Wrong Creditials");
                }
            }
        }

        if(isset($_SESSION["log"])){
            switch($_REQUEST['__a']){
                case "connect": include 'system/superadmin/dashboard.php';
                break;
                case "superadmintabs": if(file_exists('system/superadmin/'.$_REQUEST['file'].'.php')){include 'system/superadmin/'.$_REQUEST['file'].'.php';}else{echo "<h1>Bad Request!</h1>";}
                break;
                case "logout":session_destroy(); echo "<script>window.location.href='/'</script>" ;
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