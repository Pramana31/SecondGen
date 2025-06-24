<?php
    //$username=$error_msg="";
    //include "index1.php";
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
                        $sql="SELECT `USER` FROM `REGISTER` WHERE `USER` = '$username' and `PSWD` = '$password';";
                        $sql1="SELECT * FROM `REGISTER`";
                        //$stmt=$connect->prepare($sql);
                        //$stmt->bind_param("ss",$username);
                        //if($stmt->execute()){
                        $result=$connect->query($sql);
                        $result1=$connect->query($sql1);
                        if($result == TRUE){
                            if($result->num_rows > 0){
                                $row=$result->fetch_assoc();
                                //echo $row['USER'];
                                $_SESSION['USER']=$row['USER'];
                                if(isset($_SESSION['USER']))
                                echo $_SESSION['USER'];
                                //header("location:index1.php");
                            }
                            else
                            echo "invalid username/password";
                        }
                    }
                }
            }
        }
?>