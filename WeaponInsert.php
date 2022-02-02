<?php

include "db_connect.php";
if(count($_POST)!=0)
{
    extract($_POST);
    $query="INSERT INTO weapon_info (Weapon_ID,WeaponName,Weapon_instock, allocation) VAlUES ('$Weapon_ID','$WeaponName','$Weapon_instock','$allocation')";
    $result=mysqli_query($conn,$query);
    if ($result==true)
    {
        echo "Record Inserted";
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
    <title>New Weapon Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <form method="post">
                    <div class="card">
                        <div class="card_header bg-dark">
                            <h1 class="text-center text-white">Insert New Weapon Data</h1>
                        </div>
                        <div class="form_group">
                            <label for="Weapon_ID">Weapon ID</label>
                            <input type="text" class="form-control" name="Weapon_ID">
                        </div>
                        <div class="form_group">
                            <label for="WeaponName">Weapon Name</label>
                            <input type="text" class="form-control" name="WeaponName">
                        </div>
                        <div class="form_group">
                            <label for="Weapon_instock">weapon Instock</label>
                            <input type="varchar" class="form-control" name="Weapon_instock">
                        </div>
						<div class="form_group">
                            <label for="allocation">weapon Allocated To</label>
                            <input type="text" class="form-control" name="allocation">
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
                <h5><a href="WeaponDisplay.php"><input type="button" class="btn btn-primary" value="View Weapon Data"></h5>
                <h5><a href="selection.php"><input type="button" class="btn btn-primary" value="Main Page"></h5>
            </div>
        </div>
    </div>
</body> 
</html>