<?php
if( $_SESSION["user"] === "superadmin"){
$file = "system/2cheap.db";

header('Content-Description: File Transfer');
header('Content-Disposition: attachment; filename=2cheap.nutz');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($file));
header("Content-Type: text/plain");
readfile($file);
}
?>