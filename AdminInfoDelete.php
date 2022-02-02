<?php

include "db_connect.php";
extract($_GET);
$query="DELETE FROM admin_info WHERE AD_ID='$AD_ID'";
mysqli_query($conn,$query);
header('location:AdminInfoDisplay.php');

?>