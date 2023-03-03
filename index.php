<?php
session_start();
if(isset($_SESSION[ "usersdata"])){
    header("Location:loginpage.php");
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>User Dashboard</title>
    <style type="text/css">
         .container{
        max-width:500px;
        margin:50px auto;
        padding:50px;
        box-shadow:-2px 2px 15px;
      } 
      h1{
        text-align:center;
      }
     #btn{
        border:2px solid black;
        border-radius:15px;
        padding:5px 5px 5px 5px;
        margin-top: 10px;
        font-weight:600;
        background-color:gray;
      }
        </style>
</head>
<body>
    <div class="container">
        <div><h1>HELLO!!!<h1><div>
    <h1>Welcome to Dashbord<h1>
        <h2>I am Dipendra patel</h2>
        <div>
        <a href="logout.php"><button id="btn" >Log out</button></a>
        </div>
    </div> 
</body>
</html>