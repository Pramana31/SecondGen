<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SecondGen</title>
    <link rel="icon" href="logo.png">
    <link rel="stylesheet" href="address_style.css">
</head>
<body>
    <?php include 'header1.html'; ?>
    <center>   
        <div class="address-details"style="background: url('address.jpg'); background-repeat: no-repeat;background-size: cover;background-position: center;">
            <span><h2 style="font-size: 30px;margin-bottom: 5px;color: red;">Add A New Address</h2></span>
            <?php
                if(isset($_POST['save']))
                {
                    $username=$_POST['username'];
                    $email=$_POST['email'];
                    $name=$_POST['name'];
                    $contact=$_POST['contact'];
                    $area=$_POST['area'];
                    $city=$_POST['city'];
                    $dis=$_POST['district'];
                    $pin=$_POST['pincode'];
                    $landmark=$_POST['landmark'];
                    $user="root";
                    $pswd="";
                    $dbms="secondgen";
                    $connect= new mysqli("localhost",$user,$pswd,$dbms);
                    if(!$connect)
                        die("Not connected");
                    else
                    {
                        $sql = "INSERT INTO `ADDRESS` VALUES('$username','$name','$contact','$email','$area','$city','$dis','$pin','$landmark');";
                        if($connect->query($sql)==TRUE)
                        {
                            echo("Customer Address Added!!");
                        }
                    }
                }
            ?>
            <div class="input-div">
                <form method="POST">

                    <div class="input-box">
                    <input type="text" name="username" required>
                    <label>User name</label>
                    </div>


                    <div class="input-box">
                    <input type="text" name="name" required>
                    <label>Name</label>
                    </div>

                    <div class="input-box">
                    <input type="digit" name="contact" required>
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
                    <input type="text" name="city" required>
                    <label>City/Town</label>
                    </div>

                    <div class="input-box">
                    <input type="text" name="district" required>
                    <label>District</label>
                    </div>

                    <div class="input-box">
                    <input type="digit" name="pincode" required>
                    <label>Pincode</label>
                    </div>

                    <div class="input-box">
                    <input type="text" name="landmark">
                    <label>Landmark (Optional)</label>
                    </div>
                    
                    <pre><div class="button1"><button type="submit" name="save">SAVE</button>       <button type="submit" name="cancel">CANCEL</button></div></pre>
                
                </form>
            </div>
        </div>
    </center>
    <?php include 'footer.html'; ?>
</body>
</html>