
<?php
session_start();

if (isset($_POST['submit'])) {
    $dbHost = 'localhost';
    $dbName = 'usersdata';
    $dbUsername = 'root';
    $dbPassword = '';
    $conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $passwordEncryp = md5($password);
    $sql = "SELECT * FROM information WHERE email = '$email' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if ($row['password'] === $passwordEncryp) {
            $_SESSION['username'] = $row['username'];
            header("location: index.php");
            exit();
        } else  {
            echo '<p class="error-message">Invalid Password or Email</p>';
        }
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>log in page</title>
    <style type="text/css">
        section{
            display:flex;
            justify-content:center;
            align-items:center;
            min-height:100vh; 
            width:100%;
            background:url("../create/wallpaper.jpg")no-repeat;
            background-position:center;
            background-size:cover;
        }
        .form-box{
            position:relative;
            width:400px;
            height:450px;
            background:transparent;
            border:2px solid rgba(255,255,255,0.5);
            border-radius:20px;
            backdrop-filter:blur(15px);
            display:flex;
            justify-content:center;
            align-items:center;

        }
   
        h2{
            font-size:1.5em;
            color:white;
            text-align:center;
        }
        .inputbox{
            position:relative;
            margin:30px 0;
            width:310px;
            border-bottom:2px solid white;
        }
        .error-message {
            color: red;
            text-align:center;
            margin-bottom:10px;
        
            font-style: italic;
}

        .inputbox label{
            position:absolute;
            top:50%;
            left:5px;
            transform:translateY(-50%);
            color:white;
            font-size:1em;
            pointer-events:none;
            transition:0.5s;
        }
         input:focus ~ label,
         input:valid ~ label{
            top:-5px; 

         }
        .inputbox input{
            width:100%;
            height:50px;
            background: transparent;
            border:none;
            outline:none;
            font-size:1em;
            padding: 0 35px 0 5px;
            color:white;
        }
        .inputbox ion-icon{
            position:absolute;
            right:8px;
            color:white;
            font-size:1.2em;
            top:20px;
        }
        .remember{
            margin:-15px 0 15px;
            font-size:1em;
            color:white;
            display:flex;
            
        }
         .remember p{
            margin-top:11px;
        } 
        .register{
            font-size:0.9em;
            color:white;
            text-align:center;
            margin:25px 0 10px;
        }
        .register p a{
            text-decoration:none;
            font-weight:600;
            color:blue;
        }
        .register p a:hover{
            text-decoration:underline;
        }
        #submit{
            border:2px solid white;
            border-radius:15px;
            height:40px;
            background:transparent;
        }
        #btn{
            font-weight:600;
            text-align:center;
            padding:0 0 5px 0;
        }
        .formerror {
        color: red;
        font-size: 0.8em;
        font-style: italic;
       }


        
    </style>
</head>
<body>
    <section>
        <div class ="form-box">
            <div class="form-value">
                <form action="../create/loginpage.php"  onsubmit ="return validateForm" method="post">
                    <h2>Log In Here</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" id="email"  name="email" required>
                        <label for="email">User Email:</label>
                        <div><b><span id="emailError" class="formerror"></span></b></div>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-Closed-outline"></ion-icon>
                        <input type="password" id="password"  name="password" required>
                        <label for="password">Password:</label>
                        <div><b><span id="passwordError" class="formerror"></span></b></div>
                    </div>
                    <div class="remember">
                        <input type="checkbox" required><p>Remember Me</p>
                    </div>
                    <div class ="inputbox" id="submit">
                    <input type="submit" id="btn" value="Login" name="submit" required>
                    </div>    
                    <div class="register">
                        <p>Don't have an Account?  <a href="../create/registration.php">Register Here</a></p>
                    </div> 
                </form>
            </div>
        </div>   
    </section>
    
     <script src="../create/loginpagevalidation.js"></script> 
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
</body>
</html>