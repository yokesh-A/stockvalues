<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,300,700">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<!-- Profit Table CSS BEGINs-->
    <link rel="stylesheet" type="text/css" href="https://semantic-ui.com/dist/semantic.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.semanticui.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css"/>

    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.semanticui.min.js"></script>
    <script src="https://semantic-ui.com/dist/semantic.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/se-2.2.13/jq-3.3.1/dt-1.10.21/af-2.3.5/b-1.6.3/b-html5-1.6.3/b-print-1.6.3/cr-1.5.2/kt-2.5.2/r-2.2.5/sc-2.0.2/sp-1.1.1/datatables.min.js"></script>
<!-- Profit Table CSS ENDs-->

<style>
.container {
  margin-top:30px;
}

h1, h2, h3, h4, h5, h6 {
  font-family: 'Source Sans Pro';
  font-weight:700;
}

.fancyTab {
	text-align: center;
  padding:15px 0;
  background-color: #eee;
	box-shadow: 0 0 0 1px #ddd;
	top:15px;	
  transition: top .2s;
}

.fancyTab.active {
  top:0;
  transition:top .2s;
}

.whiteBlock {
  display:none;
}

.fancyTab.active .whiteBlock {
  display:block;
  height:2px;
  bottom:-2px;
  background-color:#fff;
  width:99%;
  position:absolute;
  z-index:1;
}

.fancyTab a {
	font-family: 'Source Sans Pro';
	font-size:1.65em;
	font-weight:300;
  transition:.2s;
  color:#333;
}

/*.fancyTab .hidden-xs {
  white-space:nowrap;
}*/

.fancyTabs {
	border-bottom:2px solid #ddd;
  margin: 15px 0 0;
}

li.fancyTab a {
  padding-top: 15px;
  top:-15px;
  padding-bottom:0;
}

li.fancyTab.active a {
  padding-top: inherit;
}

.fancyTab .fa {
  font-size: 40px;
	width:100%;
	padding: 15px 0 5px;
  color:#666;
}

.fancyTab.active .fa {
  color: #cfb87c;
}

.fancyTab a:focus {
	outline:none;
}

.fancyTabContent {
  border-color: transparent;
  box-shadow: 0 -2px 0 -1px #fff, 0 0 0 1px #ddd;
  padding: 30px 15px 15px;
  position:relative;
  background-color:#fff;
}

.nav-tabs > li.fancyTab.active > a, 
.nav-tabs > li.fancyTab.active > a:focus,
.nav-tabs > li.fancyTab.active > a:hover {
	border-width:0;
}

.nav-tabs > li.fancyTab:hover {
	background-color:#f9f9f9;
	box-shadow: 0 0 0 1px #ddd;
}

.nav-tabs > li.fancyTab.active:hover {
  background-color:#fff;
  box-shadow: 1px 1px 0 1px #fff, 0 0px 0 1px #ddd, -1px 1px 0 0px #ddd inset;
}

.nav-tabs > li.fancyTab:hover a {
	border-color:transparent;
}

.nav.nav-tabs .fancyTab a[data-toggle="tab"] {
  background-color:transparent;
  border-bottom:0;
}

.nav-tabs > li.fancyTab:hover a {
  border-right: 1px solid transparent;
}

.nav-tabs > li.fancyTab > a {
	margin-right:0;
	border-top:0;
  padding-bottom: 30px;
  margin-bottom: -30px;
}

.nav-tabs > li.fancyTab {
	margin-right:0;
	margin-bottom:0;
}

.nav-tabs > li.fancyTab:last-child a {
  border-right: 1px solid transparent;
}

.nav-tabs > li.fancyTab.active:last-child {
  border-right: 0px solid #ddd;
	box-shadow: 0px 2px 0 0px #fff, 0px 0px 0 1px #ddd;
}

.fancyTab:last-child {
  box-shadow: 0 0 0 1px #ddd;
}

