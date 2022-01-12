<?php  
$title=$_POST["title"];
$writer=$_POST["writer"];
$writeday=date("Y-m-d");
$pw=$_POST["pw"];
$content=$_POST["content"];
include "conn.php";
$sql="insert into qna(title,writer,writeday,pw,content) values('$title','$writer','$writeday','$pw','$content')";
mysqli_query($conn,$sql);
?>
<script>
    alert("질문이 등록되었습니다.");
</script>
<meta http-equiv="refresh" content="0;url=faq.php">