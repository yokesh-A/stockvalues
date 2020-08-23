<?php if( $_SESSION["user"] === "superadmin"){ ?>

<h1>Profit Boards</h1>
<button class="btn btn-secondary" onclick="window.location.href='/api/?__a=backup';">BACKUP All DATA INTO SINGLE NUT</button>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.material.min.css"/>

<table id="example" class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.material.min.js"></script>
<script>
    $(document).ready(function() {
    $('#example').DataTable( {
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        autoWidth: false,
        columnDefs: [
            {
                targets: ['_all'],
                className: 'mdc-data-table__cell'
            }
        ]
    } );
} );
</script>
<?php }else{
    echo "<h1>Session Expired</h1><h3>Page Not Found</h3>";
} ?>