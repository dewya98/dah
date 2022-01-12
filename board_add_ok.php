<?php 
$title=$_POST["title"];
$tag=$_POST["tag"];
$content=$_POST["content"];
$sort=$_POST["sort"];
$date=date("Y-m-d");
$endDate=$_POST["endDate"];
$uploaddir=$_SERVER["DOCUMENT_ROOT"]."/fileServer/";  
$img=basename($_FILES["img"]["name"]);  
$uploadfile=$uploaddir.$img;   //지정변수를 지정한 파일서버에 올리겠다
move_uploaded_file($_FILES["img"]["tmp_name"],$uploadfile);  //파일을 지정서버로 전송
include "conn.php";
$sql="insert into board (title,tag,content,sort,date,endDate,img)
 values(
    '$title','$tag','$content','$sort','$date','$endDate','$img')";
mysqli_query($conn,$sql);
echo "파일등록완료";
?>
<meta http-equiv="refresh" content="0;url=content.php">

