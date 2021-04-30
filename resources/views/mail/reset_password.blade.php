<a href="http://homestead.test/patients/reset-password/{{$email_data}}">Here is your token</a>

<!DOCTYPE html>
<html lang = "en" dir = "ltr">
   <head>
       <meta charset = "utf-8">
       <title> Reset Password </title>
              <style>
         
         body{
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background-image: url('healthcare.jpg');
          }
          .box1{
            width: 470px;
            padding: 40px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: whitesmoke;
            text-align: center;
          }
          .box1 a#reset-link{
            display: block;
            margin: 20px auto;
            text-align: center;
            padding: 14px 40px;
            outline: none;
            color: white;
            background-color: #149eee;
            border-radius: 10px;
            transition: 0.25s;
            cursor: pointer;
          }
          .box1 .message{
            color: black;
            font-size: 14px;
            text-align: left;
          }
       </style>
    </head>
    <body>
        <form class = "box1" action = "loginprocess.php" method = "post">
        <p class = "message"> Hello! <br> <br>
            Someone recently requested a password change for your HealthCare account. if this was you, you can set a new password here
        </p> 
  		<a  id="reset-link" href="http://homestead.test/patient/reset-password/{{$email_data}}">Reset</a>

        <p class = "message"></p> if you don't want to change your password or didn't request this, just ignore and delete this message. <br> <br> 
            To keep your account secure, please don't forward this email to anyone. <br> <br>
            We wish you good health with HealthCare.
        </p> 
        </form>
    </body>
</html>