<style>
.dataTables_filter{
    float:right;
    margin-right:15%;
}
</style>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/se-2.2.13/jq-3.3.1/dt-1.10.21/af-2.3.5/b-1.6.3/b-html5-1.6.3/b-print-1.6.3/cr-1.5.2/kt-2.5.2/r-2.2.5/sc-2.0.2/sp-1.1.1/datatables.min.css"/>

<div class="row">
    <div class="col-md-12" id="newproduct">
            <h2>FETCHING DATA .....</h2>
    </div>
</div>
<script type="text/javascript" src="https://cdn.datatables.net/v/se-2.2.13/jq-3.3.1/dt-1.10.21/af-2.3.5/b-1.6.3/b-html5-1.6.3/b-print-1.6.3/cr-1.5.2/kt-2.5.2/r-2.2.5/sc-2.0.2/sp-1.1.1/datatables.min.js"></script>
<script>
function getdata(){
    
    $.ajax({
      type: 'GET',
      url: "api",
      dataType: 'text',
      data: {__a: "models",file: "buyproduct"},
      success: function(Data) { $("#newproduct").html(Data); tabledata();datasent();}
    });}
    
function tabledata(){
    $('#Newproductslist').DataTable( {
        pageLength: 6,
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
}

function datasent(){
$("[role='sellproduct']").click(function(){
    id = $(this).attr('id');
    rateid = '#rate'+id;
    qtyid = '#qty'+id;
    rate = $(rateid).val();
    qty = $(qtyid).val();
    $.ajax({
      type: 'GET',
      url: "api",
      dataType: 'text',
      data: {__a: "models",file: "buyproduct",id:""+id,soldrate:""+rate,soldqty:""+qty},
      success: function(Data) { $("#newproduct").html(Data); tabledata(); datasent();}
    });
});
}

getdata();
</script>