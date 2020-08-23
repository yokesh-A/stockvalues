<?php
$date = $_REQUEST['date'];
$results = $db->query("SELECT * FROM recharge WHERE DATE='$date'");
$row = $results->fetchArray();
?>
<div class="logo">
<i class="fa fa-5x fa-money" aria-hidden="true"></i>
    <header>Recharge</header>
</div>
<div class="in_left">
    <small>Opening in Cash</small>
    <input type="number" id="cashstart" value="<?php echo $row['CASHSTART'] ; ?>" placeholder="Opening in Cash"/>
    <small>Opening Balance</small>
    <input type="number" id="rcstart" value="<?php echo $row['RCSTART'] ; ?>" placeholder="Opening Balance"/>
    <small>Closing in Cash</small>
    <input type="number" id="cashend" value="<?php echo $row['CASHEND'] ; ?>" placeholder="Closing in Cash"/>
    <small>Closing Balance</small>
    <input type="number" id="rcend" value="<?php echo $row['RCEND'] ; ?>" placeholder="Closing Balance"/>
    
    <input id="rcsave" type="button" value="SAVE"/>
</div>
<h3>Profit </h3> <span class="fg" id="rechargeturn">
<?php 
$results = $db->query("SELECT * FROM recharge WHERE DATE='$date'");
$row = $results->fetchArray();
if(!empty($row['RCSTART']) AND !empty($row['CASHEND'])){
    echo ($row['CASHEND']-$row['CASHSTART'])-($row['RCSTART']-$row['RCEND']);
}else{
    echo "Yet to be calculated";
}
?></span>

<script>
$("#rcsave").click(function(){
    $.ajax({
      type: 'GET',
      url: "api",
      dataType: 'text',
      data: {__a: "models",file: "saverc",cashopen:""+$("#cashstart").val(),cashclose:""+$("#cashend").val(),rcopen:""+$("#rcstart").val(),rcclose:""+$("#rcend").val(),date:""+$("#date").val()},
      success: function(Data) { $("#rechargeturn").html(Data);}
    });
});
</script>
