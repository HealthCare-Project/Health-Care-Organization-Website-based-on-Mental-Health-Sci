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
        <p class = "message"> Hello, <strong>{{$email_data["first_name"]}} {{$email_data["last_name"]}}</strong><br> <br>
            Please verify your password to be able to make full of use of our website.
        </p> 
  		<a  id="reset-link" href="homestead.test/patient/verify?code={{$email_data['verification_code']}}">Verify</a>
        </p> 
        </form>
    </body>
</html>