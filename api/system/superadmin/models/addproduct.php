<?php
    $msgtype = "ui orange floating message";
    $header = "Warning Attempt!";
    $content = "Your request cannot be proceed Please fill all the details.";
if(!empty($_REQUEST['name']) AND !empty($_REQUEST['price']) AND !empty($_REQUEST['rate']) AND !empty($_REQUEST['qty']) AND !empty($_REQUEST['des'])){
    $NAME = $_REQUEST['name'];
    $DESC = $_REQUEST['des'];
    $PRICE = $_REQUEST['price'];
    $RATE = $_REQUEST['rate'];
    $CURNTQNTY = $_REQUEST['qty'];
    $SOLDOUTQNTY = $_REQUEST['qty'];
    $STATUS = "In-Stock";
    
    $ret = $db->exec("INSERT INTO products (NAME,DESC,PRICE,RATE,CURNTQNTY,SOLDOUTQNTY,STATUS) VALUES ('$NAME', '$DESC', '$PRICE', '$RATE', '$CURNTQNTY', '$SOLDOUTQNTY', '$STATUS' )");
    

   if(!$ret) {
    notify($db->lastErrorMsg());
    $msgtype = "ui negative floating message";
    $header = "Error !";
    $content = "Your Last Request was out of the Condition.";
   } else {
    notify("Data Saved...");
    $msgtype = "ui positive floating message";
    $header = $NAME." Added Successfully";
    $content = "Your Request for Adding New Product is successfull.";
   }
}
    
?>
<div class="<?php echo $msgtype; ?>">
    <i class="close icon"></i>
    <div class="header">
        <?php echo $header; ?>
    </div>
    <p><?php echo $content; ?></p>
</div>

<script>
$('.message .close')
  .on('click', function() {
    $(this)
      .closest('.message')
      .transition('fade')
    ;
  });

</script>