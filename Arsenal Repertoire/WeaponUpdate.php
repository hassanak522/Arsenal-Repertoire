<?php

include "db_connect.php";

if(count($_POST)!=0)
{
    extract($_POST);
    extract($_GET);
    $query="UPDATE admin_info SET ADName='$ADName',ADPassword='$ADPassword' WHERE AD_ID='$AD_ID'";
    $result=mysqli_query($conn,$query);
    if ($result==true)
    {
        echo "Record Updated";
        header('location:AdminInfoDisplay.php');
    }
    else{
        echo "Failed";
        
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Weapon Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <form method="post" form action="">
                    <div class="card">
                        <div class="card_header bg-dark">
                            <h1 class="text-center text-white">Update Weapon Data</h1>
                        </div>
						<div class="form_group">
                            <label for="Weapon_ID">Weapon ID</label>
                            <input type="text"  class="form-control" name="Weapon_ID">
                        </div>
                        <div class="form_group">
                            <label for="WeaponName">Weapon Name</label>
                            <input type="text"  class="form-control" name="WeaponName">
                        </div>
                        <div class="form_group">
                            <label for="Weapon_instock">Weapon Instock</label>
                            <input type="number"  class="form-control" name="Weapon_instock">
                        </div>
						 <div class="form_group">
                            <label for="allocation">Weapon Allocation</label>
                            <input type="text"  class="form-control" name="allocation">
                        </div>
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>
                <h5><a href="WeaponDisplay.php"><input type="button" class="btn btn-primary" value="Update Weapon Data"></h5>
                <h5><a href="selection.php"><input type="button" class="btn btn-primary" value="Main Page"></h5>
            </div>
        </div>
    </div>
</body> 
</html>