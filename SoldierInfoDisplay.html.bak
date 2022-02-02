<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Soldier Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
    
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">SD_ID</th>
                            <th scope="col">SDName</th>
                            <th scope="col">SDPassword</th>
                            <th scope="col">SDEmail</th>
                            <th scope="col">SDGender</th>
                           
                            </tr>
                        </thead>
                        <?php
                            include "db_connect.php";
                            $query= "SELECT * FROM soldier_info";
                            $result=mysqli_query($conn,$query);
                            while($res=mysqli_fetch_array($result)){
                        ?>
                        <tbody>
                            <tr>
                            <td><?php echo $res['SD_ID']?></td>
                            <td><?php echo $res['SDName']?></td>
                            <td><?php echo $res['SDPassword']?></td>
                            <td><a href="SoldierInfoDelete.php?client_id=<?php echo $res['SD_ID']?>"><input type="button" class="btn btn-primary" value="Delete"></a></td>
                            <td><a href="SoldierInfoUpdate.php?client_id=<?php echo $res['SD_ID']?>"><input type="button" class="btn btn-primary" value="Update"></a></td>
                            
                            </tr>
                        </tbody>
                    <?php }?>
                </table>
                <h5><a href="SoldierInfoCreate.php"><input type="button" class="btn btn-primary" value="Insert New Client Data"></h5>
               
                <h5><a href="selection.php"><input type="button" class="btn btn-primary" value="Main Page"></h5>
            </div>
        </div>
    </div>
</body> 
</html>