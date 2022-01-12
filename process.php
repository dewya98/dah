<?php 
session_start();
include"header.php";
?>
<style>
  .visual{margin-bottom:50px;}
  .visual>img{width:100%;height:285px}
  .title{text-align:center;}
  .title>a:nth-child(2){color:rgb(117, 189, 204);}
  .title>a{color:#333;padding:0px 40px 50px;display:inline-block;font-size:0.9em;font-weight:700}
  .reserv{width:840px;}
  .reserv table{margin:30px auto;width:100%;}
  .reserv table tr{height:40px;line-height:40px;}
  .reserv table th{vertical-align:top;padding:10px 50px 10px 0}
  .reserv table td{font-size:0.9em;text-align:left;padding:10px 20px}
  .reserv table a{font-size:1em;background-color:black;color:#fff;padding:12px 20px;box-shadow:1px 5px 7px #222;}
  .box{display:inline-block;border:1px solid #bbb;width:210px;height:180px;margin:30px 10px 50px 0px;
    box-shadow:2px 4px 12px #ccc;padding: 20px;font-size:0.9em;line-height:2.2em }  
  .process{font-size:0.9em;width: 800px;margin-bottom:50px}  
  h4{font-size:1.1em;}
  h3{font-size:1.3em;text-align:center;padding-bottom:20px;font-family: 'Poppins', sans-serif;}
</style>
<div class="visual"><img src="images/board.jpg" alt=""></div>
<div class="title">
<a href="guide.php">관람안내</a><a href="process.php">단체관람 예약</a><a href="map.php">오시는 길</a>
</div>
    <div class="reserv">
      <table>
        <tr>
            <th rowspan="4">단체 관람 신청 방법</th>
            <td>관람 예정일로부터 최소 7일 전 신청바랍니다. <br>
            <단체관람 신청서>를 다운로드하여 작성한 뒤 이메일로 신청 가능합니다.​
            </td>
        </tr>
        <tr>
        <td><b>Email.</b>  museumdah@naver.com <br>
           <b>Tel.</b>  051-731-3302</td>
        </tr>
        <tr>
        <td>* 도슨트 투어 희망 시 사전 예약은 필수입니다. <br>
            ​* 이메일 예약 접수 후 담당자와 전화통화는 필수입니다.</td>
        </tr>
        <tr>
        <td><a href="https://bb1a1372-ba98-4623-93ac-05781288f63c.filesusr.com/ugd/96aa98_9c41cd93144a45b5872a6f3c1fecd225.docx?dn=%EB%AE%A4%EC%A7%80%EC%97%84%EB%8B%A4%20%EB%8B%A8%EC%B2%B4%EA%B4%80%EB%9E%8C%20%EC%8B%A0%EC%B2%AD%EC%84%9C.docx">단체관람신청서 <i class="xi-download"></i></a></td>
        </tr>
     </table>
     <div class="process">
         <h4>방문 당일 절차</h4>
         <div class="box" style="background:url('images/process1.jpg')no-repeat 90% bottom">
         <h3> STEP1</h3>
         관람 당일 미술관<br>
         리셉션 데스크에서 예약 확인
         </div>
         <div class="box" style="background:url('images/process2.jpg')no-repeat 90% bottom">
         <h3>STEP2</h3>
         리셉션 데스크에서<br>
         ​인원 수 체크 및 인솔자 확인
         </div>
         <div class="box" style="background:url('images/process3.jpg')no-repeat 90% bottom">
         <h3>STEP3</h3>
         인솔자와 동반하여 입장<br>
         <small>(학생 단체는 인솔자가 없는 경우 입장 제한)</small>
         </div>
         ※ 도슨트 신청 시, 리셉션 데스크에서 대기 바랍니다. <br><br>
         ※ 물을 포함한 식음료, 백팩, 셀카봉 및 삼각대는 반입 불가합니다. <br><br>
         ※ 단체관람 신청서의 준수사항 및 주의사항을 꼭 읽어주세요.
     </div>
  </div>
<?php 
include "footer.php";
?>
