<?php error_reporting(0);



$wo = $_GET['word'];// كلمة البحث الاتية من ال input
$select = $_GET['langs'];
$trip = strip_tags($wo); // مسح جميع الأكواد
$strlen = strlen($trip); // عدد حروف الكلمة
if ($strlen >1){// دالة شرطية بعدد حروف  كلمة البحث
$word = trim($trip);// كلمة البحث المفلترة النهائية الجاهزة للبحث
if (isset($_GET)&& $word!=""){

  echo "<div class='div-mean-word'><span id='doYouMean'>$word</span><p id='doYouMeanThis'>خطأ في الكلمة, لكن ربما تجدها هنا ؟</p></div>";


    // Array of terms
    $terms = [];
    $sql_mean = 'SELECT * FROM word_sweden_mean';
    $sql_mean = mysqli_query( $conn, $sql_mean );
    $sql_mean = $sql_mean->fetch_all(MYSQLI_ASSOC);

    foreach( $sql_mean as $term ) {

        $terms[ $term['arabic_word_fl'] ] = $term;
    };

    foreach ($terms as $value) {
           $find = $word;

             $value_ar = $value['arabic_word_fl'];

              $result_find = 0;

             similar_text($value_ar,$find,$result_find);

              if ($result_find >=80) {

                $spakwordde = $value["sweden_word"];
                $spakwordar = $value["arabic_word_fl"];
                $wordur2 = "swar.php?langs=".$select."&word=".$value["arabic_word_fl"]; // جلب الريسيرش للعربي
                include 'sw-ar-mean-result/mean-result-ar.php';
              } ;

    };



        // Array of terms
        $terms = [];
        $sql_mean = 'SELECT * FROM word_sweden_mean ';
        $sql_mean = mysqli_query( $conn, $sql_mean );
        $sql_mean = $sql_mean->fetch_all(MYSQLI_ASSOC);

        foreach( $sql_mean as $term ) {
            $terms[ $term['sweden_word'] ] = $term;
        };

        foreach ($terms as $value) {

               $find = $word;

                 $value_en = $value['sweden_word'];

                  $result_find = 0;


                 similar_text($value_en,$find,$result_find);

                  if ($result_find >=80) {

                    $spakwordde = $value["sweden_word"];
                    $spakwordar = $value["arabic_word_fl"];
                    $wordurl = "swen.php?langs=".$select."&word=".$value["sweden_word"]; // جلب الريسيرش للاجنبي

                    include 'sw-ar-mean-result/mean-result-sw.php';
                  } ;


        };

  };  };



?>
