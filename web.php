<?php

// Create a new mysqli object
$conn = new mysqli("localhost", "root", "arzelzolina10", "testing");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Fetch the data from the database
if (isset($_GET['btn'])) {
  // Modify the query according to your database schema and requirements
  $query = "SELECT username, password, message FROM forms LIMIT 1";

  // Execute the query
  $result = $conn->query($query);

  // Check if the query was successful
  if ($result && $result->num_rows > 0) {
    // Fetch the row as an associative array
    $data = $result->fetch_assoc();

    // Fill the form fields with the retrieved data
    $username = $data['username'];
    $password = $data['password'];
    $message = $data['message'];
  } else {
    // Handle query error
    echo "Error executing query: " . $conn->error;
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="main.css">

</head>

<body>
  <section id="profile">
    <br />
    <nav aria-label="primary-navigation">
      <ul>
        <li> <a href="#profile">Home</a></li>
        <li><a href="#about">About me</a></li>
        <li><a href="#contact">Contact Me</a></li>
        <li> <a href="#message">Message Me</a>
        </li>
      </ul>
    </nav>
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
  </section>
  <section id="about">
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
  </section>
  <section id="tbl">
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
  </section>

  <section id="contact">
    <h4>Contact Me</h4>
    <ul>
      <li>Email me at <a href="mailto:Arzeljrz17@gmail.com">gmail</a></li>
      <li>Contact me at <a href="tel:09090937257">tel No.</a></li>
      <li>
        <a href="#profile">Back to top</a>
      </li>
    </ul>
  </section>
  <script>
    function fillFormFields() {
      // Fill the form fields with the retrieved data
      document.getElementsByName('username')[0].value = "<?php echo $username; ?>";
      document.getElementsByName('password')[0].value = "<?php echo $password; ?>";
      document.getElementsByName('message')[0].value = "<?php echo $message; ?>";
    }
  </script>
  <center>
    <div class="container" id="message">
      <table border="0" style="margin: 0; padding: 0; width: 60%;">
        <tr>
          <td>
            <p class="header-text">Welcome back</p>
          </td>
        </tr>
        <div class="form-body">
          <tr>
            <td>
              <p class="sub-text">Message me</p>
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
            <td class="lael-td">
              <textarea name="message" id="" cols="30" rows="10"></textarea>
            </td>
          </tr>
          <tr>
            <td>
              <input type="submit" value="Login" class="login-btn btn-primary btn">
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