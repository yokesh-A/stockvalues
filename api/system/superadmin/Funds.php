<div class="row">
    <div class="col-md-12">
    <nav>
        <ul class="pager">
            <li class="next"><button id="createnew" class="ui active button column centered"> <i class="fa fa-user-plus"></i> Create New </button></li>
        </ul>
    </nav>
    
        <div class="ui form" id="funddata">
            
        </div>
    </div>
</div>

<script>
$.ajax({
      type: 'GET',
      url: "api",
      dataType: 'text',
      data: {__a: "models",file: "fund"},
      success: function(Data) { $("#funddata").html(Data);}
});

$("#createnew").click(function (){
    $.ajax({
      type: 'GET',
      url: "api",
      dataType: 'text',
      data: {__a: "models",file: "fund",task: "addnew"},
      success: function(Data) { $("#funddata").html(Data);}
    });
});


</script>