<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Login</title>
  </head>
  <body>
    <div class="container">
      <div class="box form-box">

      <?php 
      include("php/config.php");
      if(isset($_POST['submit'])){
        $phone = mysqli_real_escape_string($con, $_POST['phone']);
        $password = mysqli_real_escape_string($con, $_POST['password']);

        $result = mysqli_query($con, "SELECT * FROM users WHERE Phone='$phone' AND Password='$password'") or die("Select Error");
        $row = mysqli_fetch_assoc($result);

        if(is_array($row) && !empty($row)){
          $_SESSION['valid'] = $row['Phone'];
          $_SESSION['username'] = $row['Username'];
          $_SESSION['id'] = $row['Id'];
        }else{
          echo "<div class='message'>
          <p>Wrong Username or Password</p>
          </div> <br>";
          echo "<a href='index.php'><button class='btn'>Go Back</button></a>";
        }
        if(isset($_SESSION['valid'])){
          header("Location: home.php");
        }
        }else
        {
      
      
      ?>

        <header>Login</header>
        <form action="" method="post">
          <div class="field input">
            <label for="phone">Phone Number</label>
            <input type="text" name="phone" id="phone" autocomplete="off"  required />
          </div>
          <div class="field input">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" autocomplete="off"  required />
          </div>
          <div class="field">
            <input type="submit" name="submit" class="btn" value="Login" required />
          </div>
          <div class="links">
            Don't have account? <a href="register.php">Sign Up Now</a>
          </div>
        </form>
      </div>
      <?php } ?>
    </div>
  </body>
</html>
