<?php

$login = false;
$showError = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'dbconn.php';

    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE username=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $login = true;
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            header("location: index.php");
            exit();
        } else {
            $showError = "Invalid Credentials";
        }
    } else {
        $showError = "Invalid Credentials";
    }
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styles.css">
    <title>Ludiflex | Login & Registration</title>
</head>

<body>
    <?php if ($login): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> You are logged in.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
    <?php endif; ?>

    <?php if ($showError): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> <?= $showError ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
    <?php endif; ?>

    <div class="wrapper">
        <header style="color: #fff; font-size: 30px; text-align: center;">Login</header>
        <nav class="nav">
            <div class="nav-logo">
                <img src="https://eiwgew27fhz.exactdn.com/wp-content/uploads/2023/02/logo-white.svg">
            </div>
            <div class="nav-menu" id="navMenu"></div>
            <div class="nav-button">
                <a href="signup.php"><button class="btn" id="registerBtn">Sign Up</button></a>
            </div>
            <div class="nav-menu-btn">
                <i class="bx bx-menu" onclick="myMenuFunction()"></i>
            </div>
        </nav>
        <div class="container-fluid">
        <div class="form-box">
            <div class="login-container" id="login">
                <!-- <header style="color: #fff; font-size: 30px; text-align: center;">Login</header> -->
                <form action="login.php" method="POST">
                    <div class="input-box">
                        <label for="username">Username</label>
                        <input type="text" class="input-field" placeholder="Username" id="username" name="username"
                            required>
                        <i class="bx bx-user"></i>
                    </div>
                    <div class="input-box">
                        <label for="password">Password</label>
                        <input type="password" class="input-field" placeholder="Password" id="password" name="password"
                            required>
                        <i class="bx bx-lock-alt"></i>
                    </div>
                    <div class="input-box">
                        <input type="submit" class="submit" value="Sign In">
                    </div>
                    <div class="bottom">
                        <span>Don't have an account? <a href="signup.php">Sign Up</a></span>
                    </div>
                </form>
            </div>
        </div>
        </div>

    </div>
    </div>

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
        var x = document.getElementById("login");
        var y = document.getElementById("register");

        function login() {
            x.style.left = "4px";
            y.style.right = "-520px";
            a.className += " white-btn";
            b.className = "btn";
            x.style.opacity = 1;
            y.style.opacity = 0;
        }

        function register() {
            x.style.left = "-510px";
            y.style.right = "5px";
            a.className = "btn";
            b.className += " white-btn";
            x.style.opacity = 0;
            y.style.opacity = 1;
        }
    </script>
</body>

</html>