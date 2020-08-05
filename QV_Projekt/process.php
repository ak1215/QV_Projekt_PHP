<?php
require_once('$connection.php');

if(isset($POST['Login']))
{
    if(empty($POST['UName']) || empty($_POST['Password']))
{
    header("location:index.php?Empty= Please fill in the blanks");
}
else{
    $query="select * from user where UName='" .$_POST['UName']."' and Pass='".$_POST['Password']."'";
    $result=mysqli_query($con,$query);

    if(mysqli_fetch_assoc($result)){
$_SESSION['User']=$_POST['UName'];
header("location:grades.php");
    }
}
else
{
    header("location:login.php?Invalid= PLease enter correct username and Password");
}
}
else{
    echo 'Not working you guyz';
}
?>