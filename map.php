<?php 
session_start();
include"header.php";
?>
<style>
  .visual{margin-bottom:50px;}
  .visual>img{width:100%;height:285px}
  .title{text-align:center;}
  .title>a:nth-child(3){color:rgb(117, 189, 204);}
  .title>a{color:#333;padding:0px 40px 50px;display:inline-block;font-size:0.9em;font-weight:700}
  .map{text-align:center;width:830px;}
  .map table{margin:30px auto;}
  .map table tr{height:40px;line-height:40px;}
  .map table i{font-size:2em}
  .map table td{font-size:0.9em;text-align:left;padding:10px 20px}
  .map table tr:nth-child(4){font-size:0.8em;height:100px}
</style>
<div class="visual"><img src="images/board.jpg" alt=""></div>
<div class="title">
<a href="guide.php">관람안내</a><a href="process.php">단체관람 예약</a><a href="map.php">오시는 길</a>
</div>
<div class="map">
    <div style="width:823px;height: 542px;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3261.413141019026!2d129.12658121560258!3d35.171254065377596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35689324d67dd131%3A0x1f704864f7b62208!2z666k7KeA7JeEIOuLpA!5e0!3m2!1sko!2sus!4v1637650881028!5m2!1sko!2sus" width="823" height="542" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <table>
                <tr>
                    <td> <i class="fas fa-car-side"></i></td>
                    <th> 자차 이용 시 </th>
                    <td> 부산광역시 해운대구 센텀서로 20, 뮤지엄 다:</td>
                </tr>
           ​    <tr>
               <td><i class="fas fa-bus-alt"></i></td>
               <th>버스 이용 시</th>
               <td>센텀시티역 하차141번, 155번, 40번, 5-1번, 63번, 1001번, 1002번, 107번 <br>
            ​       시청자 미디어 센터 하차 115번, 181번, 307번</td>
           </tr>
           <tr>
               <td><i class="fas fa-subway"></i></td>
               <th>지하철 이용 시</th>
               <td>2호선 센텀시티역 6번 or 8번 출구(도보 5분)</td>
           </tr>
           <tr>
               <td colspan="3"> 
                   - 미술관 후문에 야외 주차장이 있습니다. (전시 관람 시 2시간 무료 이용 가능) <br>
                   - 대형버스 주차는 사전에 반드시 협의 되어야 합니다.
                </td>
            </tr>
        </table>
    </div>
<?php 
include "footer.php";
?>
