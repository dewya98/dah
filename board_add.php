<?php 
session_start();
include "header.php";
?>
    <style>
        #wrap{width: 700px;margin: 30px auto;}
        .table{width:90%;clear:both;background-color:#eee;padding:10px }
        .table th{background-color:#eee; color:darkcyan;height:40px;}
        .table td{font-size:14px}
        input[type=button],[type=reset]{padding:5px 20px;font-weight:bold; 
            border-color:darkcyan;border-radius:10px }
    </style>
<form enctype="multipart/form-data" name="frm1" method="post" action="board_add_ok.php">
<div id="wrap">
    <table class="table">
    <tr>
        <th>제목</th>
        <td><input type="text" name="title" id="" required></td>
    </tr>
    <tr>
        <th>태그</th>
        <td><input type="text" name="tag" id="" required ></td>
    </tr>
    <tr>
        <th>사진</th>
        <td><input type="file" name="img"></td>
    </tr>
    <tr>
         <th>내용</th>
         <td><textarea name="content" id="" rows="35" cols="70"></textarea></td>
    </tr>
    <tr>
        <th>분류</th>
        <td><select name="sort">
         <option value="event">이벤트</option>
         <option value="notice">공지사항</option>
         <option value="press">보도자료</option>
       </td>
    </tr>
    <tr>
        <th>종료일</th>
        <td><input type="text" name="endDate" id="" required></td>
    </tr>
    <tr>
        <td colspan="2" align="center"><input type="button" value="업로드완료" onclick="send()"> <input type="reset" value="새로작성"></td>
    </tr>
    </table>
</div>
</form>
</html>
<script>
    function send(){
    if(frm1.title.value==""){alert("제목을 입력하세요");
        frm1.title.focus();return false;
    }
    if(frm1.tag.value==""){("태그를 입력하세요");
        frm1.tag.focus();return false;
    }

    if(frm1.sort.value==""){alert("분류를 입력하세요"); 
        frm1.sort.focus();return false;
    }
    if(frm1.endDate.value==""){alert("종료일을 입력하세요");
        frm1.endDate.focus();return false;
    }
     document.frm1.submit();
    }
</script>