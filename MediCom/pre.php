
                     



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
                overflow: auto;
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
            .fab{
                background-color:#3498db;
                margin-left:10%;
                margin-right:10%;
                border-radius:6px;
            }
        </style>
    </head>
    <body>
        <div>    
            <ul>
                <li style="float:left;font-size: 30px;"><a href="#" >MediCom</a></li>
                <li style="font-size: 25px;"><a href="logout.php">Log out</a></li>
                <li style="font-size: 25px;"><a href="#">About</a></li>
                <li style="font-size: 25px;"><a href="#">Search</a></li>
                <li style="font-size: 25px;"><a href="#">Pre-Bookings</a></li>
                <li style="font-size: 25px;"><a href="docdashboard.php?id=<?php 
                        if($_SERVER['REQUEST_METHOD']=='GET')
                        {
                             echo $_GET['id'];
                        }?>">Home</a></li>
            </ul> 
         </div><br/>
            <div align="center">
            <?php
            $mysqli=  new mysqli("localhost","root","","medicom");
                if($_SERVER['REQUEST_METHOD']=='GET')
                {
                    $id=$_GET['id'];
                    $sql="SELECT * FROM book WHERE drid='$id'";
                    $query = mysqli_query($mysqli, $sql);
                    while($row=$query->fetch_assoc()){ ?>
                            <div class="fab">
                                <span style="padding-left:50px;">ID : <?php echo $row['uid'];?></span><br/>
                                <span style="padding-left:50px;">Date : <?php echo $row['date'];?></span><br/>
                            </div><br/>

                    <?php
                    }
               }
            
            ?>
            </div>

    </body>
</html>