<?php if( $_SESSION["user"] === "superadmin"){ ?>

<button class="btn btn-secondary center-block" onclick="window.location.href='/api/?__a=backup';">BACKUP All DATA INTO SINGLE NUT</button>



<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="css/data-table/bootstrap-editable.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
</head>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
        <!-- Static Table Start -->
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>OverAll <span class="table-project-n">STACK</span> DATA</h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                        <select class="form-control dt-tb">
											<option value="">Export Basic</option>
											<option value="all">Export All</option>
											<option value="selected">Export Selected</option>
										</select>
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th data-field="state" data-checkbox="true"></th>
                                                <th data-field="id">ID</th>
                                                <th data-field="mobile" data-editable="true">Mobile Name</th>
                                                <th data-field="imei">IMEI Number</th>
                                                <th data-field="purchase">Purchase</th>
                                                <th data-field="sold">Sold</th>
                                                <th data-field="status">Status</th>
                                                <th data-field="profit">Profit</th>
                                                <th data-field="date">Date</th>
                                                <th data-field="action">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
$results = $db->query("SELECT * FROM oldmobiles");
$i = 1;
while($row = $results->fetchArray()){ ?>
                                            <tr>
                                                <td></td>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $row['MOBILENAME']; ?></td>
                                                <td><?php echo $row['IMEI']; ?></td>
                                                <td><?php echo $row['RATE']; ?></td>
                                                <td><?php echo $row['SOLDOUT']; ?></td>
                                                <td><?php echo $row['STATUS']; ?></td>
                                                <td><?php echo ($row['SOLDOUT']-$row['RATE']); ?></td>
                                                <td><?php echo $row['SOLDOUTDATE']; ?></td>
                                                <td class="datatable-ct"><i class="fa fa-check"></i>
                                                </td>
                                            </tr>
                              <?php
$i++;}
?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js">
      $('#table').DataTable( {
        "order": [[ 3, "desc" ]]
    } );</script>
    <!-- data table JS
		============================================ -->
    <script src="js/data-table/bootstrap-table.js"></script>
    <script src="js/data-table/tableExport.js"></script>
    <script src="js/data-table/data-table-active.js"></script>
    <script src="js/data-table/bootstrap-table-editable.js"></script>
    <script src="js/data-table/bootstrap-editable.js"></script>
    <script src="js/data-table/bootstrap-table-resizable.js"></script>
    <script src="js/data-table/colResizable-1.5.source.js"></script>
    <script src="js/data-table/bootstrap-table-export.js"></script>




<?php }else{
    echo "<h1>Session Expired</h1><h3>Page Not Found</h3>";
} ?>