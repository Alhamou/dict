<?php error_reporting(0); ?>
<?php
ob_start();


function ad_to_head()
{


        # code...


        $contents = ob_get_contents();
        ob_end_clean();
        //      show all get
        //      print_r($_GET);
        //	echo'<pre>';


        $url = $_GET['word'];
        // 	echo $url;


        echo str_replace("</head>", "
        <meta name='description' content='معنى كلمة {$url} في الألماني , ترجمة كلمة {$url} مع اللفظ, في قاموس الحمو العالمي إبحث عن أي كلمة في الأمثلة من العربي الى باقي اللغات'/>
        <meta property='og:title' content='ترجمة ومعنى كلمة {$url} في اللغة الألمانية - قاموس الحمو'/>
        <meta property='og:description' content='معنى كلمة {$url} في الألمانية, ترجمة كلمة {$url} مع اللفظ, في قاموس الحمو العالمي إبحث عن أي كلمة في الأمثلة من العربي الى باقي اللغات'/>
        <title>ترجمة ومعنى كلمة {$url}  في اللغة الألمانية - قاموس الحمو</title>
        <meta name='twitter:title' property='og:title' content='ترجمة ومعنى كلمة {$url}  في اللغة الألمانية - قاموس الحمو' />
        <meta name='twitter:description' property='og:description' itemprop='description' content='معنى كلمة {$url} في الألمانية , ترجمة كلمة {$url} مع اللفظ, في قاموس الحمو العالمي إبحث عن أي كلمة في الأمثلة من العربي الى باقي اللغات' />
      </head>", $contents);




}
 ?>

 </head>
 <body>
   <?php
  ad_to_head();
  ?>
   <?php include ('include/head-log.php')?>
<option class="option-lang" value="de" selected>Arabic - Deutsch</option>

</select>
</form>
<img src="https://alhamou.com/img/flags/de.svg" alt="Deutsch" class="sllim">
<img src="https://alhamou.com/img/flags/de.svg" alt="Deutsch" class="sllim">

</div>



<?php
$wo = filter_var($_GET['word'], FILTER_SANITIZE_STRING);
$word = trim($wo);
if (isset($_GET)&& $word!=""){



  $sql_1 ="SELECT * FROM  word_germany WHERE arabic_filtered LIKE '$word' OR deutsch_word LIKE '$word' OR arabic_word LIKE '$word' LIMIT 10 ";
  $sql_2 ="SELECT * FROM  word_germany WHERE arabic_filtered LIKE '$word%' AND arabic_filtered NOT LIKE '$word' OR deutsch_word LIKE '$word%' AND deutsch_word NOT LIKE '$word' LIMIT 3 ";
  $sql_3 ="SELECT * FROM  word_germany WHERE arabic_filtered LIKE '$word %' AND arabic_filtered NOT LIKE '$word%' OR deutsch_word LIKE '$word %' AND deutsch_word NOT LIKE '$word%' LIMIT 3 ";

  $stmt_1 = $conn->query($sql_1);
  $stmt_2 = $conn->query($sql_2);
  $stmt_3 = $conn->query($sql_3);


  $leng_1 = $stmt_1->rowCount();

  if($leng_1 > 0){while($row = $stmt_1->fetch()) {

    $spakwordde = $row["deutsch_word"];
    $spakwordar = $row["arabic_filtered"];
    $wordurl = "https://alhamou.com/swen.php?langs=de&word=".$row["deutsch_word"];
    $wordur2 = "https://alhamou.com/swar.php?langs=de&word=".$row["arabic_filtered"];

    include ('xml-result/de-ar-result.php');};
  } else { ///////////////// ELSE SEARCH IN ARABIC WORD
    $sql_7 ="SELECT * FROM  word_germany WHERE german_description_filter LIKE '%$word%' ORDER BY LENGTH(deutsch_word) ASC LIMIT 3 ";
    $stmt_7 = $conn->query($sql_7);
    $leng_7 = $stmt_7->rowCount();

    if($leng_7 > 0){while($row = $stmt_7->fetch()) {

      $spakwordde = $row["deutsch_word"];
      $spakwordar = $row["arabic_filtered"];
      $wordurl = "https://alhamou.com/swen.php?langs=de&word=".$row["deutsch_word"];
      $wordur2 = "https://alhamou.com/swar.php?langs=de&word=".$row["arabic_filtered"];

      include ('xml-result/de-ar-result.php');};
    };};
    ///////////////////////// END 1
    $leng_2 = $stmt_2->rowCount();

    if($leng_2 > 0){while($row = $stmt_2->fetch()) {

      $spakwordde = $row["deutsch_word"];
      $spakwordar = $row["arabic_filtered"];
      $wordurl = "https://alhamou.com/swen.php?langs=de&word=".$row["deutsch_word"];
      $wordur2 = "https://alhamou.com/swar.php?langs=de&word=".$row["arabic_filtered"];

      include ('xml-result/de-ar-result.php');};};
      ///////////////////////// END 2
      $leng_3 = $stmt_3->rowCount();

      if($leng_3 > 0){while($row = $stmt_3->fetch()) {

        $spakwordde = $row["deutsch_word"];
        $spakwordar = $row["arabic_filtered"];
        $wordurl = "https://alhamou.com/swen.php?langs=de&word=".$row["deutsch_word"];
        $wordur2 = "https://alhamou.com/swar.php?langs=de&word=".$row["arabic_filtered"];

        include ('xml-result/de-ar-result.php');};
      }else {
        $sql_4 ="SELECT * FROM  word_germany WHERE arabic_filtered LIKE '%$word%' AND arabic_filtered NOT LIKE '$word' OR deutsch_word LIKE '%$word%' AND deutsch_word NOT LIKE '$word' LIMIT 4 ";
        $stmt_4 = $conn->query($sql_4);

        $leng_4 = $stmt_4->rowCount();

        if($leng_4 > 0){while($row = $stmt_4->fetch()) {

          $spakwordde = $row["deutsch_word"];
          $spakwordar = $row["arabic_filtered"];
          $wordurl = "https://alhamou.com/swen.php?langs=de&word=".$row["deutsch_word"];
          $wordur2 = "https://alhamou.com/swar.php?langs=de&word=".$row["arabic_filtered"];

          include ('xml-result/de-ar-result.php');};
        };};
        ///////////////////////// END 3

 

        ////////////////////////////// STAR SIMILAR TEXT //////////////////////////////////////
        $e = $leng_1 . $leng_2 . $leng_3 . $leng_4 . $leng_7;
        if ($e >= 1) { } else { // STAR IF CONDITION
          echo "<div class='div-mean-word'><span id='doYouMean'>$word</span><p id='doYouMeanThis'>خطأ في الكلمة, لكن ربما تجدها هنا!!</p></div>";

          $ssmean = $conn->query('SELECT * FROM word_germany_mean');
          foreach( $ssmean as $term ) {$terms[ $term['arabic_filtered'] ] = $term;};
            foreach ($terms as $value) {
              $find = $word;
              $value_de = $value['arabic_filtered'];
              $result_find = 0;
              similar_text($value_de,$find,$result_find);
              if ($result_find >=80) {
                $spakwordde = $value["deutsch_word"];
                $spakwordar = $value["arabic_filtered"];
                $wordur2 = "https://alhamou.com/swar.php?langs=de&word=".$value["arabic_filtered"];
                include ('mean/de-ar-mean-result/mean-result-ar.php');
              };};

              $ssmean = $conn->query('SELECT * FROM word_germany_mean');
              foreach( $ssmean as $term ) {$terms[ $term['deutsch_word'] ] = $term;};
                foreach ($terms as $value) {
                  $find = $word;
                  $value_de = $value['deutsch_word'];
                  $result_find = 0;
                  similar_text($value_de,$find,$result_find);
                  if ($result_find >=80) {
                    $spakwordde = $value["deutsch_word"];
                    $spakwordar = $value["arabic_filtered"];
                    $wordur1 = "https://alhamou.com/swen.php?langs=de&word=".$value["deutsch_word"];
                    include ('mean/de-ar-mean-result/mean-result-de.php');
                  };};
            };// END IF CONDITION
              ////////////////////////////// END SIMILAR TEXT ///////////////////////////////////////




};// نهاية ال isset
include ("include/footer.php");
include ('include/ads.php') /* GOOGLE ADS */?>


<script>
$(function() {
$( ".txtsrch" ).autocomplete({
source: 'https://alhamou.com/ajax/de-ar-ajax.php' ,
minLength : 1
});
});
</script>

</body>
</html>