<?php 
$q_no=$_POST["no"];
$content_re=$_POST["content_re"];
$writer="관리자";
include "conn.php";
$sql="insert into qna_re(content,writer,q_no) values('$content_re','$writer',$q_no)";
mysqli_query($conn,$sql);
?>
<script>
    alert('답변이 완료되었습니다.');
</script>
<meta http-equiv="refresh" content="0;url=faq.php">