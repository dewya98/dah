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
  content{display:inline-block;position: relative;width:900px;height:650px;margin:0 auto}
  .box{width:300px; height:560px;background-color:#eee}
  .box1{width:60%;height:480px;position: absolute;top:40px;left:260px;display:flex}
  .box1>img{width:580px;}
  .cap{font-size:0.8em;padding:50px 0}
  .skyblue{color:rgb(117,189,204);font-weight:bold}
</style>
<div class="visual"><img src="images/intro.jpg" alt=""></div>
<div class="title">
<a href="intro.php">museum DAH: 소개  </a><a href="artist.php">대표 작가 소개</a><a href="section.php">공간 소개</a>
</div>
<content>
    <div class="box"></div>
    <div class="box1">
        <img src="images/intro1.jpg" alt="">
        <div class="cap">
            <pre>
                <h3>
                    뮤지엄 다:는 미디어 아트 그룹 꼴라쥬 플러스와 
                    예술 컨텐츠 전문 기획사 KUNST 1이 
                    합작하여 설립하였습니다. </h3>
                    
                    <span class="skyblue"><i>
                        부산, 경남지역 문화 예술 전파의 초석이 되고
                        이를 통해 시민들의 삶을 보다 풍요롭고 아름답게 만드는 뮤지엄 다:</i></span>
                        

                        대중을 위한 예술, 대중이 체험하고 즐길 수 있는 예술, 그리고 무엇이든지 예술이 될 수 
                        있다는 신념을 가지고 온전히 새로운 공간을 마련하였습니다.
                        우리 삶의 주변에서 예술이 아닌 것은 단 하나도 없다는 사실을 관람객이 직접 체험하길
                        기대합니다.
                        

                        뮤지엄 다:는 예술이 인간의 삶을 보다 풍요롭고 가치 있게 만들 수 있다는 확신을 가지고
                        앞으로도 미래의 삶 개척을 위해 앞장 설 것입니다.
                    </pre>
                </div>
            </div>
</content>
<?php 
include "footer.php";
?>
