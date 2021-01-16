
<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://pro.fontawesome.com/releases/v5.12.0/css/all.css" rel="stylesheet">
    
</head>

<body>
<div class="container">
    <div class="page-header clearfix" style="display:flex;align-items:center">
    

    </div>
    
    <div class='container'>
        <table class='table'>
            <thead>
   
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>email</th>
                    <th>phone</th>
                    <th>date of birth</th>
                    <th>mo ta</th>
                    <th>update</th>
                </tr>
            </thead>
    <?php
    require 'connect.php';
    $sql="select * from member";
    $result=mysqli_query($conn,$sql);
        $data_list=mysqli_fetch_all($result);
        foreach($data_list as $data){
            echo "<tr>";
            echo"<td>$data[0]</td>";
            echo"<td>$data[1]</td>";
            echo"<td>$data[2]</td>";    
            echo"<td>$data[3]</td>";
            echo"<td>$data[4]</td>";
            echo"<td>$data[5]</td>";
            echo"<td>$data[6]</td>";    
 
  
            echo"<td><a href='update.php?id=".$data[0]."'><i class='fas fa-edit'></i></a></td>";
         
            echo"</tr>";
        }
        echo"</table>";
        echo"</div>";
    ?>
<a href="close.php">log out </a>




 

</body>
</html>
