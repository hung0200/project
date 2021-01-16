
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
        <form action="" class="form">
        <div class="form-group">
            <lable >Name</lable>
            <input type=" text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <lable >pass</lable>
            <input type="text"name="password" class="form-control">
        </div>
        
        <button type="submit" class="btn btn-primary">CREAETE</button>
        <a href="a.php" class="btn btn-primary ">CANCER</a></div>
        </div>
        </form>
    </div>
<?php
    session_start();
    
    require 'connect.php';
    if(isset($_GET['name'])){
        $na=$_GET['name'];
    }
    if(isset($_GET['password'])){
        $pass=$_GET['password'];
    }
    if(isset($na) or isset($pass) ){
        
        
        $sql="select * from login where name='$na' and password='$pass'";
        $result=mysqli_query($conn,$sql);
      
        $num_rows = mysqli_num_rows($result);
   
        if($num_rows==0)
        {
            echo "your pass word is not correct";
           
        }
        else{
            $_SESSION['username'] = "$na";
            header("Location:admin.php");
            
        }
        }
    ?> 

</body>
</html>
