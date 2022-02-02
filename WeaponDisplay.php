<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Weapon Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
    
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">Weapon_ID</th>
                            <th scope="col">WeaponName</th>
                            <th scope="col">Weapon_instock</th>
                            <th scope="col">allocation</th>
                            
                           
                            </tr>
                        </thead>
                        <?php
                            include "db_connect.php";
                            $query= "SELECT * FROM weapon_info";
                            $result=mysqli_query($conn,$query);
                            while($res=mysqli_fetch_array($result)){
                        ?>
                        <tbody>
                            <tr>
                            <td><?php echo $res['Weapon_ID']?></td>
                            <td><?php echo $res['WeaponName']?></td>
                            <td><?php echo $res['Weapon_instock']?></td>
							<td><?php echo $res['allocation']?></td>
                            <td><a href="WeaponDelete.php?weapon_ID=<?php echo $res['Weapon_ID']?>"><input type="button" class="btn btn-primary" value="Delete"></a></td>
                            <td><a href="WeaponUpdate.php?weapon_ID=<?php echo $res['Weapon_ID']?>"><input type="button" class="btn btn-primary" value="Update"></a></td>
                            
                            </tr>
                        </tbody>
                    <?php }?>
                </table>
                <h5><a href="WeaponInsert.php"><input type="button" class="btn btn-primary" value="Insert New Weapon Data"></h5>
				
               
                <h5><a href="selection.php"><input type="button" class="btn btn-primary" value="Main Page"></h5>
            </div>
        </div>
    </div>
</body> 
</html>