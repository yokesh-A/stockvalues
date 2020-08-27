<div class="row">
    <div class="col-md-12">
    <h2>Add New Products.</h2>
<div id="message"></div>     

<form class="ui form" id="addnewproduct">
    <div class="field">
        <div class="two fields">
        
        <div class="field"><label>Product Name</label>
            <input type="text" id="name" placeholder="Product Name">
        </div>
        
        <div class="field"><label>Product Price</label>
            <input type="number" id="price" placeholder="Product Price">
        </div>
        </div>
    </div>
  <div class="field">
    <label>Product Description</label>
    <textarea id="des"></textarea>
  </div>
  <div class="field">
    
    <div class="two fields">
    
      <div class="field"><label>Product Rate</label>
        <input type="number" id="rate" placeholder="Product Rate">
      </div>
      
      <div class="field"><label>Product Quantity</label>
        <input type="number" id="qty" placeholder="Product Quantity">
      </div>
    </div>
  </div>
  <button class="ui button" id="addproduct" type="button">Submit</button>
</form>


<script>

$("#addproduct").click(function(){
    $.ajax({
      type: 'GET',
      url: "api",
      dataType: 'text',
      data: {__a: "models",file: "addproduct",name:""+$("#name").val(),price:""+$("#price").val(),rate:""+$("#rate").val(),des:""+$("#des").val(),qty:""+$("#qty").val()},
      success: function(Data) { $("#message").html(Data);document.getElementById("addnewproduct").reset();}
    });
});

</script>
    </div>
</div>