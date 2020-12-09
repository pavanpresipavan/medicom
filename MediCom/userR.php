<?php

$mysqli=  new mysqli("localhost","root","","medicom");
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            $user=$_POST['username'];
            $pass=$_POST['password'];
            $email=$_POST['Email'];
            $number=$_POST['mnumber'];
            $dob=$_POST['dob'];
            $rpass=$_POST['rpassword'];
            
            
            if($pass==$rpass)
            {
                $sql="insert into user (user_name,password,u_dob,u_email,u_num) values ('$user','$pass','$dob','$email','$number')";
                $res=$mysqli->query($sql);
                    if($res)
                    {
                        ?>
                     <script>window.alert("Success registration");</script><?php
                        header('Location: '.$uri.'login.html');
                    }
            }
            else{?>
                <script>window.alert("Password is not matching");</script><?php
            }
        }
?>


<html>
        <title>MediCom</title>

       <link rel="stylesheet" href="style/style.css">
<body>
    <div class="main">
        
    </div>
    <div class="base"><br/>
        <h3 align="center">Registration</h3>
        <div class="login" align="center"> 
            <form action="userR.php" method="POST">
                <input type="text" name="username" placeholder="User Name" style="padding:5px;" required autofocus>
                <input type="email" name="Email" placeholder="Email ID" style="padding:5px;" required autofocus>
                <input type="text" name="mnumber" placeholder="Mobile Number" style="padding:5px;" required autofocus><br/>
                <span class="txt" style="padding-top:100px;">Date of birth</span><br/><input type="date" name="dob" placeholder="dob" style="padding:10px;" required autofocus><br/>
                <input type="password" name="password" placeholder="Password" style="padding:5px;" required autofocus>
                <input type="password" name="rpassword" placeholder="Confirm Password" style="padding:5px;" required autofocus><br/>
                <input type="submit" name="register" value="Register"><br/><br/>
            </form>
        </div>
    </div>
</body>

</html>