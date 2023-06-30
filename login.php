<?php

$conn = mysqli_connect('localhost','root','','medical') or die('connection failed');

session_start();

if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    //$email = mysqli_real_escape_string($conn, $filter_email);
    //$filter_pass = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
    $password =md5($_POST['password']);
    $select_users = mysqli_query($conn, "SELECT password FROM register WHERE email = '$email'") or die('query failed');


    if (mysqli_num_rows($select_users) > 0) {
        if ($pas = mysqli_fetch_array($select_users)) {
          
            if ($password == $pas["password"]) {


                $row = mysqli_fetch_assoc($select_users);
                $_SESSION['email'] = $row['email'];
                $_SESSION['password'] = $row['password'];

                header('location: appoint.php');
            }
            else{
                $message[] = 'pwd wrong';
            }
        }
    } else {
        $message[] = 'incorrect email or password!';
    }

    //$sql="select user_id,password from register"

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <style>
        body{
            background-color: #C4D7B2;
        }
        h2{
            font-style: italic;
        }
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #F7FFE5;
        }

        li {
             float: right;
        }

        li a {
             display: block;
             color: black;
             text-align: center;
             padding: 14px 16px;
             text-decoration: none;
             font-weight: 800;
        }

        li a:hover {
             background-color: #C4D7B2;
        }
        .list{
            float: left;
            padding: 0;
            margin-top: 0.0001cm;
        }
        .form{
            background-color: #85A389;
            text-align: center;
            position: absolute;
            top: 200px;
            left: 700px;
            height: 600px;
            width: 500px;  
        }
        input[type=email], input[type=password] ,input[type=submit]{
            width: 50%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #C4D7B2;
        }
    </style>
</head>
<body>
<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>
    <ul>
        <li class="list"><h1>MEDICAL APPOINTMENT SCHEDULER</h1></li>
        <li><h2><a href="http://localhost/medicalappointment/index.php">Home</a></h2></li>
        <li><h2><a href="http://localhost/medicalappointment/register.php">Register</a></h2></li>
        <li><h2><a href="http://localhost/medicalappointment/details.php">Deets</a></h2></li>
    </ul>
    <div class="form">
        <br><br><h1>LOGIN FORM</h1><br><br>
        <form action="" method="POST">
            <br><br><h4><label for="email">EMAIL</label></h4>
            <input type="email" placeholder="enter your email" name="email"><br>
            <h4><label for="password">PASSWORD</label></h4>
            <input type="password" placeholder="enter your password" name="password"><br><br>
            <input type="submit" class="btn" name="submit">
        </form>
    </div>
</body>
</html>