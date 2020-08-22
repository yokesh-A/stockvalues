<?php
$date = $_REQUEST['date'];
$RCSTART = $_REQUEST['rcopen'];
$RCEND = $_REQUEST['rcclose'];
$CASHSTART = $_REQUEST['cashopen'];
$CASHEND = $_REQUEST['cashclose'];

$results = $db->query("SELECT * FROM recharge WHERE DATE='$date'");
$row = $results->fetchArray();
if($row){
    $ret = $db->exec("UPDATE recharge SET RCSTART = '$RCSTART',RCEND = '$RCEND',CASHSTART = '$CASHSTART',CASHEND = '$CASHEND' WHERE DATE = '$date'");

   if(!$ret) {
    notify($db->lastErrorMsg());
   } else {
    notify("Data Updated...");
   }
}else{
$ret = $db->exec("INSERT INTO recharge (DATE,RCSTART,RCEND,CASHSTART,CASHEND) VALUES ('$date', '$RCSTART', '$RCEND', '$CASHSTART', '$CASHEND' )");

   if(!$ret) {
    notify($db->lastErrorMsg());
   } else {
    notify("Data Saved...");
   }
}

$results = $db->query("SELECT * FROM recharge WHERE DATE='$date'");
$row = $results->fetchArray();
if(!empty($row['RCSTART']) AND !empty($row['CASHEND'])){
    echo ($row['CASHEND']-$row['CASHSTART'])-($row['RCSTART']-$row['RCEND']);
}else{
    echo "Yet to be calculated";
}
?>