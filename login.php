<?php
  if(isset($_POST['login']))
  {
        $username=$_POST['usname'];
        $password=$_POST['pass'];
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
                    $sql="SELECT `USER` FROM `LOGIN` WHERE `USER` = '$username' and `PSWD` = '$password';";
                    if(($result = $connect->query($sql)) == True)
                    {
                        echo "Login successful! Start shopping with us";
                    }
                }
            }
        }
    }
?>