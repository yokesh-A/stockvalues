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

   $sql =<<<EOF
   CREATE TABLE oldmobiles
   (ID INTEGER PRIMARY KEY AUTOINCREMENT,
   IMEI          CHAR(50)    NOT NULL UNIQUE,
   MOBILENAME    TEXT    NOT NULL,
   PRICE         INT NOT NULL,
   RATE          INT NOT NULL,
   SOLDOUT       INT,
   SOLDOUTDATE   DATE,
   STATUS        CHAR(50)  NOT NULL,
   CREATED DATETIME DEFAULT CURRENT_TIMESTAMP);
EOF;
    
       $ret = $db->exec($sql);
       if(!$ret){
          notify($db->lastErrorMsg());
       } else {
   $sql =<<<EOF
   CREATE TABLE products
   (ID INTEGER PRIMARY KEY AUTOINCREMENT,
   NAME          CHAR(50)    NOT NULL UNIQUE,
   DESC    TEXT    NOT NULL,
   PRICE         INT NOT NULL,
   RATE          INT NOT NULL,
   CURNTQNTY       INT,
   SOLDOUTQNTY       INT,
   STATUS        CHAR(50)  NOT NULL,
   CREATED DATETIME DEFAULT CURRENT_TIMESTAMP);
EOF;
          
             $ret = $db->exec($sql);
             if(!$ret){
                notify($db->lastErrorMsg());
             } else {

   $sql =<<<EOF
   CREATE TABLE soldout
   (ID INTEGER PRIMARY KEY AUTOINCREMENT,
   NAME          CHAR(50)    NOT NULL,
   DESC    TEXT    NOT NULL,
   PRICE         INT NOT NULL,
   RATE          INT NOT NULL,
   QNTY       INT,
   SOLDOUT       INT,
   SOLDOUTDATE   DATE,
   STATUS        CHAR(50)  NOT NULL,
   CREATED DATETIME DEFAULT CURRENT_TIMESTAMP);
EOF;
                      
   $ret = $db->exec($sql);
   if(!$ret){
      notify($db->lastErrorMsg());
   } else {

      $sql =<<<EOF
   CREATE TABLE funds
   (ID INTEGER PRIMARY KEY AUTOINCREMENT,
   NAME          CHAR(50)    NOT NULL,
   infund    INT,
   outfund        INT,
   STATUS        CHAR(50)  NOT NULL,
   CREATED DATETIME DEFAULT CURRENT_TIMESTAMP);
EOF;
                      
      $ret = $db->exec($sql);
      if(!$ret){
         notify($db->lastErrorMsg());
      } else {
         notify("Installation Completed Successfully...");
      }

   }
             


           }
       }

     }
     $db->close();
?>