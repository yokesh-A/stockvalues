<?php

session_start();

//install DB
if(!file_exists('system/2cheap.db')){
    include 'system/superadmin/install.php';
}

//Database Connect
class MyDB extends SQLite3 {
    function __construct() {
       $this->open('system/2cheap.db');
    }
 }
 $db = new MyDB();

 //notification function
function notify($msg) {
    echo "<script>notify('".$msg."');</script>";
  }

//System Controller
if(isset($_REQUEST['__a'])){

        if($_REQUEST['__a'] === 'login'){ //super admin
            if($_REQUEST['user'] == "admin" AND $_REQUEST['password'] == "admin"){
                $_SESSION["log"]="open";
                $_SESSION["user"]="superadmin";
                $_REQUEST['__a'] = "connect";
            }else{  //normal admin
                if($_REQUEST['user'] == "user" AND $_REQUEST['password'] == "pass"){
                    $_SESSION["log"]="open";
                    $_SESSION["user"]="user";
                    $_REQUEST['__a'] = "connect";
                }else{
                    notify("Wrong Creditials");
                }
            }
        }

        //display starts
        if(isset($_SESSION["log"]) AND $_SESSION["log"] === "open"){
            switch($_REQUEST['__a']){
                case "connect": include 'system/superadmin/dashboard.php';
                break;
                case "superadmintabs": if(file_exists('system/superadmin/'.$_REQUEST['file'].'.php')){include 'system/superadmin/'.$_REQUEST['file'].'.php';}else{echo "<h1>Bad Request!</h1>";}
                break;
                case "models": if(file_exists('system/superadmin/models/'.$_REQUEST['file'].'.php')){include 'system/superadmin/models/'.$_REQUEST['file'].'.php';}else{echo "<h1>Bad Request!</h1>";}
                break;
                case "logout":session_destroy(); echo "<script>window.location.href='/'</script>" ;
                break;
                default:echo "<script> window.location.href='/'; </script>";
            }
        }else{
            if($_REQUEST['__a']==="connect"){include 'system/login/loginpage.php';}
            else{echo "<script> window.location.href='/'; </script>";}
        }
        //display ends
    
}else{
    header("Location: /");
}


?>