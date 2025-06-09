<?php
    if(isset($_POST['reg']))
    {
        $email=$_POST['email'];
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
            $sql = "INSERT INTO `REGISTER` (`USER`,`EMAIL`,`PSWD`) VALUES('$username','$email','$password');";
            if($connect->query($sql)==TRUE)
            {
                echo("New Customer Added!!");
            }
        }
    }
?>