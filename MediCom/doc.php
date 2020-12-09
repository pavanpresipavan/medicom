<?php
$mysqli=  new mysqli("localhost","root","","medicom");
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            $user=$_POST['email'];
            $pass=$_POST['password'];
            $sql="SELECT * FROM doc WHERE demail='".$user."' AND password='".$pass."'";
            $rav=$mysqli->query($sql);
            if(mysqli_num_rows($rav)>0)
            {
                $sql1="SELECT drid FROM doc WHERE demail='".$user."'";
                $query = mysqli_query($mysqli, $sql);
               while($row=$query->fetch_assoc()){

                        $_COOKIE['drid']=$row["drid"];;
                        header('Location: '.$uri.'./docdashboard.php?id='.$row["drid"].'');
               }
            }
            else {

                ?><script>alert("Invalid username or password");</script><?php
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
        <h3 align="center">Doctors Login</h3>
            <form action="doc.php" method=POST>
            <input type="email" name="email" placeholder="Email ID" style="padding:5px;"><br/>
            <input type="password" name="password" placeholder="Password" style="padding:5px;"><br/>
            <input type="submit" name="login" value="submit"><br/><br/>
            <div align="left">
            <a href="docR.php" style="padding-left:25%;">Create an account</a><br/>
            <a href="fpass.php"  style="padding-left:25%;">Forget Password</a><br/>
            </div> 
            </form>
        </div>
    </div>
</body>

</html>