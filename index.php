<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEDICAL APPOINTMENT SCHEDULER</title>
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
        h1{
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
        img{
            border-radius: 95%;
            float: right;
            margin-top: 80px;
            margin-right: 20px;
        }
        .heading{
            font-size: 3.5rem;
            line-height: 1.5;
            font-weight: 900;
            text-align: center;
            margin-left: 300px;
            margin-top: 30px;
            margin-bottom: 150px;
            position: absolute;
            top: 35px;
        }
        .second{
            background-color: #F7FFE5;
            height: 300px;
            text-align: center;
            font-style: italic;
            color: #17594A;
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
    <div class="first">
        <img src="stethoscope.jpg" alt="medical" height="550px" width="650px">
        <div class="col-lg-6">
            <h1 class="heading"><br><br><br>WELCOME TO <br> MEDICAL APPOINTMENT <br> SCHEDULER</h1>
        </div>
    </div>  
    <div class="second">
        <h1>WebTechArc</h1>
        <p>copyright &copy; 2023</p>
        <p>EMAIL:nehamb2601@gmail.com</p>
        <p>GITHUB:@nehaprakashh01</p>
    </div>
</body>
</html>