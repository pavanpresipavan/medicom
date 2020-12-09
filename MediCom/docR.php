<?php
session_start();
$mysqli=  new mysqli("localhost","root","","medicom");
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            $user=$_POST['username'];
            $pass=$_POST['password'];
            $email=$_POST['Email'];
            $number=$_POST['number'];
            $dob=$_POST['dob'];
            $rpass=$_POST['rpassword'];
            $cname=$_POST['clname'];
            $cadd=$_POST['address'];
            $lis=$_POST['license'];
            $cat=$_POST['Category'];
            $cnum=$_POST['clnumber'];
            
            
            if($pass==$rpass)
            {
                $sql="insert into doc (category,dcadd,dcnum,demail,dname,dnum,dob,license,password) values ('$cat','$cadd','$cnum','$email','$user','$number','$dob','$lis',$pass)";
                $res=$mysqli->query($sql);
                    if($res)
                    {
                        ?>
                     <script>alert("Success registration");</script>
                     
                     <?php
                        header('Location: '.$uri.'login.php');
                    }
            }
            else{?>
                <script>alert("Password is not matching");</script><?php
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
       
        <div class="login" align="center"> 
            <form action="docR.php" method=POST>
            <h3 align="center">Registration</h3>
                <input type="text" name="username" placeholder="User Name" style="padding:5px;">
                <input type="email" name="Email" placeholder="Email ID" style="padding:5px;">
                <input type="text" name="license" placeholder="license ID" style="padding:5px;">
                <input type="text" name="number" placeholder="Mobile Number" style="padding:5px;">
                <input type="text" name="clname" placeholder="Clinic Name" style="padding:5px;">
                <input type="text" name="clnumber" placeholder="Clinic Number" style="padding:5px;">
                <input type="text" name="Category" placeholder="Category / Specialization" style="padding:5px;">
                <input type="text" name="address" placeholder="Clinic Address" style="padding:5px;">
                <br/><span class="txt">D O B</span>&nbsp;<input type="date" name="dob" placeholder="Date of birth" style="padding:5px;"><br/>
                <input type="password" name="password" placeholder="Password" style="padding:5px;">
                <input type="password" name="rpassword" placeholder="Confirm Password" style="padding:5px;"><br/>
                <input type="submit" name="register" value="Register">
                </form>
        </div>
    </div>
</body>

</html>