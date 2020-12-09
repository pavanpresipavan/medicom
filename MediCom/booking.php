
<?php
                $mysqli=  new mysqli("localhost","root","","medicom");
                if($_SERVER['REQUEST_METHOD']=='GET')
                {
                    $id=$_GET['id'];
                
                }
                if($_SERVER['REQUEST_METHOD']=='POST')
                {
                    $drid=$_GET['drid'];
                    $id=$_GET['id'];
                    $date=$_POST['date'];
                    header('Location: '.$uri.'book.php?id='.$id.'&drid='.$drid.'&date='.$date.'');
                }
?>

<html>
<head><title>MediCom</title>
    <style>
        /* The container must be positioned relative: */
        body{
            font-family: Arial, Helvetica, sans-serif;
        }
        h4{
            font-size: 34px;
            color: #30336b;
        }
        .custom-select {
        position: relative;
        font-family: Arial;
    
        }
        #cet,#location,#drname,input{
            width: 200px;
        }
        .txt{
                color:#30336b;
                float: left;

            }
            .td{
                float: left;


            }

            .btn{
                float: right;

            }
            .con{
                background-color:#3498db;
                margin-left:10%;
                margin-right:10%;
                margin-radius:6px;
            }

    </style>
</head>
<body>
    <h4>Booking</h4><br/><!--
    <div align="center" class="custom-select">

            <select name = "cet"> 
              <option >Specialist</option>
            //  //<?php
               // $mysqli=  new mysqli("localhost","root","","medicom");
               // if($_SERVER['REQUEST_METHOD']=='GET')
               // {
                //    $id=$_GET['id'];
                //    $sql="SELECT * FROM doc ";
                //   $query = mysqli_query($mysqli, $sql);
                 //   while($row=$query->fetch_assoc()){ ?>
                  //   <option value = <?php// echo $row['category'] ?>><?php// echo $row['category'] ?></option>
                     <?php
              // }
           // } 
            ?>            <input type="submit" name="dep" value="get"/>
            </select><br/><br/>
                 -->
 
                 <?php

                    $sql="SELECT * FROM doc ";
                    $query = mysqli_query($mysqli, $sql);
                    while($row=$query->fetch_assoc()){ ?>
                        <div class="con">
                            <form action="booking.php?id=<?php echo $row['drid']; ?>&id=<?php 
                                 if($_SERVER['REQUEST_METHOD']=='GET')
                                 {
                                    echo $_GET['id'];
                                 }
                                ?>" method="POST">
                            <span class="txt">&nbsp;&nbsp;&nbsp;Category : <?php echo $row['category'];?></span><br/>
                            <span class="txt">&nbsp;&nbsp;&nbsp;Name : <?php echo $row['dname'];?></span><br/>
                            <input type="submit" value="Book now" class="btn"/>
                            <span class="txt">&nbsp;&nbsp;&nbsp;Clinic Address : <?php echo $row['dcadd'];?></span><br/>
                            <span class="txt">&nbsp;&nbsp;&nbsp;Clinic number : <?php echo $row['dnum'];?></span><br/>
                            <span class="txt">&nbsp;&nbsp;&nbsp;Date : </span><input type="date" name="date" /><br/>
                            </form>
                            
                        </div><br/>
                     <?php
               }
            
            ?>
                 <!--



            </select><br/><br/></form>
            <input type="date" name="date" value="date"><br/><br/>
            <input type="submit" name="submit" value="submit">
    </div>-->
</body>
</html>

