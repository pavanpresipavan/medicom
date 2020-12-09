<?php

$mysqli=  new mysqli("localhost","root","","medicom");
        if($_SERVER['REQUEST_METHOD']=='GET')
        {
            $id=$_GET['id'];
            $drid=$_GET['drid'];
            $date=$_GET['date'];

                $sql="insert into book (drid,uid,date) values ('$drid','$id','$date')";
                $res=$mysqli->query($sql);
                    if($res)
                    {
                        ?>
                     <script>window.alert("Success registration");</script><?php
                        header('Location: '.$uri.'./userdashboard.php?id='.$id.'');
                    }
            
            else{?>
                <script>window.alert("Password is not matching");</script><?php
            }
        }
?>