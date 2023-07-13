<?php

// Create a new mysqli object
$conn = new mysqli("localhost", "root", "arzelzolina10", "testing");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['login'])) {

  $username = $_GET['username'];
  $password = $_GET['password'];
  $message = $_GET['message'];

  $query = "INSERT INTO forms(username,password,message)VALUES('$username', '$password', '$message')";
  if ($conn->query($query)) {
    echo '<script>alert("Data inserted successfully")</script>';
  } else {
    echo '<script>alert("Something went Wrong")</script>';
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/animations.css" />
  <link rel="stylesheet" href="css/main.css" />
  <link rel="stylesheet" href="css/login.css" />
  <meta property="og:image" content="img.jpg" />
  <!-- Include Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
  <!-- Add the Bootstrap Icons library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/bootstrap-icons.min.css">
  <link rel="stylesheet" href="bootstrap-icons-1.10.5/font/bootstrap-icons.css">
  <title>Portfolio</title>
</head>
<link rel="icon" type="image/png" href="img.jpg" />
<link rel="stylesheet" href="main.css">

<body>
  <div class="nav">
    <nav>
      <ul>
        <li><a href=".profile">Profile</a></li>
        <li><a href="calculator.html">Calculator</a></li>
        <li><a href=".about">About</a></li>
        <li><a href=".contact">Contact</a></li>
      </ul>
    </nav>
  </div>

  <center>
    <div class="profile">
      <h1>My website</h1>
      <img src="arzel.jpg" alt="" width="300px" height="300px">
      <figcaption>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, ea.</figcaption>
      <figcaption>Enim inventore itaque reiciendis, repellendus velit odio. Laboriosam, necessitatibus neque!</figcaption>
      <figcaption>Accusantium corrupti voluptates hic sed? Molestiae aspernatur eos velit totam?</figcaption>
    </div>
    <hr>
  </center>

  <div class="about">
    <h4>About Me</h4>
    <table>
      <tr>
        <th>&nbsp;</th>
        <th>Skills</th>
        <th>Projects</th>
      </tr>
      <tr>
        <th>Mobile Application</th>
        <td><a href="https://flutter.dev/">Flutter 50 %</a> </td>
        <td><a href="https://github.com/sphinxnut/TAMA.git">Classroom Attendance System Using QR Code</a></td>
      </tr>
      <tr>
        <th>Web Applications</th>
        <td> <a href="https://www.php.net/">Php 50%</a></td>
        <td><a href="https://github.com/sphinxnut/CMAS.git">Medical Appointment System</a></td>
      </tr>
      <tr>
        <th>Dekstop Applications</th>
        <td><a href="htttps://www.java.com">java 35 %</a></td>
        <td><a href="https://github.com/sphinxnut/java-commisions.git">Java Activities</a></td>
      </tr>
    </table>
  </div>
  <div class="contact">
    <h4>Contact Me</h4>
    <ul>
      <li>Email me at <span><a href="mailto:Arzeljrz17@gmail.com"><i class="bi bi-envelope-fill"></i></a></span></li>
      <li>Contact me at <span> <a href="tel:09090937257"> <i class="bi bi-telephone-inbound"></i></a></span></li>
      <li>Github: <span><a href="https://github.com/sphinxnut"> <i class="bi bi-github"></i></a></span></li>
      <li>
        <span> <a href=".profile">Back to top <i class="bi bi-person-fill"></i> </a></span>

      </li>
    </ul>

  </div>
  <hr>
<p>
  lore
</p>
</body>

</html>