
<style>

.box-left
{
    width: 40%;
    padding-top: 100px;
    background: #fff;
    float: left;
    text-align: center;

}

.box-right
{
    
    width: 60%;
    float: left;
    height: 100%;
    background: linear-gradient(90deg,#ffee00, #fdcb27);
    
}

.in_right
{
    color: #505050;
    text-align: center;
    margin-top: 150px;
}

.in_right header, .box-left header
{
font-size: 32px;
font-weight: 400;
margin: 15px auto;
}

.in_right button
{
    background: transparent;
    margin: 15px auto;
    border-radius: 6px;
    cursor: pointer;
    padding: 6px;
}

.in_right button:hover
{
    background: linear-gradient(90deg,#ffd500, #e6c000);
}

.in_right p
{
    margin: 25px;
    font-size: 14px;

}

.in_left
{
    text-align: center;
    margin: 20px auto;
    
}

.logo
{
    text-align: center;
}

.fa-user
{
    
    font-size: 38px;
    color: #505050;
}

.box-left input
{
    display: block;
    margin: 15px auto;
    padding: 8px;
    border: none;
    border-bottom: 2px solid #8c8c8c;
}

.box-right input
{
    display: block;
    margin: 15px auto;
    padding: 8px;
    border: none;
    border-bottom: 2px solid #8c8c8c;
}

.box-left input:focus
{
    border: none;
    outline: none;
    border-bottom: 2px solid #505050;
}


.box-right input:focus
{
    border: none;
    outline: none;
    border-bottom: 2px solid #505050;
}

.box-left [type=button]
{
    width: 50%;
    border-radius: 6px;
    background: linear-gradient(90deg,#ffee00, #fdcb27);
    padding: 6px;
    cursor: pointer;
    margin: 25px auto;
    /* border: 2px solid gray; */
    border: none;
    box-shadow: 0 2px 4px #505050;
}

.box-right [type=button]
{
    width: 50%;
    border-radius: 6px;
    background: linear-gradient(90deg,#ffee00, #fdcb27);
    padding: 6px;
    cursor: pointer;
    margin: 25px auto;
    /* border: 2px solid gray; */
    border: none;
    box-shadow: 0 2px 4px #505050;
}

.box-left [type=button]:hover
{
    background: linear-gradient(90deg,#ffd500, #e6c000);
}
.box-right [type=button]:hover
{
    background: linear-gradient(90deg,#ffd500, #e6c000);
}
.fg
{
    text-align: center;
    font-size: 14px;
    color: #505050;
    cursor: pointer;
}
</style>
<div class="row">
    <div class="col-md-12">
        <div class="box-left">
            <div class="in_left">
                <header>PICK A DATE</header>
                <input type="date" id="date">
            </div>
        </div>
        <div class="box-right" id="right-tab">
            <div class="logo">
            <i class="fa fa-5x fa-money" aria-hidden="true"></i>
                <header>Please Select The Date First</header>
            </div>
        </div>
        
    </div>
</div>

<script>
$("#date").change(function(){
    $.ajax({
      type: 'GET',
      url: "api",
      dataType: 'text',
      data: {__a: "models",file: "recharge",date:""+$("#date").val()},
      success: function(Data) { $("#right-tab").html(Data);}
    });
});
</script>

