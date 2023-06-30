<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DETAILS</title>
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
        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
        }

        th, td {
            text-align: center;
            padding: 16px;
        }

        th:first-child, td:first-child {
            text-align: left;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:nth-child(odd) {
            background-color: #A0C49D;
        }
        h2{
            color: #40513B;
            text-align: center;
            font-style: italic;
        }
        img{
            position: absolute;
            top: 150px;
            left: 700px;
        }
        .table{
            position: absolute;
            top: 700px;
            width: 100%;
        }
        .appoint{
            position: absolute;
            top: 1060px;
            left: 820px;
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
    <img src="medsym.jpg" alt="symbol image" height="500px" width="600px">
    <div class="table">
    <h2>DETAILS REGARDING AVAILABILITY OF DOCTOR'S</h2>
    <table>
        <tr>
          <th style="width:50%">DOCTOR'S</th>
          <th>AVAILABLE</th>
          <th>NOT AVAILABLE</th>
          <th>CONTACTS</th>
        </tr>
        <tr>
          <td>Dr. NEHA</td>
          <td style="font-size: 20px;">&#9745;</td>
          <td></td>
          <td>9876543210</td>
        </tr>
        <tr>
          <td>Dr. RAKESH</td>
          <td style="font-size: 20px;">&#9745;</td>
          <td></td>
          <td>7894561230</td>
        </tr>
        <tr>
          <td>Dr. NANDITHA</td>
          <td><i class="fa fa-check"></i></td>
          <td style="font-size: 20px;">&#9745;</td>
          <td>8967452310</td>
        </tr>
        <tr>
            <td>Dr. NEARA</td>
            <td><i class="fa fa-check"></i></td>
            <td style="font-size: 20px;">&#9745;</td>
            <td>2601200256</td>
        </tr>
      </table>
    </div>
    <div class="appoint">
    <h3><a href="http://localhost/medicalappointment/appoint.php">BOOK AN APPOINTMENT NOW</a></h3>
</div>
</body>
</html>