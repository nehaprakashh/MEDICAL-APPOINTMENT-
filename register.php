
<?php

$conn = mysqli_connect('localhost','root','','medical') or die('connection failed');

if(isset($_POST['submit'])){

    $filter_email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
    $email = mysqli_real_escape_string($conn, $filter_email);
    $filter_pass = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
    $password = mysqli_real_escape_string($conn, ($filter_pass));
    $filter_cpass = filter_var($_POST['cpassword'], FILTER_SANITIZE_STRING);
    $cpassword = mysqli_real_escape_string($conn, ($filter_cpass));
    $select_users = mysqli_query($conn, "SELECT * FROM register WHERE email = '$email'") or die('query failed');
 
    if(mysqli_num_rows($select_users) > 0){
       $message[] = 'user already exist!';
    }else{
       if($password != $cpassword){
          $message[] = 'confirm password not matched!';
       }else{
          mysqli_query($conn, "INSERT INTO register (email, password) VALUES('$email', md5('$password'))") or die('query failed');
          $message[] = 'registered successfully!';
          header('location:login.php');
       }
    }
 
 }
 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRATION</title>
    <style>
        body{
            background-color: #C4D7B2;
        }
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #F7FFE5;
        }
        h2{
            font-style: italic;
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
            height: 700px;
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
        <br><br><h1>REGISTRATION FORM</h1><br><br>
        <form action="" method="POST">
            <br><br><h4><label for="email">EMAIL</label></h4>
            <input type="email" name="email" placeholder="enter your email"><br>
            <h4><label for="password">PASSWORD</label></h4>
            <input type="password" name="password" placeholder="enter your password"><br>
            <h4><label for="password">CONFIRM PASSWORD</label></h4>
            <input type="password" name="cpassword" placeholder="re-enter password"><br>
            <input type="submit" class="btn" name="submit">
        </form>
        <p>Already have an account? <a href="http://localhost/medicalappointment/login.php">login</a></p>
    </div>
</body>
</html>