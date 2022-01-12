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
  content{width:80%;height:650px;}
  .box{width:900px;margin:0 auto;font-size:0.8em;padding:50px 0;position:relative;}
  .box>img{position:absolute;top:0;right:0}
  h3{font-size:1.4em}
  h5{font-size:1em}
</style>
<div class="visual"><img src="images/intro.jpg" alt=""></div>
<div class="title">
<a href="intro.php">museum DAH: 소개  </a><a href="artist.php">대표 작가 소개</a><a href="section.php">공간 소개</a>
</div>
<content>
    <div class="box">
    <img src="images/artist.jpg" alt="">
    <pre>
        <h3>
       꼴라쥬 플러스
       Sho jang + Min kim</h3>
        <h5><i>
        꼴라쥬 플러스는 미디어 아티스트 장승효와 
        뮤직 비디오 감독 겸 미디어 아티스트 김용민으로 
        이루어진 아티스트 듀오입니다.
        </i></h5>
                
        꼴라쥬 플러스는 디지털 매체를 기반으로 회화, 조각, 설치, 비디오, 패션, 공예, 건축, 공간 연출 등의
        다양한 장르의 예술을 융합하며, 나아가 장르와 장르, 이미지와 이미지, 공간과 공간 그리고 산업과 예술을 이어 새로운 가능성을 창출해 내는 것을 
        가장 큰 가치로 삼습니다.
        
        
        각 분야 최고의 예술가들과 함께 서로 융합하고 소통하고 복합하여 세상에 없던 완전히 새로운 예술을 선보이는 것이 이들의 목표이며, 
        그것이 꼴라쥬 플러스가 꿈꾸는 완전한 세상입니다.
    </pre>
</div>
</content>
<?php 
include "footer.php";
?>
