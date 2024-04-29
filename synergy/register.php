<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Register</title>
  </head>
  <body>
    <div class="container">
      <div class="box form-box">

      <?php 
      include("php/config.php");
      if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];

        //vervfying
        $verify_query = mysqli_query($con, "SELECT Phone FROM users WHERE Phone='$phone'");
        if(mysqli_num_rows($verify_query)!=0){
          echo "<div class='message'>
          <p>This Phone number is used, try another one</p>
          </div> <br>";
          echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button></a>";
        }
        else{
          mysqli_query($con, "INSERT INTO users(Username, Phone, Password) VALUES('$username', '$phone', '$password')") or die("Error Occurred");

          echo "<div class='message'>
          <p>Registered Successfully</p>
          </div> <br>";
          echo "<a href='index.php'><button class='btn'>Login now</button></a>";
        }
       
        }
        else{
      
      ?>


        <header>Sign Up</header>
        <form action="" method="post">
          <div class="field input">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" autocomplete="off"  required />
          </div>
          <div class="field input">
            <label for="phone">Phone</label>
            <input type="number" name="phone" id="phone" autocomplete="off" required />
          </div>
          <div class="field input">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" autocomplete="off"  required />
          </div>
          <div class="field">
            <input
              type="submit"
              name="submit"
              class="btn"
              value="Register"
              required
            />
          </div>
          <div class="links">
            Already a member? <a href="index.php">Sign in</a>
          </div>
        </form>
      </div>
    <?php } ?>
    </div>
  </body>
</html>
