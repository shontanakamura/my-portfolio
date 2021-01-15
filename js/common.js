'use strict';

//メニュー
$(function(){
  $('.target__inner').on('click', function () {
      $('.target,.target__inner, .nav-right, .target__inner__line1,.target__inner__line2,.target__inner__line3,.target-list').toggleClass('show');
  });
});

//フェードイン 
$(function(){
  $(".inview").on("inview", function (event, isInView) {
    if (isInView) {
      $(this).stop().addClass("is-show");
    } else {
      $(this).stop().removeClass("is-show");
    }
  });
});




  // $(function(){
  //   function ScrollButton(button, place){
  //     // スクロールさせたい場所を定義
  //     var position = $(place).scrollTop;  
  //     // 指定のボタンを押したら、スクロールさせる。
  //     $(button).click(function(){
  //       $("html,body").animate({
  //           scrollTop : position
  //       }, {
  //           queue : false
  //       });
  //     });
  //   }

  //   // 使う場合、下記のようにする。ScrollButton(ボタン, スクロールさせたい場所)
  //   ScrollButton(".nav-target__works", ".works");
  // });

var position = $(".header").offset().top;//最初の要素の、ドキュメント上での表示位置[y軸]を返す

$('.works').click(function(){
  $("html,body").animate({
      scrollTop : position
  }, {
      queue : false
  });
});



///////スクロール////////

var positionProfile = $(".profile").offset().top;　//最初の要素の、ドキュメント上での表示位置[y軸]を返す

$('#nav-target__profile').click(function(){
  $("html,body").animate({
      scrollTop : positionProfile 
  }, {
      queue : false
  });
});


var positionConcept = $(".concept").offset().top;　//最初の要素の、ドキュメント上での表示位置[y軸]を返す

$('#nav-target__concept').click(function(){
  $("html,body").animate({
      scrollTop : positionConcept 
  }, {
      queue : false
  });
});
var positionAboutMe = $(".aboutMe").offset().top;　//最初の要素の、ドキュメント上での表示位置[y軸]を返す

$('#nav-target__aboutMe').click(function(){
  $("html,body").animate({
      scrollTop : positionAboutMe
  }, {
      queue : false
  });
});

var positionSlills = $(".skills").offset().top;　//最初の要素の、ドキュメント上での表示位置[y軸]を返す

$('#nav-target__skills').click(function(){
  $("html,body").animate({
      scrollTop : positionSkills
  }, {
      queue : false
  });
});

var positionWorks = $(".works").offset().top;　//最初の要素の、ドキュメント上での表示位置[y軸]を返す

$('#nav-target__works').click(function(){
  $("html,body").animate({
      scrollTop : positionWorks
  }, {
      queue : false
  });
});

var positionContact = $(".contact-icon").offset().top;　//最初の要素の、ドキュメント上での表示位置[y軸]を返す

$('#nav-target__contact').click(function(){
  $("html,body").animate({
      scrollTop : positionContact
  }, {
      queue : false
  });
});

///////スクロール////////