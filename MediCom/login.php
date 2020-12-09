<?php

$mysqli=  new mysqli("localhost","root","","medicom");
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            $user=$_POST['email'];
            $pass=$_POST['password'];
            $sql="SELECT * FROM user WHERE u_email='".$user."' AND password='".$pass."'";
            $rav=$mysqli->query($sql);
            if(mysqli_num_rows($rav)>0)
            {
                $sql1="SELECT user_id FROM user WHERE demail='".$user."'";
                $query = mysqli_query($mysqli, $sql);
               while($row=$query->fetch_assoc()){

                        $_COOKIE['drid']=$row["user_id"];;
                        header('Location: '.$uri.'./userdashboard.php?id='.$row["user_id"].'');
               }
            }
        }
?>

<html>
<title>MediCom</title>


    <link rel="stylesheet" href="style/style.css">


<body>
    <div class="main">

    </div>
    <div class="base">
        
        <div class="login" align="center">
        <h3 align="center">Login</h3>
            
            <form action="login.php" method=POST>
            <input type="email" name="email" placeholder="Email ID" ><br/>
            <input type="password" name="password" placeholder="Password" ><br/> 
            <input type="submit" name="login" value="submit"><br/>
            <div align="left"><br/>
            <a href="userR.php" style="padding-left:25%;">Create an account</a><br/>
            <a href="fpass.php"  style="padding-left:25%;">Forget Password</a><br/>
            </div>    
        </form>
        </div>
    </div>
</body>

</html>