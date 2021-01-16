<?php
require  'connect.php';
$id=$_GET['id'];
$name_new=$_GET['name'];
$password_new=$_GET['password'];
$sql="update login set name='$name_new',address='$password_new'where id='$id'";
if(mysqli_query($conn,$sql)){
    header("Location:index.php");
}
else {
    echo "Chưa sửa được";
}
?>