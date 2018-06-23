/* Global $() */
$(function(){


  $('#click-de').on("click" , function(){

    $(".sllim").attr("src","img/flags/de.svg");
    $('#select-lang').val('de');

  });

  $('#click-en').on("click" , function(){

    $(".sllim").attr("src","img/flags/en.svg");
    $('#select-lang').val('en');

  });

  $('#click-fa').on("click" , function(){

    $(".sllim").attr("src","img/flags/fa.svg");
    $('#select-lang').val('fa');

  });

  $('#click-fr').on("click" , function(){

    $(".sllim").attr("src","img/flags/fr.svg");
    $('#select-lang').val('fr');
  });

  $('#click-tr').on("click" , function(){

    $(".sllim").attr("src","img/flags/tr.svg");
    $('#select-lang').val('tr');
  });

  $('#click-sw').on("click" , function(){

    $(".sllim").attr("src","img/flags/sw.svg");
    $('#select-lang').val('sw');
  });

  $('#click-it').on("click" , function(){

    $(".sllim").attr("src","img/flags/it.svg");
    $('#select-lang').val('it');
  });

  $('#click-ru').on("click" , function(){

    $(".sllim").attr("src","img/flags/ru.svg");
    $('#select-lang').val('ru');
  });

  $('#click-sp').on("click" , function(){

    $(".sllim").attr("src","img/flags/sp.svg");
    $('#select-lang').val('sp');
  });

  $('#click-mc').on("click" , function(){

    $(".sllim").attr("src","img/flags/en.svg");
    $('#select-lang').val('mc');
  });

  $('#click-de').mouseenter(function(){
    $(this).css("background","rgb(200, 237, 244)");
  });
  $('#click-de').mouseleave(function(){
    $(this).css("background","rgba(236, 236, 236, 0.61)");
  });
  $('#click-en').mouseenter(function(){
    $(this).css("background","rgb(200, 237, 244)");
  });
  $('#click-en').mouseleave(function(){
    $(this).css("background","rgba(236, 236, 236, 0.61)");
  });
  $('#click-fr').mouseenter(function(){
    $(this).css("background","rgb(200, 237, 244)");
  });
  $('#click-fr').mouseleave(function(){
    $(this).css("background","rgba(236, 236, 236, 0.61)");
  });
  $('#click-fa').mouseenter(function(){
    $(this).css("background","rgb(200, 237, 244)");
  });
  $('#click-fa').mouseleave(function(){
    $(this).css("background","rgba(236, 236, 236, 0.61)");
  });
  $('#click-tr').mouseenter(function(){
    $(this).css("background","rgb(200, 237, 244)");
  });
  $('#click-tr').mouseleave(function(){
    $(this).css("background","rgba(236, 236, 236, 0.61)");
  });
  $('#click-sw').mouseenter(function(){
    $(this).css("background","rgb(200, 237, 244)");
  });
  $('#click-sw').mouseleave(function(){
    $(this).css("background","rgba(236, 236, 236, 0.61)");
  });
  $('#click-it').mouseenter(function(){
    $(this).css("background","rgb(200, 237, 244)");
  });
  $('#click-it').mouseleave(function(){
    $(this).css("background","rgba(236, 236, 236, 0.61)");
  });
  $('#click-ru').mouseenter(function(){
    $(this).css("background","rgb(200, 237, 244)");
  });
  $('#click-ru').mouseleave(function(){
    $(this).css("background","rgba(236, 236, 236, 0.61)");
  });
  $('#click-sp').mouseenter(function(){
    $(this).css("background","rgb(200, 237, 244)");
  });
  $('#click-sp').mouseleave(function(){
    $(this).css("background","rgba(236, 236, 236, 0.61)");
  });
  $('#click-mc').mouseenter(function(){
    $(this).css("background","rgb(200, 237, 244)");
  });
  $('#click-mc').mouseleave(function(){
    $(this).css("background","rgba(236, 236, 236, 0.61)");
  });
  // Star Input Length gretten Than alse 0 Char

  $('.submit-form,.exhead,.inexhead').on("click", function(e){

    var sub = $('.txtsrch').val().length;

    if (sub >= 1){

    }else{e.preventDefault();};

  })


  // End Input Length gretten Than alse 0 Char

  ////////////// Star keyboard
  $('.key').on("click", function(e){
    e.preventDefault();
    var $inputValue = $('.txtsrch').val();
    $('.txtsrch').val($inputValue + $(this).text());
  })

  $('.keyboard').on("click",function(){

    $('.conkey').toggle();
  })
  $('.keyc').on("click",function(){
    $('.conkey').toggle();
  });
  ////////////// Emd keyboard

  ////////////// Star check
  $('.submit-form').on("click",function(){
    var ar = $('.txtsrch').val();
    arabic = /[\u0600-\u06FF]/;
    res = arabic.test(ar);

    if (res == true) {
      $('.testlang').attr("action","https://alhamou.com/swar.php")
    } else {
      $('.testlang').attr("action","https://alhamou.com/swen.php")
    }

  });

  $('.exhead').on("click",function(){
    var ar = $('.txtsrch').val();
    arabic = /[\u0600-\u06FF]/;
    res = arabic.test(ar);

    if (res == true) {
      $('.testlang').attr("action","https://alhamou.com/exswar.php")
    } else {
      $('.testlang').attr("action","https://alhamou.com/exswen.php")
    }

  });
  $('.inexhead').on("click",function(){
    var ar = $('.txtsrch').val();
    arabic = /[\u0600-\u06FF]/;
    res = arabic.test(ar);

    if (res == true) {
      $('.testlang').attr("action","./exswar.php")
    } else {
      $('.testlang').attr("action","./exswen.php")
    }

  });

  /////////// End check

  // Ster input Clrear

  $('.input').keyup(function(){

    var ar = $('.input').val();
    arabic = /[\u0600-\u06FF]/;
    res = arabic.test(ar);

    if (res == true ) {

      $('.x-times').addClass('x-en');
      $('.input').removeClass('texten');
      $('.input').addClass('textar');

    } else if (!res == true) {

      $('.x-times').removeClass('x-en');
      $('.input').removeClass('textar');
      $('.input').addClass('texten');
    };

  });// End Function Arabiv check lang



  $('.input').keyup(function(){

    var inputkey = $('.input').val();
    var length = inputkey.length;

    if (length == 0 ) {

      $('.x-times').css("display","none");

    } else {
      $('.x-times').css("display","block");
    }
  });

  $('.x-times').on("click",function(){

    $('.input').val('');
    $('.x-times').toggle();
    $('.input').focus();


  });


  var allinput = $('.input').val();
  var lengallinput = allinput.length;
  if (lengallinput == 0) {

  }else {

    var ar = $('.input').val();
    arabic = /[\u0600-\u06FF]/;
    res = arabic.test(ar);

    if (res == true )  {

      $('.x-times').addClass('x-en');
      $('.x-times').css("display","block");
    } else if (!res == true ) {
      $('.x-times').css("display","block");
      $('.input').removeClass('textar');
      $('.input').addClass('texten');
    };

  };




  // End input Clrear

});
