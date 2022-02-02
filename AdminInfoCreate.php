<?php

include "db_connect.php";
if(count($_POST)!=0)
{
    extract($_POST);
    $query="INSERT INTO admin_info (AD_ID,ADName,ADPassword,ADEmail,ADGender) VAlUES ('$AD_ID','$ADName','$ADPassword,'$ADEmail',$ADGender')";
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
    <title>New Admin Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <form method="post">
                    <div class="card">
                        <div class="card_header bg-dark">
                            <h1 class="text-center text-white">Insert New Admin Data</h1>
                        </div>
                        <div class="form_group">
                            <label for="AD_ID">Admin ID</label>
                            <input type="text" class="form-control" name="AD_ID">
                        </div>
                        <div class="form_group">
                            <label for="ADName">Admin Name</label>
                            <input type="text" class="form-control" name="ADName">
                        </div>
                        <div class="form_group">
                            <label for="ADPassword">Password</label>
                            <input type="number" class="form-control" name="ADPassword">
                        </div>
						<div class="form_group">
                            <label for="ADEmail">Admin Email</label>
                            <input type="varchar" class="form-control" name="ADEmail">
                        </div>
						<div class="form_group">
                            <label for="ADGender">Admin Gender</label>
                            <input type="text" class="form-control" name="ADGender">
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
                <h5><a href="AdminInfoDisplay.php"><input type="button" class="btn btn-primary" value="View Admin Data"></h5>
                <h5><a href="selection.php"><input type="button" class="btn btn-primary" value="Main Page"></h5>
            </div>
        </div>
    </div>
</body> 
</html>