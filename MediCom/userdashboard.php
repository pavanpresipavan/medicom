

<html>
    <head>
        <title>MediCom</title>
        <style type="text/CSS">
            body{
                font-family: Arial, Helvetica, sans-serif;
            }
            a{
                text-decoration: none;
                font-size: 30px;
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
        </style>
    </head>
    <body><h3>MediCom</h3>
        <table border="0" align="center" bgcolor="#dff9fb" height="70%" style="border-radius:5px;"> 
            <tr color="#c7ecee">
                <td width="30%" >
                    <div align="center">
                    <a href="booking.php?id=<?php 
                        if($_SERVER['REQUEST_METHOD']=='GET')
                        {
                             echo $_GET['id'];
                             
                        }
                        ?>">Pre-Booking</a></div>
                </td>
                <td width="30%">
                    <div align="center">
                    <a href="#">Clinic</a></div>
                </td>
            </tr>
            <tr>
                    <td >
                            <div align="center">
                            <a href="#">Medicins</a></div>
                    </td>
                    <td >
                            <div align="center">
                            <a href="logout.php?c=1">Log out</a></div>
                    </td>
            </tr>

        </table>
    </body>
</html>