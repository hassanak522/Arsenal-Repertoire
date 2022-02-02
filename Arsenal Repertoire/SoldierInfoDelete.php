<?php

include "db_connect.php";
extract($_GET);
$query="DELETE FROM soldier_info WHERE SD_ID='$SD_ID'";
mysqli_query($conn,$query);
header('location:SoldierInfoDisplay.php');

?>