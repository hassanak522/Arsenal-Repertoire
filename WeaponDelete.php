<?php

include "db_connect.php";
extract($_GET);
$query="DELETE FROM weapon_info WHERE Weapon_ID='$Weapon_ID'";
mysqli_query($conn,$query);
header('location:WeaponDisplay.php');

?>