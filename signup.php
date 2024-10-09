<?php 
    
$showAlert = false;  
$showError = false;  
$exists=false; 
    
if($_SERVER["REQUEST_METHOD"] == "POST") { 
      
    
    include 'dbconn.php';    
    
    $username = $_POST["username"];  
    $password = $_POST["password"];  
    $cpassword = $_POST["cpassword"]; 
            
    
    $sql = "Select * from users where username='$username'"; 
    
    $result = mysqli_query($conn, $sql); 
    
    $num = mysqli_num_rows($result);  
    
    
    if($num == 0) { 
        if(($password == $cpassword) && $exists==false) { 
    
            $hash = password_hash($password,  
                                PASSWORD_DEFAULT); 
                
           
            $sql = "INSERT INTO `users` ( `username`,  
                `password`, `date`) VALUES ('$username',  
                '$hash', current_timestamp())"; 
    
            $result = mysqli_query($conn, $sql); 
    
            if ($result) { 
                $showAlert = true;  
            } 
        }  
        else {  
            $showError = "Passwords do not match";  
        }       
    } 
    
   if($num>0)  
   { 
      $exists="Username not available";  
   }  
    
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

<?php 
    
    if($showAlert) { 
    
        echo ' <div class="alert alert-success  
            alert-dismissible fade show" role="alert"> 
    
            <strong>Success!</strong> Your account is  
            now created and you can login.  
            <button type="button" class="close"
                data-dismiss="alert" aria-label="Close">  
                <span aria-hidden="true">×</span>  
            </button>  
        </div> ';  
    } 
    
    if($showError) { 
    
        echo ' <div class="alert alert-danger  
            alert-dismissible fade show" role="alert">  
        <strong>Error!</strong> '. $showError.'
    
       <button type="button" class="close" 
            data-dismiss="alert aria-label="Close"> 
            <span aria-hidden="true">×</span>  
       </button>  
     </div> ';  
   } 
        
    if($exists) { 
        echo ' <div class="alert alert-danger  
            alert-dismissible fade show" role="alert"> 
    
        <strong>Error!</strong> '. $exists.'
        <button type="button" class="close" 
            data-dismiss="alert" aria-label="Close">  
            <span aria-hidden="true">×</span>  
        </button> 
       </div> ';  
     } 
   
?> 

 <div class="wrapper">
        <header style="color: #fff; font-size: 30px; text-align: center;">Sign Up</header>
    <nav class="nav">
        <div class="nav-logo">
            <img src="https://eiwgew27fhz.exactdn.com/wp-content/uploads/2023/02/logo-white.svg" >
            
        </div>
        <div class="nav-menu" id="navMenu">
           
        </div>
        <div class="nav-button">
            
            <a href="login.php"><button class="btn" id="registerBtn">Login</button></a>
        </div>
        
    </nav>


    <div class="form-box">
        
    <div class="login-container" id="login">
            
        <form action="signup.php" method="POST">
            <div class="input-box">
            <label for="username">Username</label>
                <input type="text" class="input-field" placeholder="Username" id="username" name="username" required>
                <i class="bx bx-user"></i>
            </div>
            <div class="input-box">
            <label for="password">Password</label>
                <input type="password" class="input-field" placeholder="Password" id="password" name="password" required>
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-box">
            <label for="cpassword">Confirm Password</label>
                <input type="password" class="input-field" placeholder="Confirm Password" id="cpassword" name="cpassword" required>
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-box">
                <input type="submit" class="submit" value="SignUp">
            </div>
    </form>
    
            
        <!------------------- registration form -------------------------->
        <!-- <div class="register-container" id="register">
            <div class="top">
                
                <header>Sign Up</header>
            </div>
            <div class="two-forms">
                <div class="input-box">
                    <input type="text" class="input-field" placeholder="Firstname">
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-box">
                    <input type="text" class="input-field" placeholder="Lastname">
                    <i class="bx bx-user"></i>
                </div>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" placeholder="Email">
                <i class="bx bx-envelope"></i>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" placeholder="Password">
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-box">
                <input type="submit" class="submit" value="Register">
            </div>
            <div class="two-col">
                <div class="one">
                    <input type="checkbox" id="register-check">
                    <label for="register-check"> Remember Me</label>
                </div>
                <div class="two">
                    <label><a href="#">Terms & conditions</a></label>
                </div>
            </div>
        </div>
    </div>
</div>    -->


<!-- <script>
   
   function myMenuFunction() {
    var i = document.getElementById("navMenu");

    if(i.className === "nav-menu") {
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

</script> -->

</body>
</html>