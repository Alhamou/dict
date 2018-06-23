<?php  ?>
<?php include './include/header.php' ?>
  <title>قاموس الحمو عربي عالمي</title>
</head>

<body>

  <div class="img-logo">
    <a href="https://alhamou.com"><img class="logo"src="https://alhamou.com/img/log.svg" alt="" width="260px"></a>
  </div>
  <div class="container-form">

      <img src="https://alhamou.com/img/flags/<?php

       if (isset($_COOKIE['lang']) ? $lS = $_COOKIE['lang'] : $lS = 'de');
       echo $lS;?>.svg" alt="Deutsch" class="sllim">

    <form class="formhome testlang" action="https://alhamou.com/search.php" method="GET">
      <i class="fa fa-keyboard-o keyboard-form"></i>
      <i class="fa fa-times x-times" ></i>
      <input type="search" name="word" dir="auto" autofocus="on" autocomplete="off" class="txtsrch input">
      <button type="submit" class="button-form submit-form"><i class="fa fa-search"></i></button>
      <select id="select-lang" name="langs" class="select-lang">
        <?php
        if($lS == 'de'){
        echo '<option class="option-lang" value="de" selected>Arabic - Deutsch</option>';
      } elseif($lS == 'en') {
        echo '<option class="option-lang" value="en" selected>Arabic - English</option>';
      } elseif($lS == 'fr') {
        echo '<option class="option-lang" value="fr" selected>Arabic - French</option>';
      } elseif($lS == 'tr') {
        echo '<option class="option-lang" value="tr" selected>Arabic - Turki</option>';
      } elseif($lS == 'sw') {
        echo '<option class="option-lang" value="sw" selected>Arabic - Sweden</option>';
      } elseif($lS == 'sp') {
        echo '<option class="option-lang" value="sp" selected>Arabic - Spanish</option>';
      } elseif($lS == 'ru') {
        echo '<option class="option-lang" value="ru" selected>Arabic - Russian</option>';
      } elseif($lS == 'it') {
        echo '<option class="option-lang" value="it" selected>Arabic - Italian</option>';
      } elseif($lS == 'fa') {
        echo '<option class="option-lang" value="fa" selected>Arabic - Farsi</option>';
      } elseif($lS == 'mc') {
        echo '<option class="option-lang" value="mc" selected>En - Ar قاموس طبي</option>';
      };
         ?>
        <option class="option-lang" value="de">Arabic - Deutsch</option>
        <option class="option-lang" value="en">Arabic - English</option>
        <option class="option-lang" value="fr">Arabic - French</option>
        <option class="option-lang" value="tr">Arabic - Turki</option>
        <option class="option-lang" value="sw">Arabic - Sweden</option>
        <option class="option-lang" value="sp">Arabic - Spanish</option>
        <option class="option-lang" value="ru">Arabic - Russian</option>
        <option class="option-lang" value="it">Arabic - Italian</option>
        <option class="option-lang" value="fa">Arabic - Farsi</option>
        <option class="option-lang" value="mc">En - Ar قاموس طبي</option>
      </select>
    </form>
  </div>



  <center>
    <?php if (!empty($_COOKIE['lang'])): ?>
    <div class="flagsbox box-cookie">
      <a href="unsetcookie.php" class="unsetcookie"><i class="fa fa-trash-o"></a></i><span class=delall>افراغ الحقل</span>


      <p class="sglalbhth">سجل البحث, أخر 30 يوم</p>
      <br><br>
    <?php
    $array = array_reverse($_COOKIE);

    unset($array['_ga']);
    unset($array['_gid']);
    unset($array['lang']);
    unset($array['_gat_gtag_UA_108059288_1']);

    $array_slice = array_slice($array, 0, 50);
    foreach ($array_slice as $key => $value) {
      $end = end(explode("_",$key));

      echo '<p class="cookie"><a href="search.php?word='.$value.'&langs='.$end.'">'.$value .'</a></p>' ;
    }

     ?>



    </div>
    <br>
  <?php endif; ?>

    <div class="flagsbox">
      <p  class="title"><i class=" fa fa-language" ></i>اللغات المتوفرة في القاموس </p>
      <div id="click-de"class="langstitle"><div class="flog"><img src="https://alhamou.com/img/flags/de.svg" alt="Deutsch" class="icon"></div><div class="lang">Arabic - Deutsch</div></div>
      <div id="click-en"class="langstitle"><div class="flog"><img src="https://alhamou.com/img/flags/en.svg" alt="English" class="icon"></div><div class="lang">Arabic - English</div></div>
      <div id="click-fr"class="langstitle"><div class="flog"><img src="https://alhamou.com/img/flags/fr.svg" alt="French" class="icon"></div><div class="lang">Arabic - French</div></div>
      <div id="click-tr"class="langstitle"><div class="flog"><img src="https://alhamou.com/img/flags/tr.svg" alt="Turki" class="icon"></div><div class="lang">Arabic -Turki</div></div>
      <div id="click-sw"class="langstitle"><div class="flog"><img src="https://alhamou.com/img/flags/sw.svg" alt="Sweden" class="icon"></div><div class="lang">Arabic - Sweden</div></div>
      <div id="click-sp"class="langstitle"><div class="flog"><img src="https://alhamou.com/img/flags/sp.svg" alt="Spanish" class="icon"></div><div class="lang">Arabic -Spanish</div></div>
      <div id="click-ru"class="langstitle"><div class="flog"><img src="https://alhamou.com/img/flags/ru.svg" alt="Russian" class="icon"></div><div class="lang">Arabic -Russian</div></div>
      <div id="click-it"class="langstitle"><div class="flog"><img src="https://alhamou.com/img/flags/it.svg" alt="Italian" class="icon"></div><div class="lang">Arabic -Italian</div></div>
      <div id="click-fa"class="langstitle"><div class="flog"><img src="https://alhamou.com/img/flags/fa.svg" alt="Farsi" class="icon"></div><div class="lang">Arabic -Farsi</div></div>
      <div id="click-mc"class="langstitle"><div class="flog"><img src="https://alhamou.com/img/flags/en.svg" alt="English" class="icon"></div><div class="lang">En - Ar قاموس طبي  </div></div>

    </div>


    <div class="examp-langs">
      <div class="examp-title">
        <label class="lable"><i class="fa fa-text-width" ></i>إبحث عن كلمة في الأمثلة</label>
      </div>
      <div>
        <a href="./examples/de-ar-ex-word-search.php"><img src="img/flags/de.svg" alt="Deutsch" class="flags"></a>
        <a href="./examples/en-ar-ex-word-search.php"><img src="img/flags/en.svg" alt="English" class="flags"></a>
        <a href="./examples/fr-ar-ex-word-search.php"><img src="img/flags/fr.svg" alt="France" class="flags"></a>
        <a href="./examples/tr-ar-ex-word-search.php"><img src="img/flags/tr.svg" alt="Turkey" class="flags"></a>
        <a href="./examples/sp-ar-ex-word-search.php"><img src="img/flags/es.svg" alt="Spain" class="flags"></a>
        <a href="./examples/it-ar-ex-word-search.php"><img src="img/flags/it.svg" alt="Italia" class="flags"></a>
        <a href="./examples/cn-ar-ex-word-search.php"><img src="img/flags/cn.svg" alt="China" class="flags"></a>
        <a href="./examples/sw-ar-ex-word-search.php"><img src="img/flags/sw.svg" alt="Sweden" class="flags"></a>
        <a href="./examples/no-ar-ex-word-search.php"><img src="img/flags/no.svg" alt="Norway" class="flags"></a>
        <a href="./examples/da-ar-ex-word-search.php"><img src="img/flags/dk.svg" alt="Denmark" class="flags"></a>
        <a href="./examples/jp-ar-ex-word-search.php"><img src="img/flags/jp.svg" alt="Japan" class="flags"></a>
        <a href="./examples/ru-ar-ex-word-search.php"><img src="img/flags/ru.svg" alt="Russia" class="flags"></a>
        <a href="./examples/ko-ar-ex-word-search.php"><img src="img/flags/kr.svg" alt="Korea" class="flags"></a>
        <a href="./examples/pt-ar-ex-word-search.php"><img src="img/flags/br.svg" alt="Brazil" class="flags"></a>
        <a href="#"><img src="img/flags/bd.svg" alt="Bangladesh" class="flags"></a>
        <a href="./examples/gr-ar-ex-word-search.php"><img src="img/flags/gr.svg" alt="Greece" class="flags"></a>
        <a href="#"><img src="img/flags/ae.svg" alt="United Arab" class="flags"></a>
        <a href="./examples/fa-ar-ex-word-search.php"><img src="img/flags/ir.svg" alt="Iran" class="flags"></a>
        <a href="./examples/hin-ar-ex-word-search.php"><img src="img/flags/in.svg" alt="India" class="flags"></a>
        <a href="./examples/pt-ar-ex-word-search.php"><img src="img/flags/pt.svg" alt="Portugal" class="flags"></a>
      </div>

    </div>
    <p class="add">سيتم إضافة بعض اللغات على القائمة قريباً جداً</p>

    <?php include ('include/ads.php') /* GOOGLE ADS */?>

    <div class="hidd">
      <?php include "share.php" ?>
    </div>
    <div class="apps">
      <a href="https://goo.gl/p9jBZY" target="_blank"><img class="googleapp" src="https://alhamou.com/img/google-play-badge.svg" /></a>
      <a href="https://goo.gl/p9jBZY" target="_blank"><img class="appsimg" src="img/alhamou Qamus.png" /></a>
      <p class="download"><a href="https://goo.gl/p9jBZY"><span style="color: red; font-size: 15px;">Now!</span></a> Download our App Alhamou Dictionary from Google Play</p>
    </div>
    <div class="footer">
      <footer class=" ">
          <!-- <a target="_blank" href="https://www.facebook.com/alhamou/"><span class="facebook">F</span></a> -->
           &copy; <?php echo date('Y'); ?> Ziad Alhamou <a style="color:#d2d2d2; padding-left:10px;" href="https://alhamou.com/footer/Usage_Agreement.php">  سياسة الخصوصية</a><a style="color:#d2d2d2;" href="https://alhamou.com/footer/privacy.php">إتفاقية الاستخدام  </a></footer>
    </div>

  </center>


