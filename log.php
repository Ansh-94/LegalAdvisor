<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
include("./includes/db.php");

// Define placeholders for messages
$error = "";       // For login errors
$regMessage = "";  // For registration messages

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  /*
    ----------------------------------
    PART 1: HANDLE LOGIN
    ----------------------------------
  */
  if (isset($_POST['btnLogin'])) {
    // The user clicked on the Login button
    $username = $_POST['username'];
    $password = $_POST['password'];
    $UserType = $_POST["UserType"];

    // Simple (insecure) approach without password hashing
    $sql = "SELECT * FROM usermaster WHERE UserName = ? AND Password = ? AND UserType = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $password, $UserType);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
      $user = $result->fetch_assoc();
      // Check password (insecure plain text)
      if ($password == $user['Password']) {
        $_SESSION['user'] = $user['UserName'];
        $_SESSION['UserType'] = $user['UserType'];
        $_SESSION['UserMasterID'] = $user['UserMasterID'];
        // $_SESSION['LoginActivity'] = time();
        header("Location: index.php");
        exit;
      } else {
        $error = "Invalid password. Please try again.";
      }
    } else {
      $error = "User not Found. Please Register first.";
    }

    /*
      ---------------------------------------------
      Example if you WANT to use password hashing:
      ---------------------------------------------
      $sql = "SELECT * FROM usermaster WHERE UserName = ?";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param("s", $username);
      $stmt->execute();
      $result = $stmt->get_result();

      if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['Password'])) {
          $_SESSION['user'] = $user['UserName'];
          header("Location: index.php");
          exit;
        } else {
          $error = "Invalid password. Please try again.";
        }
      } else {
        $error = "User not Found. Please Register first.";
      }
    */
  }

  /*
    ----------------------------------
    PART 2: HANDLE REGISTRATION
    ----------------------------------
  */
  if (isset($_POST['btnRegister'])) {
    // The user clicked on the Register button
    $FullName = $_POST["FullName"];
    $Email = $_POST["Email"];
    $UserType = $_POST["UserType"];
    $UserName = $_POST["UserName"];
    $Password = $_POST["Password"];
    $CPassword = $_POST["CPassword"];

    // Check if username or email already exists
    $checkSql = "SELECT * FROM usermaster WHERE UserName = ? OR Email = ?";
    $checkStmt = $conn->prepare($checkSql);
    $checkStmt->bind_param("ss", $UserName, $Email);
    $checkStmt->execute();
    $checkResult = $checkStmt->get_result();

    if ($checkResult->num_rows > 0) {
      // Means user or email already exists
      $regMessage = "<p style='color:red;'>Username or Email already exists.</p>";
    } else {
      // If not existing, continue
      if ($Password === $CPassword) {
        // Insecure approach (plain text)
        $sql = "INSERT INTO usermaster (UserName, Password, Email, UserType) VALUES (?, ?, ? ,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $UserName, $Password, $Email, $UserType);

        if ($stmt->execute()) {
          // $regMessage = "<p style='color:green;'>Registered Successfully!</p>";
          echo "<script>alert('Registration Successful!');</script>";
        } else {
          $regMessage = "<p style='color:red;'>Registration Failed.</p>";
        }

        /*
          ---------------------------------------------
          Example if you WANT to use password hashing:
          ---------------------------------------------
          $hashedPassword = password_hash($Password, PASSWORD_BCRYPT);
          $sql = "INSERT INTO usermaster (UserName, Password, Email) VALUES (?, ?, ?)";
          $stmt = $conn->prepare($sql);
          $stmt->bind_param("sss", $UserName, $hashedPassword, $Email);

          if ($stmt->execute()) {
            $regMessage = "<p style='color:green;'>Registered Successfully!</p>";
          } else {
            $regMessage = "<p style='color:red;'>Registration Failed.</p>";
          }
        */

      } else {
        $regMessage = "<p style='color:red;'>Passwords do not match.</p>";
      }
    }
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login or Register</title>
  <!-- Link to custom CSS -->
  <link rel="stylesheet" href="css/log.css" />
  <!-- FONT AWESOME -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <!-- GOOGLE FONTS -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap"
    rel="stylesheet" />

  <style>
    .drop {
      background-color: #e0e0e0;
      border: none;
      font-size: 16px;
      font-weight: 600;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">

        <!-- ======================= Signin Form =========================-->
        <form action="log.php" method="post" class="sign-in-form">
          <h2 class="title">Login</h2>
          <?php if ($error != ""): ?>
            <p style="color:red; text-align:center; margin-bottom:10px;">
              <?php echo $error; ?>
            </p>
          <?php endif; ?>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <!-- Display login errors (if any) -->
            <input type="text" name="username" placeholder="User name" required />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Password" id="id_password" required />
            <i class="far fa-eye" id="togglePassword" style="cursor: pointer;"></i>
          </div>
          <div class="input-field">
            <i class="fas fa-user"></i>

            <select name="UserType" class=" drop" value="UserType" placeholder="User Type" required>
              <option>Select User Type</option>
              <option values="User">User</option>
              <option value="Lawyer">Lawyer</option>
            </select>

          </div>

          <input type="submit" value="Login" name="btnLogin" class="btn solid" />

          <div class="social-media">
            <a class="icon-mode" onclick="toggleTheme('dark');"><i class="fas fa-moon"></i></a>
            <a class="icon-mode" onclick="toggleTheme('light');"><i class="fas fa-sun"></i></a>
          </div>
          <p class="text-mode">Change theme</p>
        </form>
        <!-- ======================= Signin Form End =========================-->

        <!-- ======================= Registration Form =========================-->
        <form action="log.php" method="post" class="sign-up-form">
          <h2 class="title">Register</h2>
          <!-- Display registration messages (if any) -->
          <?php if ($regMessage != ""): ?>
            <div style="text-align:center; margin-bottom:10px;">
              <?php echo $regMessage; ?>
            </div>
          <?php endif; ?>
          <!-- User Information -->
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="FullName" placeholder="Full name" required />
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" name="Email" placeholder="Email" required />
          </div>
          <!-- User Type -->
          <div class="input-field">
            <i class="fas fa-user"></i>
            <select name="UserType" value="UserType" class="drop" Placeholder="UserType" required">
              <option>Select User Type</option>
              <option values="User">User</option>
              <option value="Lawyer">Lawyer</option>
            </select>
          </div>
          <!-- Account Credentials -->
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="UserName" placeholder="User name" required />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="Password" placeholder="Password" id="id_reg" required />
            <i class="far fa-eye" id="toggleReg" style="cursor: pointer;"></i>
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <!-- Confirm password name matches what we use in PHP ($CPassword = $_POST["re_pass"]) -->
            <input type="password" name="CPassword" placeholder="Confirm Password" id="id_reg2" required />
            <i class="far fa-eye" id="toggleReg2" style="cursor: pointer;"></i>
          </div>
          <label class="check">
            <input type="checkbox" checked="checked">
            <span class="checkmark">I accept the <a href="terms.html">terms and services</a></span>
          </label>
          <input type="submit" value="Register" name="btnRegister" class="btn solid" />
        </form>
        <!-- ======================= Registration Form End =========================-->
      </div>
    </div>
    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>You don't have an account?</h3>
          <p>Create your account right now to follow people and like publications</p>
          <button class="btn transparent" id="sign-up-btn">Register</button>
        </div>
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>Already have an account?</h3>
          <p>Login to see your notifications and post your favorite photos</p>
          <button class="btn transparent" id="sign-in-btn">Sign in</button>
        </div>
        <img src="img/register.svg" class="image" alt="">
      </div>
    </div>
  </div>

  <script>
    // Toggle between sign-in and sign-up forms
    const sign_in_btn = document.querySelector("#sign-in-btn");
    const sign_up_btn = document.querySelector("#sign-up-btn");
    const container = document.querySelector(".container");

    sign_up_btn.addEventListener("click", () => {
      container.classList.add("sign-up-mode");
    });

    sign_in_btn.addEventListener("click", () => {
      container.classList.remove("sign-up-mode");
    });

    // Theme toggling
    const htmlEl = document.getElementsByTagName("html")[0];
    const currentTheme = localStorage.getItem("theme") ? localStorage.getItem("theme") : null;
    if (currentTheme) {
      htmlEl.dataset.theme = currentTheme;
    }
    const toggleTheme = (theme) => {
      htmlEl.dataset.theme = theme;
      localStorage.setItem("theme", theme);
    };

    // Show/hide password for Login
    const togglePassword = document.querySelector("#togglePassword");
    const password = document.querySelector("#id_password");
    togglePassword.addEventListener("click", function () {
      const type = password.getAttribute("type") === "password" ? "text" : "password";
      password.setAttribute("type", type);
      this.classList.toggle("fa-eye-slash");
    });

    // Show/hide password for Registration
    const toggleReg = document.querySelector("#toggleReg");
    const pass = document.querySelector("#id_reg");
    toggleReg.addEventListener("click", function () {
      const type = pass.getAttribute("type") === "password" ? "text" : "password";
      pass.setAttribute("type", type);
      this.classList.toggle("fa-eye-slash");
    });

    const toggleReg2 = document.querySelector("#toggleReg2");
    const pass2 = document.querySelector("#id_reg2");
    toggleReg2.addEventListener("click", function () {
      const type = pass2.getAttribute("type") === "password" ? "text" : "password";
      pass2.setAttribute("type", type);
      this.classList.toggle("fa-eye-slash");
    });
  </script>
</body>

</html>