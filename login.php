<?php 
require_once "config.php";
session_start();

if(isset($_POST["_submit"])) {
  try {
    $username = sanitize($_POST['username']);
    $userpass = sanitize($_POST['userpassword']);
    $pw_hashed = sha1($userpass);
    $sqlstr = "SELECT id, username, password from user WHERE username = '$username'";
    $result = $conn->query($sqlstr);

    if ($result && $result->num_rows > 0) {
      $row = result -> fetch_assoc();
      // verify pass
      if (password_verify($pw_hashed, $row["password"])) {
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['username'] = $row['username'];

        header("Location: admin/index.php");
        exit();
      } else {
        echo 'Invalid password';
      }
    } else {
      echo 'Invalid username';
    }

  }catch(Exception $e){
    echo $e->getMessage();
}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./pages/css/style.css" />
    <title>Login and Registration</title>
  </head>
  <body>
    <div class="wrapper">
      <nav class="nav">
        <div class="nav-logo">
          <img src="./assets/images/logo.png" alt="" />
        </div>
        <div class="nav-menu" id="navMenu">
          <ul>
            <li><a href="#" class="link active">Home</a></li>
            <li><a href="#" class="link">Blog</a></li>
            <li><a href="#" class="link">Services</a></li>
            <li><a href="#" class="link">About</a></li>
          </ul>
        </div>
        <div class="nav-button">
          <button class="btn white-btn" id="loginBtn" onclick="login()">
            Sign In
          </button>
          <button class="btn" id="registerBtn" onclick="register()">
            Sign Up
          </button>
        </div>
        <div class="nav-menu-btn">
          <i class="bx bx-menu" onclick="myMenuFunction()"></i>
        </div>
      </nav>
      <!------------------------------- From box ------------------------------->
      <form action="">
      <div class="form-box">
        <!------------------ login form ------------------>
        <div class="login-container" id="login">
          <div class="top">
            <span
              >Don't have an account?
              <a href="#" onclick="register()">Sign Up</a></span
            >
            <header>Login</header>
          </div>
          <div class="input-box">
            <input
              type="text"
              class="input-field"
              placeholder="Username or Email"
            />
            <i class="bx bx-user"></i>
          </div>
          <div class="input-box">
            <input type="pasword" class="input-field" placeholder="Password" />
            <i class="bx bx-lock-alt"></i>
          </div>
          <div class="input-box">
            <input name="_submit" type="submit" class="submit" value="Sign In" />
          </div>
          <div class="two-col">
            <div class="one">
              <input type="checkbox" id="register-check" />
              <label for="register-check">Remember Me</label>
            </div>
            <div class="two">
              <label><a href="#">Forgot password?</a></label>
            </div>
          </div>
        </div>
      </form>
      <!-- registion from -->
      <form name="registration_form" action="post">
        <div class="register-container" id="register">
          <div class="top">
            <span
              >Have an account? <a href="#" onclick="login()">Login</a></span
            >
            <header>Sign Up</header>
          </div>
          <div class="two-forms">
            <div class="input-box">
              <input type="text" class="input-field" placeholder="Firstname" />
              <i class="bx bx-user"></i>
            </div>
            <div class="input-box">
              <input type="text" class="input-field" placeholder="Lastname" />
              <i class="bx bx-user"></i>
            </div>
          </div>
          <div class="input-box">
            <input type="text" class="input-field" placeholder="Email" />
            <i class="bx bx-envelope"></i>
          </div>
          <div class="input-box">
            <input type="pasword" class="input-field" placeholder="Password" />
            <i class="bx bx-lock-alt"></i>
          </div>
          <div class="input-box">
            <input type="submit" class="submit" value="Register" />
          </div>
          <div class="two-col">
            <div class="one">
              <input type="checkbox" id="register-check" />
              <label for="register-check">Remember Me</label>
            </div>
            <div class="two">
              <label><a href="#">Terms and Conditions</a></label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form> 
    <script>
      function myMenuFunction() {
        var i = document.getElementById("navMenu");

        if (i.className === "nav-menu") {
          i.className += " responsive";
        } else {
          i.className = "nav-menu";
        }
      }
    </script>

    <script>
      var a = document.getElementById("loginBtn");
      var b = document.getElementById("registerBtn");
      var c = document.getElementById("login");
      var d = document.getElementById("register");

      function login() {
        c.style.left = "4px";
        d.style.right = "-520px";
        a.className += " white-btn";
        b.className = "btn";
        c.style.opacity = "1";
        d.style.opacity = "0";
      }

      function register() {
        c.style.left = "-510px";
        d.style.right = "5px";
        a.className = "btn";
        b.className += " white-btn";
        c.style.opacity = "0";
        d.style.opacity = "1";
      }
    </script>
  </body>
</html>