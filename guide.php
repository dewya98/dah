<?php 
session_start();
include"header.php";
?>
<style>
  .visual{margin-bottom:40px;}
  .visual>img{width:100%;height:285px}
  .title{text-align:center;}
  .title>a:nth-child(1){color:rgb(117, 189, 204);}
  .title>a{color:#333;padding:0px 40px 20px;display:inline-block;font-size:0.9em;font-weight:700}
  .guide{width:900px;}
  .guide table{margin:30px auto;width:100%;}
  .guide table img{vertical-align:middle}
  .guide table tr{height:40px;line-height:40px;}
  .guide table th{vertical-align:top;padding:10px 50px 10px 0}
  .guide table td{font-size:0.9em;padding:10px 20px}
  .guide table a{font-size:0.9em;background-color:#555;color:#fff;border-radius:20px;
    padding:0px 20px;float:right}
  .box{display:inline-block;border:1px solid #bbb;width:355px;height:90px;margin-top:10px;
    padding: 10px 0 10px;line-height:3.3em;font-weight:bold;box-shadow:0 0 5px #aaa;text-align:center }  
  .process{font-size:0.9em;width: 800px;margin-bottom:50px} 
  
  .container {
      width:740px;
      border:1px solid #bbb;
      box-shadow:0 0 5px #aaa;
      border-collapse:collapse;
    }

 .container td {
  text-align: center;
  border:2px solid #ccc;
  } 
  h4{font-size:1.1em;}
  h3{font-size:1.3em;text-align:center;padding-bottom:20px;font-family: 'Poppins', sans-serif;}
</style>
<div class="visual"><img src="images/guide.jpg" alt=""></div>
<div class="title">
<a href="guide.php">관람안내</a><a href="process.php">단체관람 예약</a><a href="map.php">오시는 길</a>
</div>
<div class="guide">
      <table>
        <tr>
            <th>관람시간</th>
            <td>
                <div class="box">
                <img src="images/clock.png" alt=""> 월, 화, 수, 목, 금
                <hr>
                AM 10:00 - PM 07:00
                </div>
                &emsp;&nbsp;
                <div class="box">
                <img src="images/clock.png" alt=""> 주말 및 공휴일
                <hr>
                AM 10:00 - PM 08:00
                </div> <br>
                <small>※ 마지막 입장은 마감시간 1시간전까지 가능합니다.</small> 
            </td>
        </tr>
        <tr>
        <th>관람료</th>
        <td>
        <table class="container">
        <tr>   
            <td>청소년 <br> <small>(중고등)</small></td>
            <td>성인</td>
            <td>아동 <br><small>(48개월 이상)</small></td>  
            <td>특별요금 <br><small>(장애인, 국가유공자 등)</small></td>
            <td colspan="3">단체 <br><small>(30명 이상, 사전 신청 필요)</small></td>
        </tr>
        <tr>   
            <td><b>15,000원</b></td>
            <td><b>18,000원</b></td>
            <td><b>13,000원</b> </td>
            <td><b>11,000원</b> </td>
            <td >성인 <br><b>13,000원</b></td>
            <td >청소년 <br><b>10,000원</b> </td>
            <td >어린이 <br><b>9,000원</b></td>
        </tr>
       </table>
       <a href="https://booking.naver.com/booking/5/bizes/378551">예약하기 <i class="fas fa-chevron-right"></i></a>
        </td>
        </tr>
        <tr>
        <th rowspan="8">유의사항</th>
        <td>
         <img src="images/guide1.png" alt=""> <br>
        입장 시 마스크 착용 필수, 발열체크 및 방문자 기록 작성 해주시기 바랍니다. <br>
        ​(전시 관람 및 사진촬영 시에도 마스크는 필히 착용 부탁드립니다.)
        </td>
        </tr>
        <tr>
        <td>
        <img src="images/guide2.png" alt=""> <br>
        미취학 아동 및 초등학생은 반드시 보호자와 함께 관람 부탁드립니다. <br>
        (보호자 부주의로 발생하는 사고는 미술관에서 책임지지 않습니다.)
        </td>
        </tr>
        <tr>
        <td>
        <img src="images/guide3.png" alt=""> <br>
        ​현재 진행중인 전시는 전체 연령이 관람 가능한 등급이지만, 48개월 미만의 유아는 입장을 권장하지 않습니다.
        </td>
        </tr>
        <tr>
        <td>
        <img src="images/guide4.png" alt=""> <br>
        바닥이 유리로 되어 있어 안전사고의 위험이 있으니​ 뛰어다니지 않도록 유의해주세요. <br>
        (다른 관람객들에게 방해가 되지 않도록 너무 큰소리는​ 주의 부탁드립니다)
        </td>
        </tr>
        <tr>
        <td>
        <img src="images/guide5.png" alt=""> <br>
        바닥이 거울로 되어 있어 원피스나 치마를 입으신 경우 주의바라며 리셉션에서 스카프 대여가 가능합니다.
        </td>
        </tr>
        <tr>
        <td>
        <img src="images/guide6.png" alt=""> <br>
        뮤지엄 다는 전시 관람 중 관람객의 부주의 및 고지내용 위반으로 발생한 상해, 전시물의 파손 등에 대해서 <br>
        책임지지 않습니다. <br>
        (관람객의 안전한 전시관람과 작품 보호를 위해 전시장에 셀카봉, 삼각대, 백팩은 반입이 불가합니다)
        </td>
        </tr>
        <tr>
        <td>
        <img src="images/guide7.png" alt=""> <br>
        주말 및 공휴일은 관내가 매우 혼잡합니다. 안전사고 방지를 위해 입장객 수를 제한하여 다소 대기 시간이 길어질 수 있는 점 <br>
        양해 부탁드립니다.
        </td>
        </tr>
        <tr>
        <td>
        <img src="images/guide8.png" alt=""> <br>
        백팩의 경우, 미술관 입구 유료보관함에 보관 부탁드리며 캐리어는 반입이 불가해 안내데스크에서 보관해 드립니다.        </td>
        </tr>
     </table>
 </div>
<?php 
include "footer.php";
?>
