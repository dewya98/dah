<?php
$no=$_POST["no"];
include "conn.php";
$sql="select * from board_re where arti_no='$no'";
$rs=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($rs);
if(mysqli_num_rows($rs)){
  $sqlDel="delete from board_re where arti_no='$no'"; 
  mysqli_query($conn,$sqlDel);
  echo "<meta http-equiv='refresh' content='0;url=content.php'>"; 
}?>
