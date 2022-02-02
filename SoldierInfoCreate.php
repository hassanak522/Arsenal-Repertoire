<?php

include "db_connect.php";
if(count($_POST)!=0)
{
    extract($_POST);
    $query="INSERT INTO soldier_info (SD_ID,SDName,SDPassword,SDEmail,SDGender) VAlUES ('$SD_ID','$SDName','$SDPassword','$SDEmail','$SDGender')";
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
    <title>New Soldier Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <form method="post">
                    <div class="card">
                        <div class="card_header bg-dark">
                            <h1 class="text-center text-white">Insert New Soldier Data</h1>
                        </div>
                        <div class="form_group">
                            <label for="SD_ID">Soldier ID</label>
                            <input type="text" class="form-control" name="SD_ID">
                        </div>
                        <div class="form_group">
                            <label for="SDName">Soldier Name</label>
                            <input type="text" class="form-control" name="SDName">
                        </div>
                        <div class="form_group">
                            <label for="SDPassword">Password</label>
                            <input type="number" class="form-control" name="SDPassword">
                        </div>
						<div class="form_group">
                            <label for="SDEmail">Soldier Email</label>
                            <input type="varchar" class="form-control" name="SDEmail">
                        </div>
						<div class="form_group">
                            <label for="SDGender">Soldier Gender</label>
                            <input type="text" class="form-control" name="SDGender">
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
                <h5><a href="SoldierInfoDisplay.php"><input type="button" class="btn btn-primary" value="View Soldier Data"></h5>
                <h5><a href="selection.php"><input type="button" class="btn btn-primary" value="Main Page"></h5>
            </div>
        </div>
    </div>
</body> 
</html>