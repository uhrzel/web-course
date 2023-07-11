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
  <title>Portfolio</title>
</head>
<link rel="icon" type="image/png" href="img.jpg" />
<link rel="stylesheet" href="main.css">

<body>

  <body>
    <div class="container">
      <div class="nav">
        <nav>
          <ul>
            <li><a href="#profile">Profile</a></li>
            <li><a href="calculator.html">Calculator</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </nav>
      </div>
    </div>
    <div id="profile">

      <h1>Welcome to my Website</h1>
      <h3>I am Arzel John R. Zolina</h3>
      <figure>
        <img src="arzel.jpg" alt="" width="300px" height="300px" />
        <figcaption>
          My profile <br />
          I am a dedicated and enthusiastic Web developer from Polomolok, South
          Cotabato, <br />
          committed to creating captivating and dynamic websites that leave a
          lasting impression. <br />
          Let's collaborate and bring your online presence to new heights!
        </figcaption>
      </figure>
    </div>
    <hr>
    <div id="about">
      <h4>About Me</h4>
      <ul>
        <li>Address: Polomolok South Cotabato</li>
        <li>Age: 21 years old</li>
        <li>Degree: Bachelor Science Information Technology</li>
        <li>Niche: Web developer</li>
        <li>
          <a href="#profile">Back to top</a>
        </li>
      </ul>
      <table>
        <caption>
          My References
        </caption>
        <tr>
          <th>&nbsp</th>
          <th>Skills</th>
          <th>Projects</th>
        </tr>
        <tr>
          <th>Mobile App</th>
          <td>Flutter 55%</td>
          <td>Attendance System</td>
        </tr>
        <tr>
          <th>Web Systems</th>
          <td>Php 70%</td>
          <td>Medical Appointment System</td>
        </tr>
        <tr>
          <th>Dekstop Application</th>
          <td>Java 30%</td>
          <td>Java Activities</td>
        </tr>
      </table>
    </div>
    <hr>

    <div id="contact">
      <h4>Contact Me</h4>
      <ul>
        <li>Email me at <a href="mailto:Arzeljrz17@gmail.com">gmail</a></li>
        <li>Contact me at <a href="tel:09090937257">tel No.</a></li>
        <li>
          <a href="#profile">Back to top</a>
        </li>
      </ul>
    </div>
    <hr>
    <center>
      <div class="container" id="message">
        <table border="0" style="margin: 0; padding: 0; width: 60%;">

          <div class="form-body">
            <tr>
              <td>
                <p class="sub-text">For more inquires kindly Message me</p>
              </td>
            </tr>
            <tr>
              <form action="" method="get">
                <td class="label-td">
                  <label for="username" class="form-label">Username: </label>
                </td>
            <tr>
              <td class="label-td">
                <input type="text" name="username" class="input-text" placeholder="username">
              </td>
            </tr>
            <td class="label-td">
              <label for="password" class="form-label">Password: </label>
            </td>
            <tr>
              <td class="label-td">
                <input type="text" name="password" class="input-text" placeholder="password">
              </td>
            </tr>
            <td class="label-td">
              <label for="message" class="form-label">Your Message</label>
            </td>
            <tr>
              <td class="label-td">
                <textarea name="message" id="" cols="30" rows="10"></textarea>
              </td>
            </tr>
            <tr>
              <td>
                <input type="submit" name="login" value="Login" class="login-btn btn-primary btn">
              </td>
            </tr>
            <tr>
              <td> <button name="btn" onclick="fillFormFields()">btn</button></td>
            </tr>
            </form>
            </tr>
          </div>
        </table>
      </div>
    </center>
    <hr>
  </body>

</html>