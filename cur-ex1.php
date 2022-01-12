<?php 
session_start();
include"header.php";
?>
<style>
  .visual{margin-bottom:50px;}
  .visual>img{width:100%;height:285px}
  .title{text-align:center;}
  .title>a:nth-child(1){color:rgb(117, 189, 204);}
  .title>a{color:#333;padding:0px 40px 50px;display:inline-block;font-size:0.9em;font-weight:700}
  .box{width: 1150px;;height:520px;display:flex}
  .box>img{width: 330px;height: 500px;}
  h3{font-size:1.4em}
  .main-caption{width:700px;height:440px;background-color:#eee;padding:30px;text-align:left;
    line-height:2em;position:relative;font-size:0.85em}
    .black{padding:2px 12px;font-weight:bold;background-color:black;color:#fff;position:absolute;top:10px;right:10px;font-size:0.9em}
    .slate{padding:5px 12px;font-weight:bold;background-color:slategrey;color:#fff;}
    .main-caption>table{width:100%}  
    .main-caption>table th{padding-right:15px;}  
    .main-caption>table tr:nth-child(8){height:100px}  
    .main-caption>table th::before{content:'·';padding-right:10px;font-size:2em;vertical-align:middle}  
    .wrap{
        width: 800px;
        display: grid;
        grid-template-columns: auto auto ;
        grid-gap: 10px;    }
    .box2{
        grid-column: 1 / span 2;
        position:relative;}
    .box1{width: 395px;height:220px;position:relative;}
    .box2>img, .box1>img{width:100%;height:100%;}
    .sub-caption{width:100%;height:100%;background-color:rgba(0,0,0,0.5);color:#fff;display:none;
        ;position:absolute;top:0;left:0}
    .p{position: absolute;bottom: 20px;left:20px;font-size:0.7em;text-align:left;}
    .box1:hover .sub-caption{display:block;}
    .box2:hover .sub-caption{display:block;}
</style>
<div class="visual"><img src="images/exhi.jpg" alt=""></div>
<div class="title">
<a href="cur-exhi.php">현재 진행 중인 전시</a><a href="next-exhi.php">예정 전시</a><a href="past-exhi.php">지난 전시</a>
  </div>
   <div class="box">
        <div class="main-caption">
            <h3>수퍼 네이처 SUPER NATURE</h3>​
            <span class="black"> 전시 진행 중</span>
            <table>
                <tr>
                    <th>전시기간</th>
                    <td> 2020-09-12 ~ 2022-02-02 </td>                  
                </tr>
                <tr>
                   <th>소개</th>             
                   <td><수퍼 네이처>는 올 해 환경의 날 주제인 ‘생물 다양성(Biodiversity)’에 초점을 맞추어,<br>
                    환경단체(부산환경공단, WWF, 대자연)들과 함께 환경 운동에 대한 문제 제기를 하고, 관람객들로 하여금 <br>
                    환경 문제에 대한 자각을 꾀하기 위해 마련되었다.
                   </td>
                </tr>
                <tr>
                    <th>참여작가</th>     
                    <td>꼴라쥬플러스(SHO JANG&MIN KIM), 고지인, 김남표, 김민수, 김영원, 김정민, 김지희, 두민,<br>
                    류지윤, 신이철, 안효찬, 이상훈, 이세현, 이송준, 이원주, 이태수, 이호준, 임채욱, 정해윤, 황유식,<br>
                    Alessandro Mendini, Karim Rashid
                   </td> 
                </tr>
                <tr>
                    <th>주최</th>       
                    <td>쿤스트원</td>
                </tr>
                <tr>
                    <th>주관</th>   
                    <td>뮤지엄 다:</td> 
                </tr>
                <tr>
                    <th>후원</th><td> KNN, 부산환경공단, WWF, 대자연</td> 
                </tr>
                <tr>
                    <th>협찬</th>              
                    <td> LG U+, 체인지메이커, 제주맥주, 더파티, 푸푸리, 포트1902, 유랑, 비아케이, 엘라고
                    </td>
                </tr>
                <tr>
                   <td colspan="2"><span class="slate">전시 소개글</span></td>
                </tr>
            </table>
        </div>
        <img src="images/cur-ex1.jpg" alt="">
    </div>

  <div class="wrap">
    <div class="box2">
        <img src="images/slide04.jpg" alt="">
        <div class="sub-caption">
            <div class="p">
            <h3>미라클 가든</h3>
            총 길이 35m, 폭 11m, 그리고 무대 위로 솟구친 10m 높이의 미디어 월은
             FULL HD LED가 도입된 국내 최초, 최대의 LED 전시 공간입니다. <br>
            미라클 가든에서는 꼴라쥬 플러스의 영상 작품이 사운드 아티스트 고지인의
            음악과 어우러져 약 50분간 상영됩니다. 편안한 의자에 앉아 작품의<br>
            일부가 되어 느긋하게 감상해보세요.</div>
        </div>
    </div>

    <div class="box1">
        <img src="images/cur-ex1-1.png" alt="">
        <div class="sub-caption">
          <div class="p"> 
        <h3>이터널 선샤인</h3>
        양쪽 벽면에 LCD 디지털 액자로 구현된 미디어 작품들과 바닥의 <br>
         아트 타일 그리고 천정의 유리들이 마치 거대한 이미지들로 이루어진 <br>
         동굴 같은 느낌을 줍니다. <이터널 선샤인>은 미셸 공드리의 동명의<br>
         영화 제목에서 빌어왔습니다. 영화에 등장하는 아픈 기억을 지워주는<br>
         라쿠나사 병원을 기억하세요? 다양한 대상을 소재로 작업한 미디어<br>
         작품을 감상하며 걷다 보면 훨씬 힐링 되어 있는 자신을 발견하게<br>
         될 거예요.</div> 
        </div>
    </div>

    <div class="box1">
        <img src="images/cur-ex1-2.png" alt="">
        <div class="sub-caption">
            <div class="p">
        <h3>Art Bathroom</h3>
        화장실은 인간이 일생 동안 약 1년의 시간을 보내는 곳이자, 타인의 시선에서 벗어나
         온전히 자신과 마주하는 공상과 사색의 공간입니다. 꼴라쥬 플러스는 체인지 메이커와 
         함께 일상의 장소에 예술을 결합하여 생명을 불어 넣었습니다. 
        새로운 시각과 특별한 감각으로 선보인 공간에서 잃어버린 자연에 대한 사색에 잠겨보세요. </div>
        </div>
    </div>

    <div class="box1">
        <img src="images/cur-ex1-3.png" alt="">
        <div class="sub-caption">
            <div class="p">
       <h3>기획 전시실</h3>
        뮤지엄 다의 기획전시실에서는 다양한 장르의 현대미술을 수용하고 형식에 구애받지 않는 
        폭넓은 작품을 소개합니다. 우리나라를 대표하는 중견작가들의 개인전부터 
        부산, 경남 지역의 신진작가들의 기획전과 실험적인 아트페어까지 예정되어 있습니다. 
        기존의 블록버스터 미디어 전시와 함께 국내 최고의 현대미술가들의 작품, 
        그리고 미래를 선도할 지역의 신진작가들까지 균형 잡힌 전시 관람이 이루어지도록 구성됩니다.</div>  
        </div>
    </div>
    <div class="box1">
        <img src="images/cur-ex1-4.png" alt="">
        <div class="sub-caption">
            <div class="p">
        <h3>천국의 문을 두드려요</h3>
        뮤지엄 다의 실질적인 출발 지점입니다. 꼴라쥬 플러스 작품의 기반이 되는 아트 플라워 패턴들의
         환영을 받으며 너비 5.7m, 높이 3.5m의 초대형 LED로 이루어진 천국으로 가는 게이트를 노크해 보세요.
          좌우 그리고 바닥에 설치된 거울을 통해 무한하게 확장되는 이미지들이 여러분들을 
         눈부신 환상의 세계로 이끌어드립니다. </div>  
        </div>
    </div>
    <div class="box2">
        <img src="images/slide05.jpg" alt="">
        <div class="sub-caption">
            <div class="p">
        <h3>숲 속에서 잠들다</h3>
        우리에게 침실은 하루의 지친 몸을 온전히 휴식에만 집중하게 하는 매우 중요한 공간입니다.
        하지만 무장해제된 우리의 뇌와 잠재의식은 잠자는 동안에도 다양한 공상과 망상을 실현시키기 위해
         또 다른 삶을 살아가기도 합니다. 아직 잠자리에 들 시간은 아니지만, 현실에 지친 당신도
          이 공간에서만큼은 눈치 보지 말고 푹 쉬다 가셔도 좋습니다. 다만, 신발은 벗고 이용해 주세요.</div>    
        </div>
    </div>
  </div>
<div style="width:100%;height:100px;display:inline-block;clear:both;"></div>
<?php 
include "footer.php";
?>
