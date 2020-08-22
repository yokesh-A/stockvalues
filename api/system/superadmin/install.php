<?php
//Database Create
    class CreateDB extends SQLite3 {
        function __construct() {
           $this->open('system/2cheap.db');
        }
     }
     $db = new CreateDB();
  
    $sql =<<<EOF
    CREATE TABLE recharge
    (ID INTEGER PRIMARY KEY AUTOINCREMENT,
    DATE           DATE    NOT NULL UNIQUE,
    RCSTART            INT,
    RCEND            INT,
    CASHSTART            INT,
    CASHEND            INT,
    CREATED DATETIME DEFAULT CURRENT_TIMESTAMP);
EOF;
  
     $ret = $db->exec($sql);
     if(!$ret){
        notify($db->lastErrorMsg());
     } else {
        notify("Installation Completed Successfully...");
     }
     $db->close();
?>