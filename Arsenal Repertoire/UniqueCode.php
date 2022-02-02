

<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Code data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
    
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">CODE</th>
                            
                           
                            </tr>
                        </thead>
                        <?php
                            include "db_connect.php";
                            $query= "SELECT * FROM code_info";
                            $result=mysqli_query($conn,$query);
                            while($res=mysqli_fetch_array($result)){
                        ?>
                        <tbody>
                            <tr>
                            <td><?php echo $res['CODE']?></td>
                           
                            
                            </tr>
                        </tbody>
                    <?php }?>
                </table>
                
               
            </div>
        </div>
    </div>
</body> 
</html>