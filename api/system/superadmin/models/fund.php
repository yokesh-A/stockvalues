<?php
if(isset($_REQUEST['task']) AND $_REQUEST['task'] === 'addnew'){
    $ret = $db->exec("INSERT INTO funds (NAME,STATUS) VALUES ('newuser','active')");

   if(!$ret) {
    notify($db->lastErrorMsg());
   } else {
    notify("One Row Created...");
   }
}
?>

<?php
if(isset($_REQUEST['task']) AND isset($_REQUEST['id']) AND $_REQUEST['task'] === 'update' ){
    $id = $_REQUEST['id'];
    $name = $_REQUEST['name'];
    $infund = $_REQUEST['infund'];
    $outfund = $_REQUEST['outfund'];
    $ret = $db->exec("UPDATE funds SET NAME = '$name',infund = '$infund',outfund = '$outfund' WHERE ID = '$id'");

   if(!$ret) {
    notify($db->lastErrorMsg());
   }
}
?>

<?php
$results = $db->query("SELECT * FROM funds WHERE STATUS = 'active'");
$i = 1;
while($row = $results->fetchArray()){ ?>

<div class="three fields">
    <div class="four wide field">
    <label>NAME</label>
    <input type="text" id="Name<?php echo $row['ID']; ?>" name="<?php echo $row['ID']; ?>" value="<?php echo $row['NAME']; ?>" placeholder="FUND-IN">
    </div>
    <div class="four wide field">
    <label>FUND-IN</label>
    <input type="number" id="Infund<?php echo $row['ID']; ?>" name="<?php echo $row['ID']; ?>" value="<?php echo $row['infund']; ?>" placeholder="FUND-IN">
    </div>
    <div class="four wide field">
    <label>FUND-OUT</label>
    <input type="number" id="Outfund<?php echo $row['ID']; ?>" name="<?php echo $row['ID']; ?>" value="<?php echo $row['outfund']; ?>" placeholder="FUND-OUT">
    </div>
    <div class="four wide field">
    <label>Balance</label>
    <input placeholder="<?php if(!empty($row['infund']) AND $row['outfund']) echo ($row['infund']-$row['outfund']); else echo "No data Found";?>" readonly="" type="text">
    </div>
</div>

<?php  } ?>

<script>
$('input').change(function (){
    id = this.name;
    name = $('#Name'+id).val();
    infund = $('#Infund'+id).val();
    outfund = $('#Outfund'+id).val();
    $.ajax({
      type: 'GET',
      url: "api",
      dataType: 'text',
      data: {__a: "models",file: "fund",task: "update",id: id,name: name,infund: infund,outfund: outfund},
      success: function(Data) { $("#funddata").html(Data);}
    });
});
</script>