<?php 
session_start();

$con = mysqli_connect('localhost','root');
if ($con){
    echo "successful";
} else{
    echo "no connection";
}

mysqli_select_db($con,'test');

$name = $_POST['user'];
$pass = $_POST['password'];

$q = " select * from login where name = '$name' && password ='$pass' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num==1){
    $_SESSION['username']=$name;
    header('location:home.php');
}else{
    header('location:index.php');
}

// header('location:index.php');

?>