<div class="ui placeholder segment">
  <div class="ui two column stackable center aligned grid">
    <div class="ui vertical divider">Or</div>
    <div class="middle aligned row">
      <div class="column">
        <div class="ui icon header">
          <i class="user icon"></i>
          
        </div>
        <div class="field">
          <div class="ui search">
            <h2><?php echo $_SESSION["user_name"]; ?></h2>
          </div>
        </div>
      </div>
      <div class="column">
        <div class="ui icon header">
          <i class="world icon"></i>
          <?php if( $_SESSION["user"] === "superadmin"){ echo "CEO"; }else{ echo "Accountant"; } ?>
        </div>
        <div class="ui primary button" onclick="logout()">
          Logout
        </div>
      </div>
    </div>
  </div>
</div>