<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/codeautocompletejquery.js"></script>
<script src="js/autocompletejquery.js"></script>
<script src="js/custom.js"></script>
</body>
</html>


  <script>
    $(function() {


      $(".txtsrch").keydown(function(){ // Star func key

        var en = $('#select-lang').val();


        if ( en == 'en') { // Star else
          $( ".txtsrch" ).autocomplete({
            source: 'ajax/en-ar-ajax.php' ,
            minLength : 1
          });

        } else if ( en == 'fr') {
          $( ".txtsrch" ).autocomplete({
            source: 'ajax/fr-ar-ajax.php' ,
            minLength : 1
          });

        } else if ( en == 'sw') {
          $( ".txtsrch" ).autocomplete({
            source: 'ajax/sw-ar-ajax.php' ,
            minLength : 1
          });

        } else if ( en == 'tr') {
          $( ".txtsrch" ).autocomplete({
            source: 'ajax/tr-ar-ajax.php' ,
            minLength : 1
          });

        } else if ( en == 'it') {
          $( ".txtsrch" ).autocomplete({
            source: 'ajax/it-ar-ajax.php' ,
            minLength : 1
          });

        } else if ( en == 'ru') {
          $( ".txtsrch" ).autocomplete({
            source: 'ajax/ru-ar-ajax.php' ,
            minLength : 1
          });

        } else if ( en == 'sp') {
          $( ".txtsrch" ).autocomplete({
            source: 'ajax/sp-ar-ajax.php' ,
            minLength : 1
          });

        } else if ( en == 'mc') {
          $( ".txtsrch" ).autocomplete({
            source: 'ajax/mc-ar-ajax.php' ,
            minLength : 1
          });
        } else if ( en == 'fa') {
          $( ".txtsrch" ).autocomplete({
            source: 'ajax/fa-ar-ajax.php' ,
            minLength : 1
          });

        } else {
          $( ".txtsrch" ).autocomplete({
            source: 'ajax/de-ar-ajax.php' ,
            minLength : 1
          });

        }; // End else

      }); // End // func key

    }); // End START FUNCTION
  </script>

</body>
</html>
