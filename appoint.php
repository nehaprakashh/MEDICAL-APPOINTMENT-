<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "medical");

if(isset($_POST['submit'])){

  $name = $_POST['name'];
  $age = $_POST['age'];
  $reason = $_POST['reason'];
	
      $query = "INSERT INTO appoint (name, age, reason) VALUES('$name', '$age', '$reason')";
      $query_run = mysqli_query($conn, $query);
     
      if($query_run){
        
        $_SESSION['status'] = "entered successfully";
        header("Location: index.php");
      }  
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APPOINTMENT FORM</title>
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
        .first{
            background-color: #C4D7B2;
            height: 800px;
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
        input[type=text], input[type=number] ,input[type=submit]{
            width: 50%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #C4D7B2;
        }
        .appoint{
            background-color: #85A389;
            height: 700px;
            width: 500px;
            position: absolute;
            top: 200px;
            left: 700px;
            text-align: center;
        }
        </style>
</head>
<body>
    <ul>
        <li class="list"><h1>MEDICAL APPOINTMENT SCHEDULER</h1></li>
        <li><h2><a href="http://localhost/medicalappointment/index.php">Home</a></h2></li>
        <li><h2><a href="http://localhost/medicalappointment/register.php">Register</a></h2></li>
        <li><h2><a href="http://localhost/medicalappointment/details.php">Deets</a></h2></li>
    </ul>
    <div class="appoint">
        <br><h2>APPOINTMENT FORM</h2><br>
    <form action="" method="POST">
        <label for="name">NAME</label>
        <input type="text" name="name" id="name"   placeholder="enter your name"><br>
        <label for="age">AGE</label>
        <input type="number" name="age" id="age" placeholder="enter your age"><br>
        <label for="reason">REASON FOR TAKING AN APPOINTMENT</label>
        <input type="text" name="reason" id="reason" placeholder="enter your reason"><br>
        <input type="submit" name="submit" id="submit" class="btn"><br>
    </form>
    </div>
</body>
</html>