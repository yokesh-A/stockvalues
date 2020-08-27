<?php
if(!empty($_REQUEST['id']) AND !empty($_REQUEST['soldrate']) AND !empty($_REQUEST['soldqty']) AND ($_REQUEST['soldqty']>0) ){
    $id = $_REQUEST['id'];
    $results = $db->query("SELECT * FROM products WHERE ID = '$id'");
    $row = $results->fetchArray();
    if(($row['CURNTQNTY']-$_REQUEST['soldqty'])>=0){
        $currentqty = ($row['CURNTQNTY']-$_REQUEST['soldqty']);
        $soldrate = 
        $soldqty = $_REQUEST['soldqty'];
        $status = "In-Stock";if(($row['CURNTQNTY']-$_REQUEST['soldqty'])=== 0){$status = "Sold-Out";}
        $ret = $db->exec("UPDATE products SET CURNTQNTY = '$currentqty',STATUS = '$status' WHERE ID = '$id'");
        if(!$ret) {
            notify($db->lastErrorMsg());
        } else {
          $name = $row['NAME'];
          $des = $row['DESC'];
          $price = $row['PRICE'];
          $rate = $row['RATE'];
          $qty = $_REQUEST['soldqty'];
          $soldrate = $_REQUEST['soldrate'];
          $soldtime = date("Y-m-d h:i:s");
          $staus = "Sold-Out";
          $ret = $db->exec("INSERT INTO soldout (NAME,DESC,PRICE,RATE,QNTY,SOLDOUT,SOLDOUTDATE,STATUS) VALUES ('$name', '$des', '$price', '$rate', '$qty', '$soldrate', '$soldtime', '$staus' )");

          if(!$ret) {
           notify($db->lastErrorMsg());
          } else {
           notify("Product SOLD...");
          }
        }
    }
}

?>
<h2>Sell Products.</h2> 
        <table id="Newproductslist" class="table table-responsive">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Price</th>
                            <th scope="col">Remaining Quantity</th>
                            <th scope="col">Pack Quantity</th>
                            <th scope="col">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
$results = $db->query("SELECT * FROM products WHERE STATUS = 'In-Stock'");
$i = 1;
while($row = $results->fetchArray()){ ?>
                            <tr>
                            <th scope="row"><?php echo $i; ?></th>
                            <td><?php echo $row['NAME']; ?></td>
                            <td><?php echo $row['DESC']; ?></td>
                            <td>₹<?php echo $row['PRICE']; ?></td>
                            <td><?php echo $row['CURNTQNTY']; ?></td>
                            <td><?php echo $row['SOLDOUTQNTY']; ?></td>
                            <td><button class="ui button buttons-print" data-toggle="modal" data-target="#<?php echo $row['ID']; ?>" type="button"><span>SELL NOW</span></button></td>
                            </tr>
<div class="modal fade" id="<?php echo $row['ID']; ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $row['ID']; ?>" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><?php echo $row['NAME']; ?> - ₹<?php echo $row['PRICE']; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ui form">
      <h2><?php echo $row['NAME']; ?> | <?php echo $row['DESC']; ?></h2>
        <div class="field"><div class="two fields">
        <div class="field"><label>SELL AMOUNT:</label><input id="rate<?php echo $row['ID']; ?>" type="number" required></div>
        <div class="field"><label>SELL QUANTITY:</label><select id="qty<?php echo $row['ID']; ?>" class="ui fluid dropdown">
        <?php for($pi=1;$pi<=$row['CURNTQNTY'];$pi++){ echo "<option>".$pi."</option>"; }?></select></div>
        </div></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="sumbit" role="sellproduct" id="<?php echo $row['ID']; ?>" data-dismiss="modal" aria-controls="<?php echo $row['ID']; ?>" class="btn btn-primary">Sell</button>
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