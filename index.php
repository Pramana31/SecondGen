<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SecondGen</title>
    <link rel="icon" href="logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="navbar">
            <div class="nav-logo border">
                <div class="logo"></div>
            </div>


            <div class="navbar-home border">
                <a href="index.php">Home</a>
            </div>

            
            <div class="navbar-about border">
                <a href="#about">About</a>
            </div>

            <div class="navbar-about border">
                <a href="#contact">Contact us</a>
            </div>

            <!--search section starts-->

            <div class="nav-search">
                <select class="search-select">
                    <option>All</option>
                    <option>Woman</option>
                    <option>Man</option>
                    <option>Kid</option>
                </select>
                <input placeholder="Search..." class="search-input" onkeyup="searchFunction()">
                <div class="search-icon">
                  <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </div>


            <!--deliver section starts-->

            <div class="nav-address border">
                <div class="address-icon">
                    <a href="address.php"><i class="fa-solid fa-location-dot"></i></a>
                </div>
            </div>

            <!--signin section starts-->

            <div class="nav-signin">
                <div class="btnLogin-popup"><a href="#hero"><i class="fa-solid fa-user"></i></a></div>
            </div>

            <!--cart section starts-->

            <div class="nav-cart">
                <i class="fa-solid fa-cart-shopping"></i>
                <span>0</span>
            </div>

            <div class="nav-seller">
                <a href="seller.php"><button>Be a Seller</button></a>
            </div>


        </div>
    </header>

      <div class="slideshow-container">
        <div class="slide-fade">
          <img src="clothes.png" style="width:100%">
        </div>
        <div class="slide-fade">
          <img src="clothes1.png" style="width:100%">
        </div>
        <div class="slide-fade">
          <img src="clothes2.png" style="width:100%">
        </div>
        <div class="slide-fade">
          <img src="clothes3.png" style="width:100%">
        </div>
        <div class="slide-fade">
          <img src="clothes4.png" style="width:100%">
        </div>
      </div>


    <script src="front-script.js"></script>

    <!--login section-->

<center>   
  <div class="hero-section" id="hero">
    <div class="wrapper">
    <span class="icon-close">
      <ion-icon name="close"></ion-icon>
    </span>
    <div class="form-box login">
      <h2>Login</h2>
      <?php
                if(isset($_POST['login']))
                {
                    $username=$_POST['usname'];
                    $password=$_POST['pass'];
                    $user="root";
                    $pswd="";
                    $dbms="secondgen";
                    $connect= new mysqli("localhost",$user,$pswd,$dbms);
                    if(!$connect)
                        die("Not connected");
                    else
                    {
                        $sql = "INSERT INTO `LOGIN` VALUES('$username','$password');";
                        if($connect->query($sql)==TRUE)
                        {
                            echo("Log in successful!!");
                        }
                    }
                }
      ?>
<?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
            $username = $_POST['usname'] ?? '';
            $password = $_POST['pass'] ?? '';
            $name = preg_replace('/[0-9]/', '', $username);
            $name = ucfirst(strtolower($name));
            if(!empty($username))
            {
                if(!empty($password))
                {
                    $user="root";
                    $pswd="";
                    $dbms="secondgen";
                    $connect= new mysqli("localhost",$user,$pswd,$dbms);
                    if(!$connect)
                        die("Not connected");
                    else{
                        $sql="SELECT `USER` FROM `REGISTER` WHERE `USER` = '$username' and `PSWD` = '$password';";
                        $sql1="SELECT * FROM `REGISTER`";
                        $result=$connect->query($sql);
                        if($result == TRUE){
                            if($result->num_rows > 0){
                                $_SESSION['USER']=$name;
                                header("location:index1.php");
                                exit();
                            }
                            
                        }
                    }
                }
            }
        }
?>

      <form method="POST">
        <div class="input-box">
          <span class="icon"><ion-icon name="person"></ion-icon></span>
          <input type="text" name="usname" required>
          <label>Username</label>
        </div>
        <div class="input-box">
          <span class="icon" id="login-eyeicon"><ion-icon name="eye-off"></ion-icon></span>
            <input type="password" name="pass" required id="login-password">
          <label>Password</label>
        </div>
        <div class="remember-forgot">
          <label><input type="checkbox">Remember me</label>
          <a href="#">Forgot password?</a>
        </div>
        <button type="submit" class="btn" name="login">Login</button>
        <div class="register" id="register">
          <p>Don't have an account?
          <a href="#register"class="register-link">Register</a></p>
        </div>
      </form>
    </div>

    <div class="form-box register">
      <h2>Registration</h2>

<?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
            $username = $_POST['usname'] ?? '';
            $password = $_POST['pass'] ?? '';
            $email = $_POST['email'] ?? '';
            $name = preg_replace('/[0-9]/', '', $username);
            $name = ucfirst(strtolower($name));
            if(!empty($username))
            {
                if(!empty($password))
                {
                    $user="root";
                    $pswd="";
                    $dbms="secondgen";
                    $connect= new mysqli("localhost",$user,$pswd,$dbms);
                    if(!$connect)
                        die("Not connected");
                    else{
                        $sql1="SELECT `USER` FROM `REGISTER` WHERE `USER` = '$username' and `PSWD` = '$password';";
                        $result1=$connect->query($sql);
                        if($result1 == TRUE){
                            if($result1->num_rows > 0){
                                $_SESSION['USER']=$name;
                                header("location:index1.php");
                                exit();
                            }
                            
                        }
                    }
                }
            }
        }
