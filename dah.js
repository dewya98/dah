$(document).ready(function(){
    $(".pop").show();
    $(".pop").click(function(){
        $(".pop").hide();
    });

});

    var slides=$(".slider>img");
    var imgs=slides.length;
    var now=0;
    var play;

    function slide() {
        now = (now == imgs ? 0 : now += 1);
        slides.eq(now).fadeIn();
        slides.eq(now).siblings().fadeOut();

        // function slide(now){
        //     var next=(now+1)%imgs;
        //     slides.eq(now).fadeOut(500);
        //     slides.eq(next).fadeIn(500);
        //     now=next;
        };

        // function start(){
        //     timer=setInterval(function(){
        //         var next=(now+1)%imgs;
        //         slide(next);
        //     },3500);

        // };

        start();

        function start() {
            slides.eq(0).siblings().css({ "display": "none" });
            setInterval(function() { slide() }, 3500);
        }

        start();


      $(".next_s").click(function(){ 
        slide(now+1);
      });
      $(".prev_s").click(function(){ 
        slide(now-1);

      });
    
      
   var list=$(".banner>li").length;
   var cur=0;
   var ban_play;
   $(".banner>li").eq(cur).fadeIn();
   ban_play=setInterval(ban_slide,4000);
   
   function ban_slide(){
       var next=(cur+1)%list;
       $(".banner>li").eq(cur).fadeOut();
       $(".banner>li").eq(next).fadeIn();
       cur=next;
   };
    

$(".prev").click(function(){
    var curr=$(".banner>li")
    var prev=curr.prev();
    if(prev.length){
        curr.css("display","none");
        prev.css("display","block")
    }

});

$(".next").click(function(){
    var curr=$(".banner>li")
    var next=curr.next();
    if(next.length){
        curr.css("display","none");
        next.css("display","block")
    }

});
   
//    $(".next").click(function(){
//     if(cur==list){
//        cur==0;
//     }else{
//         cur++;
//     };
//     clearInterval(ban_play);
//     banner_slide(cur);
//     if(mode==true){
//         ban_play=setInterval(function(){ban_slide();},3000);
//     }
//    });
   
function login(){
    window.open("login.php","pop","width=600,height=500,left=300,top=40");
};

function signup(){
    window.open("signup.php","pop","width=600,height=600,left=300,top=40");
};

$(".menu>li").mouseenter(function(){
$(this).children(".submenu").stop().css("display","block");
});
$(".submenu>li").mouseleave(function(){
$(".submenu").css("display","none");
});


   $("button").click(function(){
       $(".join").css("display","block");
   });
   $(".close").click(function(){
       $(".join").css("display","none");
   });

   $(".floor>li").eq(0).click(function(){
    $(".floor-map>img").eq(0).css("display","block");
    $(".floor-map>img").eq(1).css("display","none");
    $(".floor>li").eq(0).css("background-color","rgb(254,230,170)");
    $(".floor>li").eq(1).css("background-color","#eee");
   });
   $(".floor>li").eq(1).click(function(){
    $(".floor-map>img").eq(1).css("display","block");
    $(".floor-map>img").eq(0).css("display","none");
    $(".floor>li").eq(1).css("background-color","rgb(254,230,170)");
    $(".floor>li").eq(0).css("background-color","#eee");
   });

//    $(".floor>li").mouseover(function(){

//    });
// function reply(){
//         var url = "board_re.php";
//         var name = "reply";
//         var option = "width = 600, height = 400, top = 100, left = 200, location = no"
//         window.open(url, name, option);
//     };

function search(){
    if(frm1.search1.value==''){
        alert("키워드입력");
         frm1.search1.focus();
         return false;
    }
    location.href="board-search.php?search="+frm1.search1.value; 
};

function e_search(){
    if(frm1.search1.value==''){
        alert("키워드입력");
         frm1.search1.focus();
         return false;
    }
    location.href="event-search.php?search="+frm1.search1.value; 
};

function faq_search(){
    if(frm1.search1.value==''){
        alert("키워드입력");
         frm1.search1.focus();
         return false;
    }
    location.href="faq-search.php?search="+frm1.search1.value; 
};


   var sticky=$(".sticky>li");
   var sticky_i=$(".sticky>li>i");
   var supporter=$(".supporter>li");
  $(window).scroll(function(){
     supporter.each(function(){
         if($(this).offset().top <= $(window).scrollTop()){
             var idx=$(this).index();
             sticky_i.removeClass("on");
             sticky_i.eq(idx).addClass("on");
         }
     });
     
     
     sticky.click(function(){
        var idx=$(this).index();
         sticky_i.eq(idx).addClass("on").siblings().removeClass("on");
         var section=supporter.eq(idx);
         var sectionoff=section.offset().top;
         $("html,body").stop().animate({scrollTop:sectionoff});
        });
        
    });

//     var sidebar=$(".sidebar");
//     $(window).scroll(function(){
//         sidebar.each(function(){
//             if($(this).offset().top <= $(window).scrollTop()){
//                 var idx=$(this).index();
//                 sidebar.css({"display":"fixed","top":"200px","right":"100px"});
//             };
//         });

//    });
   $("#heart").click(function() {
    $.post("like.php", 'arti_no=' + $("input[type:hidden]").val());
    $("#heart").attr('heart','hearton').css("display:block");
});

