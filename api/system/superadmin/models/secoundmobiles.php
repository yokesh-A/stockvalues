
<h2>Second Handed Mobiles<small>IN STOCK</small></h2>
<?php

if(!empty($_REQUEST['imei']) AND !empty($_REQUEST['name']) AND !empty($_REQUEST['price']) AND !empty($_REQUEST['rate'])){
    
    $imei = $_REQUEST['imei'];
    $name = $_REQUEST['name'];
    $price = $_REQUEST['price'];
    $rate = $_REQUEST['rate'];

    $ret = $db->exec("INSERT INTO oldmobiles (IMEI,MOBILENAME,PRICE,RATE,STATUS) VALUES ('$imei', '$name', '$price', '$rate', 'In-Stock' )");

   if(!$ret) {
    notify($db->lastErrorMsg());
   } else {
    notify("Data Saved...");
   }
}

?>

<?php
if(!empty($_REQUEST['soldimei']) AND !empty($_REQUEST['soldrate'])){

    $IMEI = $_REQUEST['soldimei'];
    $SOLDOUT = $_REQUEST['soldrate'];
    $SOLDOUTDATE = date("Y-m-d h:i:s");
    $ret = $db->exec("UPDATE oldmobiles SET SOLDOUT = '$SOLDOUT',SOLDOUTDATE = '$SOLDOUTDATE',STATUS = 'Sold-Out' WHERE IMEI = '$IMEI'");

    if(!$ret) {
     notify($db->lastErrorMsg());
    } else {
     notify("Data Updated...");
    }
}
?>


    <div class="row">
                    <div class="col-xs-12">
                    <table id="mobilesinstock" class="table table-responsive">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">IMEI NUMBER</th>
                            <th scope="col">MOBILE NAME</th>
                            <th scope="col">PRICE</th>
                            <th scope="col">TIME</th>
                            <th scope="col">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
$results = $db->query("SELECT * FROM oldmobiles WHERE STATUS = 'In-Stock'");
$i = 1;
while($row = $results->fetchArray()){ ?>
                            <tr>
                            <th scope="row"><?php echo $i; ?></th>
                            <td><?php echo $row['IMEI']; ?></td>
                            <td><?php echo $row['MOBILENAME']; ?></td>
                            <td>₹<?php echo $row['PRICE']; ?></td>
                            <td><?php echo $row['CREATED']; ?></td>
                            <td><button class="ui button buttons-print" data-toggle="modal" data-target="#<?php echo $row['IMEI']; ?>" type="button"><span>SELL NOW</span></button></td>
                            </tr>
<div class="modal fade" id="<?php echo $row['IMEI']; ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $row['IMEI']; ?>" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><?php echo $row['MOBILENAME']; ?> - ₹<?php echo $row['PRICE']; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <h2><?php echo $row['MOBILENAME']; ?> | <?php echo $row['IMEI']; ?></h2>
      <label>SELL AMOUNT:<span class="ui input"><input id="sr<?php echo $row['IMEI']; ?>" type="number" required></span></label>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="sumbit" role="selloldmoblie" id="<?php echo $row['IMEI']; ?>" data-dismiss="modal" aria-controls="<?php echo $row['IMEI']; ?>" class="btn btn-primary">Sell</button>
      </div>
    </div>
  </div>
</div>
<?php
$i++;}
?>
                        </tbody>
                        </table>
                    </div>
                </div>

