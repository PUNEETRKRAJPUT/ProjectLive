<?php 
session_start();

include("../config/config.php");


if(isset($_POST['admin-login']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];

    $query="SELECT * FROM admin WHERE Email='$email' AND Password='$password'";
    $result=mysqli_query($conn,$query);
    $present=mysqli_num_rows($result);
    if($present>0)
    {
        $row=mysqli_fetch_array($result);
        $_SESSION['AID']=$row['ID'];
        header('Location:../Dashboard.php');
    }else{
        $_SESSION['ANF']=1;
        header('Location:../Contact.php');
    }

}


if(isset($_POST['user-login']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $query="SELECT * FROM user WHERE Email='$email' AND Password='$password'";
    $result=mysqli_query($conn,$query);
    $present=mysqli_num_rows($result);
    if($present>0)
    {
        $row=mysqli_fetch_array($result);
        $_SESSION['UID']=$row['ID'];  
        header('Location:../Dashboard.php');      
    }
}

?>