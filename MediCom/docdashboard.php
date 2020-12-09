
                     



<html>
    <head>
        <title>MediCom</title>
        <style type="text/CSS">
            body{
                font-family: Arial, Helvetica, sans-serif;
            }
            a{
                text-decoration: none;
                color: #535c68;
            }
            h3{
                font-size: 34px;
                color: #30336b;
                font-weight: 200;
            }
            .txt{
                color:#30336b;
            }
            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #dff9fb;
            }

            li {
                float: right;
            }

            li a {
                display: block;
                color: #535c68;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }
                /* Change the link color to #111 (black) on hover */
            li a:hover {
                background-color: #e056fd;
            }
            .txt{
                color:#30336b;
                float: left;
                padding-left: 25%;

            }
        </style>
    </head>
    <body>
        <div>    
            <ul>
                <li style="float:left;font-size: 30px;"><a href="#" >MediCom</a></li>
                <li style="font-size: 25px;"><a href="logout.php?c=0">Log out</a></li>
                <li style="font-size: 25px;"><a href="#">About</a></li>
                <li style="font-size: 25px;"><a href="#">Search</a></li>
                <li style="font-size: 25px;"><a href="pre.php?id=<?php 
                        if($_SERVER['REQUEST_METHOD']=='GET')
                        {
                             echo $_GET['id'];
                        }?>">Pre-Bookings</a></li>
                <li style="font-size: 25px;"><a href="#">Home</a></li>
            </ul> 
         </div><br/>
            <div align="center">

            <?php

                $mysqli=  new mysqli("localhost","root","","medicom");
                if($_SERVER['REQUEST_METHOD']=='GET')
                {
                    $id=$_GET['id'];
                
                    $sql="SELECT * FROM doc WHERE drid='.$id.'";
                    $query = mysqli_query($mysqli, $sql);
                    while($row=$query->fetch_assoc()){ ?>
                            <span class="txt">Name : <?php echo $row["dname"];?></span><br/><br/>
                            <span class="txt">Email : <?php echo $row["demail"];?></span><br/><br/>
                            <span class="txt">License ID : <?php echo $row["license"];?></span><br/><br/>
                            <span class="txt">Clinic Address : <?php echo $row["dcadd"];?></span><br/><br/>
                            <span class="txt">Clinic Number : <?php echo $cnum=$row["dcnum"];?></span><br/><br/>
                    <?php
                               
                        }
                    
                }
                ?>
            </div>

    </body>
</html>