<?php 
include "config.php";
  if (isset($_POST['submit'])) {
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO users(firstname, lastname, email, password, gender) VALUES ('$first_name','$last_name','$email','$password','$gender')";
    $result = $conn->query($sql);
    if ($result == TRUE) {
      echo "New record created successfully.";
    } 
    $conn->close(); 
  }
?>

<!doctype html>

<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <h1 class="center"></h1>
    <h5 class="center"></h5>
    <title>Login</title>
</head>

<body>

<h2>Signup Form</h2>

<form action="" method="POST">
  <fieldset>
    <legend>Personal information:</legend>
    First name:<br>
    <input type="text" name="firstname">
    <br>
    Last name:<br>
    <input type="text" name="lastname">
    <br>
    Email:<br>
    <input type="email" name="email">
    <br>
    Password:<br>
    <input type="password" name="password">
    <br>
    Gender:<br>
    <input type="radio" name="gender" value="Male">Male
    <input type="radio" name="gender" value="Female">Female
    <br><br>

    <button type="submit" class="btn-primary" name="submit">Submit</button>
  </fieldset>
</form>
</body>
</html>