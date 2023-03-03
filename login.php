<?php
if(isset($_POST["Login"])){
    $email=$_POST["email"];
    $password=$_POST["password"];
    require_once"..//create/dbconnection.php";
    $sql = "SELECT *FROM usersdata WHERE email='$email'";
    $result =mysqli_query($conn,$sql);
    $user = mysqli_fetch_array($result,MYSQLI_ASSOC);
    if($user){
        if (password_verify($password,$user["password"])){
            header("Location: index.php");
            die();

            }
        else{
            echo"<div class='alert-danger'>Password does not match</div>";
            }
        }else{
            echo"<div class=' alert alert-danger'> Email does not match</div>";
            }
        
        
}
?>