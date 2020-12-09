<?php
$mysqli=  new mysqli("localhost","root","","medicom");

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $email=$_POST['email'];
    $sql="SELECT * FROM user WHERE u_email='".$email."'";
    $rav=$mysqli->query($sql);
    if(mysqli_num_rows($rav)>0)
    {
                header('Location: '.$uri.'./login.php');
    }
    else{?>
        <script>
            alert("Invalid email ID");
        </script><?php

    }
}
?>


<html>
<head>
    <style type="text/css">
        body{
            font-family: corbel;
        }
        .log{
            border-width: 2px;
            border-radius: 5px;
            border-style: solid;
            border-color: #30336b;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            padding-top: 20px;
            padding: 20px;
            box-sizing: border-box;
            max-width: 460px;
        }
        input[type='email'] {
            border-radius: 8px;
            border: 1px solid #CCC;
            color: #333;
            height: 40px;
            font-size: 14px;
            margin-top: 10px;
            margin:10px;
            padding: 6px;
        }
        h4{
            font-size:25px;
            color: #30336b;
            display:inline;
            padding:5%;
        }
        a {
                text-decoration: none;
                color: #30336b;
                text-align: center;
            }
        input[type='submit'] {
            width: 200px;
            margin-top: 10px;
            padding: 10px 25px 8px;
            color: #fff;
            background-color: #49db1d;
            text-shadow: rgba(0, 0, 0, 0.24) 0 1px 0;
            font-size: 16px;
            box-shadow: #49db1d 0 2px 0 0 inset, #fff 0 1px 0 0;
            border: 1px solid #49db1d;
            border-radius: 2px;
            cursor: pointer;
        }
}
    </style>
</head>
<body>
    <div class="log" align="center">   
        <h4>Forget Password</h4>
            <form action="fpass.php" method=POST><br/>
            <input type="email" name="email" placeholder="Enter Email ID" style=" height:40px; width:200px;"><br/>
            <input type="submit" value="submit" style=" height:40px; width:200px;"><br/><br/>
            
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="color:#49db1d;">
                <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/>
                <path d="M0 0h24v24H0z" fill="none"/>
            </svg>
            <a href="login.php">Back</a>
            </form>
    </div>   
</body>
</html>