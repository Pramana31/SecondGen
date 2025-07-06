<?php
    if(isset($_POST['reg']))
    {
        $email=$_POST['email'];
        $username=$_POST['usname'];
        $password=$_POST['pass'];
        $name = preg_replace('/[0-9]/', '', $username);
        $name = ucfirst(strtolower($name));
        $user="root";
        $pswd="";
        $dbms="secondgen";
        $connect= new mysqli("localhost",$user,$pswd,$dbms);
        if(!$connect)
            die("Not connected");
        else
        {
            $sql = "INSERT INTO `REGISTER` (`USER`,`EMAIL`,`PSWD`) VALUES('$username','$email','$password');";
            if($connect->query($sql)==TRUE)
            {

                echo "<script>alert('Welcome, $name!');</script>";
                header("Refresh:1; url=index.php");
                exit();
            }
        }
    }
?>