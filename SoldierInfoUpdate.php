<?php

include "db_connect.php";
$SDName=$_GET['SDName'];

$d=mysqli_query($conn,"SELECT * FROM soldier_info WHERE SD_ID='$SD_ID'");

$r=mysqli_fetch_array($d);

if(count($_POST)!=0)
{
    extract($_POST);
    extract($_GET);
    $query="UPDATE soldier_info SET SDName='$SDName',SDPassword='$SDPassword' WHERE SD_ID='$SD_ID'";
    $result=mysqli_query($conn,$query);
    if ($result==true)
    {
        echo "Record Updated";
        header('location:SoldierInfoDisplay.php');
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
    <title>Update Soldier Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <form method="post" form action="">
                    <div class="card">
                        <div class="card_header bg-dark">
                            <h1 class="text-center text-white">Update Soldier Data</h1>
                        </div>
                        <div class="form_group">
                            <label for="SDName">SDName</label>
                            <input type="text" value="<?php echo $r['SDName']?>" class="form-control" name="SDName">
                        </div>
                        <div class="form_group">
                            <label for="SDPassword">SDPassword</label>
                            <input type="number" value="<?php echo $r['SDPassword']?>" class="form-control" name="SDPassword">
                        </div>
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>
                <h5><a href="SoldierInfoDisplay.php"><input type="button" class="btn btn-primary" value="View Soldier Data"></h5>
                <h5><a href="selection.php"><input type="button" class="btn btn-primary" value="Main Page"></h5>
            </div>
        </div>
    </div>
</body> 
</html>