.tabs .nav-tabs li.fancyTab.active a {
	box-shadow:none;
  top:0;
}


.fancyTab.active {
  background: #fff;
	box-shadow: 1px 1px 0 1px #fff, 0 0px 0 1px #ddd, -1px 1px 0 0px #ddd inset;
  padding-bottom:30px;
}

.arrow-down {
	display:none;
  width: 0;
  height: 0;
  border-left: 20px solid transparent;
  border-right: 20px solid transparent;
  border-top: 22px solid #ddd;
  position: absolute;
  top: -1px;
  left: calc(50% - 20px);
}

.arrow-down-inner {
  width: 0;
  height: 0;
  border-left: 18px solid transparent;
  border-right: 18px solid transparent;
  border-top: 12px solid #fff;
  position: absolute;
  top: -22px;
  left: -18px;
}

.fancyTab.active .arrow-down {
  display: block;
}

@media (max-width: 1200px) {
  
  .fancyTab .fa {
  	font-size: 36px;
  }
  
  .fancyTab .hidden-xs {
    font-size:22px;
	}
		
}
	
	
@media (max-width: 992px) {
    
  .fancyTab .fa {
  	font-size: 33px;
  }
    
  .fancyTab .hidden-xs {
  	font-size:18px;
    font-weight:normal;
  }
		
}
	
	
@media (max-width: 768px) {
    
  .fancyTab > a {
    font-size:18px;
  }
    
  .nav > li.fancyTab > a {
    padding:15px 0;
    margin-bottom:inherit;
  }
    
  .fancyTab .fa {
    font-size:30px;
  }
    
  .nav-tabs > li.fancyTab > a {
    border-right:1px solid transparent;
    padding-bottom:0;
  }
    
  .fancyTab.active .fa {
    color: #333;
	}
		
}
</style>
<div class="container"> 
<section id="fancyTabWidget" class="tabs t-tabs">
        <ul class="nav nav-tabs fancyTabs" role="tablist">
        
                    <li class="tab fancyTab">
                    <div class="arrow-down"><div class="arrow-down-inner"></div></div>	
                        <a id="tab0" href="#tabBody0" role="tab" aria-controls="tabBody0" aria-selected="true" data-toggle="tab" tabindex="0"><span class="fa fas fa-globe"></span><span class="hidden-xs">Connect</span></a>
                    	<div class="whiteBlock"></div>
                    </li>
                    
                    <li class="tab fancyTab">
                    <div class="arrow-down"><div class="arrow-down-inner"></div></div>
                        <a id="tab1" href="#tabBody1" role="tab" aria-controls="tabBody1" aria-selected="true" data-toggle="tab" tabindex="0"><span class="fa fa-money"></span><span class="hidden-xs">Recharge</span></a>
                        <div class="whiteBlock"></div>
                    </li>
                    
                    <li class="tab fancyTab">
                    <div class="arrow-down"><div class="arrow-down-inner"></div></div>
                        <a id="tab2" href="#tabBody2" role="tab" aria-controls="tabBody2" aria-selected="true" data-toggle="tab" tabindex="0"><span class="fa fa-mobile"></span><span class="hidden-xs">Mobiles</span></a>
                        <div class="whiteBlock"></div>
                    </li>
                    
                    <li class="tab fancyTab">
                    <div class="arrow-down"><div class="arrow-down-inner"></div></div>
                        <a id="tab3" href="#tabBody3" role="tab" aria-controls="tabBody3" aria-selected="true" data-toggle="tab" tabindex="0"><span class="fa fa-cart-plus"></span><span class="hidden-xs">Add-stock</span></a>
                        <div class="whiteBlock"></div>
                    </li> 
                         
                    <li class="tab fancyTab">
                    <div class="arrow-down"><div class="arrow-down-inner"></div></div>
                        <a id="tab4" href="#tabBody4" role="tab" aria-controls="tabBody4" aria-selected="true" data-toggle="tab" tabindex="0"><span class="fa fa-shopping-cart"></span><span class="hidden-xs">In-stock</span></a>
                        <div class="whiteBlock"></div>
                    </li>
                    
                    <li class="tab fancyTab">
                    <div class="arrow-down"><div class="arrow-down-inner"></div></div>
                        <a id="tab5" href="#tabBody5" role="tab" aria-controls="tabBody5" aria-selected="true" data-toggle="tab" tabindex="0"><span class="fa fa-question-circle"></span><span class="hidden-xs">Order</span></a>
                        <div class="whiteBlock"></div>
                    </li>
                    <?php if( $_SESSION["user"] === "superadmin"){ ?>
                    <li class="tab fancyTab">
                    <div class="arrow-down"><div class="arrow-down-inner"></div></div>
                        <a id="tab6" href="#tabBody6" role="tab" aria-controls="tabBody6" aria-selected="true" data-toggle="tab" tabindex="0"><i class="fa fa-line-chart" aria-hidden="true"></i><span class="hidden-xs">Profit</span></a>
                        <div class="whiteBlock"></div>
                    </li>
                    <?php } ?>
        </ul>
        <div id="myTabContent" class="tab-content fancyTabContent" aria-live="polite">
          <div class="tab-pane  fade active in" id="tabBody" role="tabpanel" aria-labelledby="tab0" aria-hidden="false" tabindex="0">
                            <div class="row">
                              <div class="col-md-12">
                                    <h2>Welcome DashBoard.</h2>
                                    <p>Navigate in Above Tabs To continue. </p>
                              </div>
                            </div>
          </div>
        </div>

    </section>
