<style>
.dataTables_filter{
    float:right;
    margin-right:15%;
}
</style>

<div class="row"><div class="col-sm-12">
<?php if( $_SESSION["user"] === "superadmin"){ ?>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/se-2.2.13/jq-3.3.1/dt-1.10.21/af-2.3.5/b-1.6.3/b-html5-1.6.3/b-print-1.6.3/cr-1.5.2/kt-2.5.2/r-2.2.5/sc-2.0.2/sp-1.1.1/datatables.min.css"/>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.semanticui.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css"/>

    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.semanticui.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.semanticui.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/se-2.2.13/jq-3.3.1/dt-1.10.21/af-2.3.5/b-1.6.3/b-html5-1.6.3/b-print-1.6.3/cr-1.5.2/kt-2.5.2/r-2.2.5/sc-2.0.2/sp-1.1.1/datatables.min.js"></script>

<nav>
  <ul class="pager">
    <li class="next"><button class="btn btn-raised" onclick="window.location.href='/api/?__a=backup';">BACKUP All DATA INTO SINGLE NUT</button></li>
  </ul>
</nav>

<div class="row">
    <div class="col-sm-6" style="text-align: center;">
        <div class="ui labeled input">
          <div class="ui label">
            Starting Date:
          </div>
          <input type="date" id="min" name="min" value="<?php echo date("Y-m-d", strtotime("-28 day"));?>">
        </div>
    </div>
    <div class="col-sm-6" style="text-align: center;">
      <div class="ui labeled input">
        <div class="ui label">
        Ending Date:
        </div>
        <input type="date" id="max" name="max" value="<?php echo date("Y-m-d", strtotime("+1 day"));?>">
      </div>
    </div>
</div>
<h2>Mobiles</h2>
<table class="ui celled table" id="secmobileprofit">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">IMEI NUMBER</th>
      <th scope="col">MOBILE NAME</th>
      <th scope="col">PURCHASE VALUE</th>
      <th scope="col">SOLDOUT VALUE</th>
      <th scope="col">PRODUCT STATUS</th>
      <th scope="col">DATE</th>
      <th scope="col">PRODUCT PROFIT</th>
    </tr>
  </thead>
  <tbody>
  <?php
$results = $db->query("SELECT * FROM oldmobiles");
$i = 1;
while($row = $results->fetchArray()){ ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $row['IMEI']; ?></td>
                                                <td><?php echo $row['MOBILENAME']; ?></td>
                                                <td>₹ <?php echo $row['RATE']; ?></td>
                                                <td>₹ <?php if(empty($row['SOLDOUT'])) echo 0; else echo $row['SOLDOUT']; ?></td>
                                                <td><?php echo $row['STATUS']; ?></td>
                                                <td><?php if(empty($row['SOLDOUTDATE'])) echo $row['CREATED']; else echo $row['SOLDOUTDATE']; ?></td>
                                                <td>₹ <?php if(empty($row['SOLDOUT'])) echo 0; else echo ($row['SOLDOUT']-$row['RATE']); ?></td>
                                                
                                            </tr>
                              <?php
$i++;}
?>
  </tbody>
  <tfoot>
        <tr>
            <th scope="col">CURRENT </th>
            <th scope="col">PAGE </th>
            <th scope="col">TOTAL :</th>
            <th scope="col">PURCHASE VALUE</th>
            <th>SOLDOUT VALUE</th>
            <th scope="col">PRODUCT STATUS</th>
            <th scope="col"> </th>
            <th scope="col">PRODUCT PROFIT</th>
        </tr>
    </tfoot>
</table>


<h2>All Products</h2>
<table class="ui celled table" id="allproducts">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">PRODUCT NAME</th>
      <th scope="col">PRODUCT DESC</th>
      <th scope="col">PRODUCT VALUE</th>
      <th scope="col">SOLDOUT AMOUNT</th>
      <th scope="col">QUANTITY</th>
      <th scope="col">DATE</th>
      <th scope="col">PRODUCT PROFIT</th>
    </tr>
  </thead>
  <tbody>
  <?php
$results = $db->query("SELECT * FROM soldout");
$i = 1;
while($row = $results->fetchArray()){ ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $row['NAME']; ?></td>
                                                <td><?php echo $row['DESC']; ?></td>
                                                <td>₹ <?php echo $row['RATE']; ?></td>
                                                <td>₹ <?php echo $row['SOLDOUT']; ?></td>
                                                <td><?php echo $row['QNTY']; ?></td>
                                                <td><?php echo $row['SOLDOUTDATE']; ?></td>
                                                <td>₹ <?php echo (($row['SOLDOUT']-$row['RATE'])*$row['QNTY']); ?></td>
                                                
                                            </tr>
                              <?php
$i++;}
?>
  </tbody>
  <tfoot>
        <tr>
            <th scope="col">CURRENT </th>
            <th scope="col">PAGE </th>
            <th scope="col">TOTAL :</th>
            <th scope="col">PRODUCT VALUE</th>
            <th>SOLDOUT AMOUNT</th>
            <th scope="col"> </th>
            <th scope="col"> </th>
            <th scope="col">PRODUCT PROFIT</th>
        </tr>
    </tfoot>
</table>
        
<script>
$.fn.dataTable.ext.search.push(
    function( settings, data, dataIndex ) {
        var min = Date.parse($('#min').val());
        var max = Date.parse($('#max').val());
        var date = Date.parse(data[6])  || 0; // use data for the Date column
        if ( min <= date && max >= date )
        {
            return true;
        }
        return false;
    }
);

   var mobiles = $('#secmobileprofit').DataTable( {
        dom: 'Bfrtip',
        buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
        lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
        initComplete: function () {
            this.api().columns(5).every( function () {
                var column = this;
                var select = $('<select class="ui selection dropdown" style="padding:0;"><option value="">Show All</option></select>')
                    .appendTo( $(column.footer()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );
        },
        "footerCallback": function ( row, data, start, end, display ) {
            var api = this.api(), data;
 
            // Remove the formatting to get integer data for summation
            var intVal = function ( i ) {
                return typeof i === 'string' ?
                    i.replace(/[\₹,]/g, '')*1 :
                    typeof i === 'number' ?
                        i : 0;
            };
 
            // Total over all pages
            profittotal = api
                .column( 7 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
 
            // Total over this page
            profitpageTotal = api
                .column( 7, { page: 'current'} )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );

            // Total over all pages
            soldtotal = api
                .column( 4 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
 
            // Total over this page
            soldpageTotal = api
                .column( 4, { page: 'current'} )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );

            // Total over all pages
            purchasetotal = api
                .column( 3 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
 
            // Total over this page
            purchasepageTotal = api
                .column( 3, { page: 'current'} )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
 
            // Update footer
            $( api.column( 7 ).footer(2) ).html('₹'+profitpageTotal +' ( ₹'+ profittotal +' total)');
            $( api.column( 4 ).footer(2) ).html('₹'+soldpageTotal +' ( ₹'+ soldtotal +' total)');
            $( api.column( 3 ).footer(2) ).html('₹'+purchasepageTotal +' ( ₹'+ purchasetotal +' total)');
        }
    } );

$('#min, #max').change( function() {mobiles.draw();});

var products = $('#allproducts').DataTable({
        dom: 'Bfrtip',
        buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
        lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
        "footerCallback": function ( row, data, start, end, display ) {
            var api = this.api(), data;
 
            // Remove the formatting to get integer data for summation
            var intVal = function ( i ) {
                return typeof i === 'string' ?
                    i.replace(/[\₹,]/g, '')*1 :
                    typeof i === 'number' ?
                        i : 0;
            };
 
            // Total over all pages
            profittotal = api
                .column( 7 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
 
            // Total over this page
            profitpageTotal = api
                .column( 7, { page: 'current'} )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );

            // Total over all pages
            soldtotal = api
                .column( 4 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
 
            // Total over this page
            soldpageTotal = api
                .column( 4, { page: 'current'} )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );

            // Total over all pages
            purchasetotal = api
                .column( 3 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
 
            // Total over this page
            purchasepageTotal = api
                .column( 3, { page: 'current'} )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
 
            // Update footer
            $( api.column( 7 ).footer(2) ).html('₹'+profitpageTotal +' ( ₹'+ profittotal +' total)');
            $( api.column( 4 ).footer(2) ).html('₹'+soldpageTotal +' ( ₹'+ soldtotal +' total)');
            $( api.column( 3 ).footer(2) ).html('₹'+purchasepageTotal +' ( ₹'+ purchasetotal +' total)');
        }
    
    });


$('#min, #max').change( function() {products.draw();});
</script>









<?php }else{
    echo "<h1>Session Expired</h1><h3>Page Not Found</h3>";
    echo "<script>setTimeout(function(){ window.location.href='/'; }, 3000);</script>";
} ?>
</div></div>