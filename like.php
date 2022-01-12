<?php
session_start();
$arti_no=$_POST["$no"];
include "conn.php";
$sql="update board set likes=likes+1 where no=$no";
$rs=mysqli_query($conn,$sql);
?>
<meta http-equiv="refresh" content="0;url=content.php">