
<title>ترجمة كلمة <?php echo $word ?> في اللغة  الألمانية - قاموس الحمو</title>

</head>
<body>
  <?php
  include ('include/head-log.php')?>


  <option class="option-lang" value="de" selected>Arabic - Deutsch</option>

</select>
</form>
<img src="https://alhamou.com/img/flags/de.svg" alt="Deutsch" class="sllim">

</div>




<?php


$wo = htmlspecialchars($_GET['word'], ENT_QUOTES, 'UTF-8');
$word = trim($wo);
if (isset($_GET)&& $word!=""){



  $stmt_1 = $conn->prepare("SELECT * FROM  word_germany WHERE arabic_filtered LIKE '$word' LIMIT 10 ");
  $stmt_2 = $conn->prepare("SELECT * FROM  word_germany WHERE arabic_filtered LIKE '$word%' AND arabic_filtered NOT LIKE '$word' LIMIT 3 ");
  $stmt_3 = $conn->prepare("SELECT * FROM  word_germany WHERE arabic_filtered LIKE '% $word' AND arabic_filtered NOT LIKE '$word%' LIMIT 5 ");

  $stmt_1->execute();
  $stmt_2->execute();
  $stmt_3->execute();



  $leng_1 = $stmt_1->rowCount();

  if($leng_1 > 0){while($row = $stmt_1->fetch()) {

    $spakwordde = $row["deutsch_word"];
    $spakwordar = $row["arabic_filtered"];
    $wordurl = "swen.php?langs=de&word=".$row["deutsch_word"];
    $wordur2 = "swar.php?langs=de&word=".$row["arabic_filtered"];

    include ('xml-result/de-ar-result.php');};
  } else { ///////////////// ELSE SEARCH IN ARABIC WORD
    $stmt_7   = $conn->prepare("SELECT * FROM  word_germany WHERE arabic_word LIKE '$word' LIMIT 10 ");
    $stmt_7->execute();
    $leng_7 = $stmt_7->rowCount();

    if($leng_7 > 0){while($row = $stmt_7->fetch()) {

      $spakwordde = $row["deutsch_word"];
      $spakwordar = $row["arabic_filtered"];
      $wordurl = "swen.php?langs=de&word=".$row["deutsch_word"];
      $wordur2 = "swar.php?langs=de&word=".$row["arabic_filtered"];

      include ('xml-result/de-ar-result.php');};
    };};
    ///////////////////////// END 1
    $leng_2 = $stmt_2->rowCount();

    if($leng_2 > 0){while($row = $stmt_2->fetch()) {

      $spakwordde = $row["deutsch_word"];
      $spakwordar = $row["arabic_filtered"];
      $wordurl = "swen.php?langs=de&word=".$row["deutsch_word"];
      $wordur2 = "swar.php?langs=de&word=".$row["arabic_filtered"];

      include ('xml-result/de-ar-result.php');};};
      ///////////////////////// END 2
      $leng_3 = $stmt_3->rowCount();

      if($leng_3 > 0){while($row = $stmt_3->fetch()) {

        $spakwordde = $row["deutsch_word"];
        $spakwordar = $row["arabic_filtered"];
        $wordurl = "swen.php?langs=de&word=".$row["deutsch_word"];
        $wordur2 = "swar.php?langs=de&word=".$row["arabic_filtered"];

        include ('xml-result/de-ar-result.php');};
      }else {
        $stmt_4 = $conn->prepare("SELECT * FROM  word_germany WHERE arabic_filtered LIKE '%$word%' AND arabic_filtered NOT LIKE '$word' LIMIT 4 ");
        $stmt_4->execute();

        $leng_4 = $stmt_4->rowCount();

        if($leng_4 > 0){while($row = $stmt_4->fetch()) {

          $spakwordde = $row["deutsch_word"];
          $spakwordar = $row["arabic_filtered"];
          $wordurl = "swen.php?langs=de&word=".$row["deutsch_word"];
          $wordur2 = "swar.php?langs=de&word=".$row["arabic_filtered"];

          include ('xml-result/de-ar-result.php');};
        };};
        ///////////////////////// END 3


        ////////////////////////////// STAR SIMILAR TEXT //////////////////////////////////////
        $e = $leng_1 . $leng_2 . $leng_3 . $leng_4 . $leng_7;
        if ($e >= 1) { } else { // STAR IF CONDITION
          echo "<div class='div-mean-word'><span id='doYouMean'>$word</span><p id='doYouMeanThis'>خطأ في الكلمة, لكن ربما تجدها هنا!!</p></div>";

          $ssmean = $conn->prepare('SELECT * FROM word_germany_mean');
          $ssmean->execute();

          foreach( $ssmean as $term ) {$terms[ $term['arabic_filtered'] ] = $term;};
            foreach ($terms as $value) {
              $find = $word;
              $value_de = $value['arabic_filtered'];
              $result_find = 0;

              similar_text($value_de,$find,$result_find);

              if ($result_find >=80) {
                $spakwordde = $value["deutsch_word"];
                $spakwordar = $value["arabic_filtered"];
                $wordur2 = "swar.php?langs=de&word=".$value["arabic_filtered"];
                include ('mean/de-ar-mean-result/mean-result-ar.php');
              };};
            };// END IF CONDITION
              ////////////////////////////// END SIMILAR TEXT ///////////////////////////////////////








            };// نهاية ال isset



?>
<?php
include ("include/footer.php");

include ('include/ads.php') /* GOOGLE ADS */?>
<script>
$(function() {
$( ".txtsrch" ).autocomplete({
  source: 'ajax/de-ar-ajax.php' ,
  minLength : 1
});
});
</script>

</body>
</html>
