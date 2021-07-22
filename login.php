<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>PASAKAY LOGIN</title>
    <link rel="stylesheet" href="s.css">
    
</head>
<body>
<?php
    require('database.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT Username,Password FROM `admin` WHERE Username='$username'
                     AND Password='$password'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location:dashboard.php");
        } else {
            echo "<div class='form'>
                  <h3>You have input incorrect Username/Password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>




    <form class="form" method="post" name="login">
    <h1 class="login-title"><b style="color: white">PASAKAY</b></h1>
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true" required />
        <input type="password" class="login-input" name="password" placeholder="Password"/ required>
        <input type="submit" value="Login" name="submit" class="login-button"/><br> <br>
        <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
        <p class="link"><a style="color: white" href="index.php">Back to Homepage</a></p>
  </form>
<?php
    }
?>
<div style="color: white" id="footer">
        <p align="center" style="background-color: brown">&copy; PASAKAY
        <?php
            getdate();
            $mydate=getdate(date("U"));
            echo "$mydate[month] $mydate[mday], $mydate[year]";
            ?>
            </p>
    </div
</body>
</html>
