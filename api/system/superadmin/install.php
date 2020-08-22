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
    (ID INT PRIMARY KEY     NOT NULL,
    DATE           DATE    NOT NULL,
    START            INT     NOT NULL,
    END            INT     NOT NULL,
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