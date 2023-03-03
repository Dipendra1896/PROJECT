<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verification</title>
    <style type="text/css">
        body{
            position:relative;
            background-color:#00b3ff;
            display:flex;
            justify-content:center;
            align-items:center;
            min-height:100vh;
            
        }
        .form{
            position:relative;
            text-align:center;
            background:pink;
            width:100%;
            height:250px;
            max-width:500px;
            border-radius:15px;
            box-shadow:-3px 3px 20px;

        }
        .fields-input{
            dislpay:flex;
            justify-content:center;
            align-items:center;
            margin:15px 0;
        }
        .otp_field{
            border:2px solid #cacaca;
            border-radius:5px;
            font-size:30px;
            font-weight:600;
            width:50px;
            margin:1%;
            text-align:center;

        }
        .otp_field::-webkit-inner-spin-button,
        .otp_field::-webkit-outer-spin-button{
            -webkit-appearance:none;
            margin:0;
        }
        .otp_field:valid{
            border-color:#3095d8;
            box-shadow:0 10px 10px -5px rgba(0,0,0,0.25);
        }
        @media only screen and(max-width:455px){
            .otp_field{
                font-size:55px;
                height:80px;
                width:80px;
            }
        }

    </style>
</head>
<body>
    <div class="form" >
        <h2>Verify your Acount</h2>
        <p> We have send you four digit OPT.Enter the  four digit OTP below to verify your email address. </p>
        <form action="" autocomplete="off">
            <div class="error-text">Wrong OTP</div>
            <div class="fields-input">
                <input type="number" name="otp1" class="otp_field" placeholder="0" min="0" max="9" required onpaste="false">
                <input type="number" name="otp2" class="otp_field" placeholder="0" min="0" max="9" required onpaste="false">
                <input type="number" name="otp3" class="otp_field" placeholder="0" min="0" max="9" required onpaste="false">
                <input type="number" name="otp4" class="otp_field" placeholder="0" min="0" max="9" required onpaste="false">
            </div>
            <div class="submit">
                <input type="submit" value="Verify Now" class="button">
            </div>
        </form>
    </div>
    <script src="../create/verify.js"></script>
</body>
</html>