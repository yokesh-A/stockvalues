<style>
.dataTables_filter{
    float:right;
    margin-right:15%;
}
</style>
<style>
    * { box-sizing:border-box; }

/* basic stylings ------------------------------------------ */
body 				 { background:url(https://scotch.io/wp-content/uploads/2014/07/61.jpg); }

h2 		 { 
  text-align:center; 
  margin-bottom:50px; 
}
h2 small { 
  font-weight:normal; 
  color:#888; 
  display:block; 
}
.footer 	{ text-align:center; }
.footer a  { color:#53B2C8; }

/* form starting stylings ------------------------------- */
.group 			  { 
  position:relative; 
  margin-bottom:45px; 
}
input 				{
  font-size:18px;
  padding:10px 10px 10px 5px;
  display:block;
  width:300px;
  border:none;
  border-bottom:1px solid #757575;
}
input:focus 		{ outline:none; }

/* LABEL ======================================= */
.label{
  color:#999; 
  font-size:18px;
  font-weight:normal;
  position:absolute;
  pointer-events:none;
  left:5px;
  top:10px;
  transition:0.2s ease all; 
  -moz-transition:0.2s ease all; 
  -webkit-transition:0.2s ease all;
}

/* active state */
input:focus ~ label, input:valid ~ label 		{
  top:-20px;
  font-size:14px;
  color:#5264AE;
}

/* BOTTOM BARS ================================= */
.bar 	{ position:relative; display:block; width:300px; }
.bar:before, .bar:after 	{
  content:'';
  height:2px; 
  width:0;
  bottom:1px; 
  position:absolute;
  background:#5264AE; 
  transition:0.2s ease all; 
  -moz-transition:0.2s ease all; 
  -webkit-transition:0.2s ease all;
}
.bar:before {
  left:50%;
}
.bar:after {
  right:50%; 
}

/* active state */
input:focus ~ .bar:before, input:focus ~ .bar:after {
  width:50%;
}

/* HIGHLIGHTER ================================== */
.highlight {
  position:absolute;
  height:60%; 
  width:100px; 
  top:25%; 
  left:0;
  pointer-events:none;
  opacity:0.5;
}

/* active state */
input:focus ~ .highlight {
  -webkit-animation:inputHighlighter 0.3s ease;
  -moz-animation:inputHighlighter 0.3s ease;
  animation:inputHighlighter 0.3s ease;
}

/* ANIMATIONS ================ */
@-webkit-keyframes inputHighlighter {
	from { background:#5264AE; }
  to 	{ width:0; background:transparent; }
}
@-moz-keyframes inputHighlighter {
	from { background:#5264AE; }
  to 	{ width:0; background:transparent; }
}
@keyframes inputHighlighter {
	from { background:#5264AE; }
  to 	{ width:0; background:transparent; }
}

</style>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/se-2.2.13/jq-3.3.1/dt-1.10.21/af-2.3.5/b-1.6.3/b-html5-1.6.3/b-print-1.6.3/cr-1.5.2/kt-2.5.2/r-2.2.5/sc-2.0.2/sp-1.1.1/datatables.min.css"/>
<div class="row">
    <div class="col-md-6">
            
            <h2>Second Handed Mobiles<small>Regisiter</small></h2>
            
            <form id="secoundsregister">
                <div class="group">      
                <input type="text" id="name" autocomplete="off" required>
                <span class="highlight"></span>
                <span class="bar"></span>
                <label class="label">MOBILE NAME</label>
                </div>
                
                <div class="group">      
                <input type="text" id="imei" autocomplete="off" required>
                <span class="highlight"></span>
                <span class="bar"></span>
                <label class="label">MOBILE IMEI NUMBER</label>
                </div>

                <div class="group">      
                <input type="number" id="rate" autocomplete="off" required>
                <span class="highlight"></span>
                <span class="bar"></span>
                <label class="label">MOBILE RATE</label>
                </div>

                <div class="group">      
                <input type="number" id="price" autocomplete="off" required>
                <span class="highlight"></span>
                <span class="bar"></span>
                <label class="label">MOBILE PRICE</label>
                </div>
                
                <input id="secoundmobilereg" type="button" value="SAVE">
            
            </form>
    </div>
    <div class="col-sm-6" id="instocklist">
            
            <h2>Second Handed Mobiles<small>IN STOCK</small></h2>
            <h2>FETCHING DATA .....</h2>
    </div>
</div>
<script type="text/javascript" src="https://cdn.datatables.net/v/se-2.2.13/jq-3.3.1/dt-1.10.21/af-2.3.5/b-1.6.3/b-html5-1.6.3/b-print-1.6.3/cr-1.5.2/kt-2.5.2/r-2.2.5/sc-2.0.2/sp-1.1.1/datatables.min.js"></script>

<script>
$("#secoundmobilereg").click(function(){
    $.ajax({
      type: 'GET',
      url: "api",
      dataType: 'text',
      data: {__a: "models",file: "secoundmobiles",imei:""+$("#imei").val(),name:""+$("#name").val(),rate:""+$("#rate").val(),price:""+$("#price").val()},
      success: function(Data) { $("#instocklist").html(Data); tabledata(); document.getElementById("secoundsregister").reset(); datasent();}
    });
});
function getdata(){
    $.ajax({
      type: 'GET',
      url: "api",
      dataType: 'text',
      data: {__a: "models",file: "secoundmobiles"},
      success: function(Data) { $("#instocklist").html(Data); tabledata(); datasent();}
    });}
    
function tabledata(){
    $('#mobilesinstock').DataTable( {
        pageLength: 6,
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
}

function datasent(){
$("[role='selloldmoblie']").click(function(){
    id = $(this).attr('id');
    valueid = '#sr'+id;
    value = $(valueid).val();
    $.ajax({
      type: 'GET',
      url: "api",
      dataType: 'text',
      data: {__a: "models",file: "secoundmobiles",soldimei:""+id,soldrate:""+value},
      success: function(Data) { $("#instocklist").html(Data); tabledata(); datasent();}
    });
});
}
getdata();
</script>