<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SecondGen</title>
    <link rel="icon" href="logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="seller_style.css">
</head>
<body>
    <?php include 'header2.html'; ?>
    <center>   
        <div class="address-details">

            <span>
            <h2>Add Seller Details</h2></span>

            <?php
                if(isset($_POST['save']))
                {
                    $username=$_POST['username'];
                    $email=$_POST['email'];
                    $name=$_POST['name'];
                    $contact=$_POST['contact'];
                    $area=$_POST['area'];
                    $dis=$_POST['district'];
                    $pin=$_POST['pincode'];
                    $details=$_POST['details'];
                    $image=$_POST['image'];
                    $user="root";
                    $pswd="";
                    $dbms="secondgen";
                    $connect= new mysqli("localhost",$user,$pswd,$dbms);
                    if(!$connect)
                        die("Not connected");
                    else
                    {
                        $sql = "INSERT INTO `SELLER` VALUES('$username','$name','$contact','$email','$area','$dis','$pin','$details','$image');";
                        if($connect->query($sql)==TRUE)
                        {
                            echo("Seller Details Added!!");
                        }
                    }
                }
            ?>

            <div class="input-div">
                <form method="POST" action="">

                    <div class="input-box">
                    <input type="text" name="username" required>
                    <label>User name</label>
                    </div>

                    <div class="input-box">
                    <input type="text" name="name" required>
                    <label>Name</label>
                    </div>

                    <div class="input-box">
                    <input type="number" name="contact" required>
                    <label>10-digit mobile number</label>
                    </div>

                    <div class="input-box">
                    <input type="email" name="email" required>
                    <label>Email address</label>
                    </div>

                    <div class="input-box">
                    <input type="text" name="area" required>
                    <label>Address (Area and Street)</label>
                    </div>

                    <div class="input-box">
                    <input type="text" name="district" required>
                    <label>District</label>
                    </div>

                    <div class="input-box">
                    <input type="number" name="pincode" required>
                    <label>Pincode</label>
                    </div>

                    <div class="input-box">
                    <input type="text" name="details">
                    <label>Product details</label>
                    </div>

                    <div class="input-box">
                    <input type="file" name="image">
                    
                    </div>
                    
                    <pre><div class="button1"><button type="submit" name="save">SAVE</button>       <button type="submit" name="cancel">CANCEL</button></div></pre>
                
                </form>
            </div>
        </div>
    </center>
    <?php include 'footer.html'; ?>
</body>
</html>