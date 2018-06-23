<?php

$word = $_GET['word'];// كلمة البحث المفلترة النهائية الجاهزة للبحث
if (isset($_GET)&& $word!=""){

  echo "<div class='div-mean-word'><span id='doYouMean'>$word</span><p id='doYouMeanThis'>خطأ في الكلمة, لكن ربما تجدها هنا ؟</p></div>";

    $terms = [];
    $sql_mean = 'SELECT * FROM word_germany_mean ';
    $sql_mean = $conn->query($sql_mean);


    foreach( $sql_mean as $term ) {

        $terms[ $term['arabic_filtered'] ] = $term;
    };

    foreach ($terms as $value) {
           $find = $word;

             $value_ar = $value['arabic_filtered'];

              $result_find = 0;

             similar_text($value_ar,$find,$result_find);

              if ($result_find >=80) {

                $spakwordde = $value["deutsch_word"];
                $spakwordar = $value["arabic_filtered"];
                $wordur2 = "swar.php?langs=de&word=". $value["arabic_filtered"]; // جلب الريسيرش للعربي
                include 'de-ar-mean-result/mean-result-ar.php';
              } ;

    };



        // Array of terms
        $terms = [];
        $sql_mean = 'SELECT * FROM word_germany_mean ';
        $sql_mean = $conn->query($sql_mean);


        foreach( $sql_mean as $term ) {
            $terms[ $term['deutsch_word'] ] = $term;
        };

        foreach ($terms as $value) {

               $find = $word;

                 $value_de = $value['deutsch_word'];

                  $result_find = 0;


                 similar_text($value_de,$find,$result_find);

                  if ($result_find >=80) {

                    $spakwordde = $value["deutsch_word"];
                    $spakwordar = $value["arabic_filtered"];
                    $wordurl = "swen.php?langs=de&word=".$value["deutsch_word"]; // جلب الريسيرش للاجنبي

                    include 'de-ar-mean-result/mean-result-de.php';
                  } ;


        };

  };



?>
