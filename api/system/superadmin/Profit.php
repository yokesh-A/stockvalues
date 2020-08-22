<?php if( $_SESSION["user"] === "superadmin"){ ?>

<h1>Profit Boards</h1>

<?php }else{
    echo "<h1>Session Expired</h1><h3>Page Not Found</h3>";
} ?>