?>

      <form method="POST" action="register.php">
        <div class="input-box">
          <span class="icon"><ion-icon name="person"></ion-icon></span>
          <input type="text" name="usname" required>
          <label>Username</label>
        </div>
        <div class="input-box">
          <span class="icon"><ion-icon name="mail"></ion-icon></span>
          <input type="email" name="email" required>
          <label>Email</label>
        </div>
        <div class="input-box">
          <span class="icon" id="register-eyeicon"><ion-icon name="eye-off"></ion-icon></span>
              <input type="password" name="pass" required id="register-password">
          <label>Password</label>
        </div>
        <div class="remember-forgot">
          <label><input type="checkbox">I agree to the terms & conditions</label>
        </div>
        <button type="submit"class="btn" name="reg" >Register</button>
        <div class="register">
          <p>Already have an account?
          <a href="#register"class="login-link">Login</a></p>
        </div>
      </form>
    </div>

  </div>
</div> 
</center>
  <script src="script.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!--shop section starts-->

    <div class="shop-section">
        <div class="box" >
            <div class="box-content">
                <h2>Women's Wear</h2>
                <div class="box-img" style="background-image: url('women_wear.png');"></div>
                <a href="product.html">Shop now</a>
            </div>
        </div>
        <div class="box">
            <div class="box-content">
                <h2>Men's Wear</h2>
                <div class="box-img" style="background-image: url('men_wear.png');">
                </div>
                <a href="men.php">Shop now</a>
            </div>
        </div>
        <div class="box">
            <div class="box-content">
                <h2>Kid's Wear</h2>
                <div class="box-img" style="background-image: url('kidwear.png');">
                </div>
                <a href="kid.php">Shop now</a>
            </div>
        </div>
    </div>

  <script src="front-script.js"></script>


    <!--about us section starts-->
      <div class="about" id="about">
          <h2 class="heading">About Us</h2>
          
          <div class="box-container">
          <br><h3>SecondGen - “Second Chances for Great Clothes” </h3><br>
          <p>A modern, eco-conscious e-commerce platform where users can buy and sell high-quality second-hand garments.</p> <br> 
          <p>India generates a significant amount of textile waste, with about 7,793 kilotonnes accumulated annually.</p>
          <p>This waste, which is 8.5% of the global share, is a mix of pre-consumer, post-consumer, and imported textile waste.</p> 
          <p>While a portion is reused or recycled, a substantial amount ends up in landfills or is downcycled.</p><br>
          <p>This is where SecondGen wants to make a change.</p>
          <p>The clothes received from all our sellers from all over India is segregated in our factories.</p>
          <p>The best quality garments received are divided into two parts- 80% for selling on our website and 20% is donated.</p> 
          <p>The clothes that are not in such great condition are recycled by employees to produce bags,blankets and new garments.</p>   
          <p>SecondGen employes 100s of women and men specially those how had been working with 'Raddis' to help them get a monthly salary.</p>
          <p>For now we have 10 factories spread across the top metropolitan cities of India.</p><br>
          <p>Pramana and Adrija,the owners of SecondGen are two amazing woman in there 20s,</p> <p>trying their best to the make the planet a better place to live in.</p>
          <p>Their goal is to make the thrift store concept popular in India like other parts of the world and reduce landwaste.</p>

          </div>
        </div>
      <!--about us section ends-->

      <!--Contact section starts-->

      <div class="contact-section" id="contact">
          <div class="contact-content">
              <center><h2>Contact Us</h2>
              <p><i class="fa-solid fa-phone"></i>&nbsp;&nbsp; 123-8873879</p>
              <p><i class="fa-regular fa-envelope"></i>&nbsp;&nbsp; secondgen@gmail.com</p>
              <p>Follow us on</p></center><br>
              <div class="social-plat">
                <a href="#"><i class='bx bxl-google'></i></a>&nbsp;&nbsp;&nbsp;&nbsp;  
                <a href="https://www.facebook.com/profile.php?id=61578054392863"><i class='bx bxl-facebook'></i></a>&nbsp;&nbsp;&nbsp;&nbsp;  
                <a href="https://github.com/Pramana31/SecondGen"><i class='bx bxl-github'></i></a>&nbsp;&nbsp;&nbsp;&nbsp;  
                <a href="#"><i class='bx bxl-linkedin'></i></a>&nbsp;&nbsp;&nbsp;&nbsp;  
              </div>
          </div>
            
      </div>


      <!--End section starts-->

      <div class="end-section" >
          <div class="end-content">
            <div class="content1"><p>Copyrights © SecondGen | <a href="#">Privacy Policy</a></p></div>
            <div class="content2"><a href="#"><i aria-hidden="true" class="fas fa-angle-double-up"></i></a></div>
          </div>
      </div>
     
      
</body>
</html>