</div>
<script>
//tab nav
function navtab(tab,tabname){
    $.ajax({
      type: 'GET',
      url: "api",
      dataType: 'text',
      data: {__a: "superadmintabs",file:""+tabname},
      success: function(Data) {$("#tabBody").html(Data);}
    });  
}

$("[role=tab]").click(function(){
    tab = $(this).attr('aria-controls');
    tabname = $(this).text();
    tabid = $(this).attr('id');
    localStorage.setItem("tab", tab);
    localStorage.setItem("tabname", tabname);
    localStorage.setItem("tabid", tabid);
    navtab(tab,tabname);
});

$(document).ready(function(){
    if(localStorage.getItem("tabid")){
        tabid = localStorage.getItem("tabid");
        tab = localStorage.getItem("tab");
        tabname = localStorage.getItem("tabname");
        navtab(tab,tabname);
        $("li > #"+tabid+"").parent().addClass('active');
    }
});
</script>
<script>

$(document).ready(function() {
  

	  
  var numItems = $('li.fancyTab').length;
      
  
            if (numItems == 12){
                  $("li.fancyTab").width('8.3%');
              }
            if (numItems == 11){
                  $("li.fancyTab").width('9%');
              }
            if (numItems == 10){
                  $("li.fancyTab").width('10%');
              }
            if (numItems == 9){
                  $("li.fancyTab").width('11.1%');
              }
            if (numItems == 8){
                  $("li.fancyTab").width('12.5%');
              }
            if (numItems == 7){
                  $("li.fancyTab").width('14.2%');
              }
            if (numItems == 6){
                  $("li.fancyTab").width('16.666666666666667%');
              }
            if (numItems == 5){
                  $("li.fancyTab").width('20%');
              }
            if (numItems == 4){
                  $("li.fancyTab").width('25%');
              }
            if (numItems == 3){
                  $("li.fancyTab").width('33.3%');
              }
            if (numItems == 2){
                  $("li.fancyTab").width('50%');
              }
        
   

  
      });

$(window).load(function() {

$('.fancyTabs').each(function() {

  var highestBox = 0;
  $('.fancyTab a', this).each(function() {

    if ($(this).height() > highestBox)
      highestBox = $(this).height();
  });

  $('.fancyTab a', this).height(highestBox);

});
});

</script>