<head>
<title>ترجمة ومعنى كلمة <?php echo $word ?>  في القاموس الطبي - قاموس الحمو</title>
</head>
<section class="show-reletev">
</section>
<center class="head-logo hid-reletev">
<a href="http://www.alhamou.com"><img class="logo"src="img/log.svg" alt="" width="260px"></a>
</center>
<div class="container-form">
  <form class="formhome testlang" action="search.php" method="GET">
    <i class="fa fa-keyboard-o keyboard-form"></i>
    <i class="fa fa-times x-times" ></i>
    <input type="search" name="word" dir="auto" value="<?php echo $wo = $_GET['word']; ?>" autofocus="on" autocomplete="off" class="txtsrch input">
    <button type="submit" class="submit-form"><i class="fa fa-search"></i></button>
    <select id="select-lang" name="langs" class="select-lang">
      <option class="option-lang" value="mc">En - Ar قاموس طبي</option>

    </select>
  </form>
  <img src="https://alhamou.com/img/flags/gb.svg" alt="English" class="sllim">

</div>

<?php
include ('include/connect.php');
$wo = filter_var($_GET['word'], FILTER_SANITIZE_STRING);
$word = trim($wo);
if (isset($_GET)&& $word!=""){

$i = 0; // فاريبل للاستخدام الشرط فقط

$sql_1 ="SELECT * FROM  medicine WHERE arabic_word_fl LIKE '$word' OR english_word LIKE '$word' or arabic_word LIKE '$word' OR LIMIT 8 ";
$sql_2 ="SELECT * FROM  medicine WHERE arabic_word_fl LIKE '$word %' OR english_word LIKE '$word %' ORDER BY LENGTH(english_word) DESC  LIMIT 4 ";
$sql_3 ="SELECT * FROM  medicine WHERE arabic_word_fl LIKE '% $word' AND arabic_word_fl NOT LIKE '$word' OR english_word LIKE '% $word' AND english_word NOT LIKE '$word' LIMIT 4 ";


$stmt_1 = $conn->query($sql_1);
$stmt_2 = $conn->query($sql_2);
$stmt_3 = $conn->query($sql_3);


$leng_1 = $stmt_1->rowCount();
if($leng_1 > 0){while($row = $stmt_1->fetch()) {

$spakwordde = $row["english_word"];
$spakwordar = $row["arabic_word_fl"];
$wordurl = "https://alhamou.com/swen.php?langs=mc&word=".$row["english_word"];
$wordur2 = "https://alhamou.com/swar.php?langs=mc&word=".$row["arabic_word_fl"];


include ('xml-result/mc-ar-result.php');};
};
///////////////////////// END 1

$leng_2 = $stmt_2->rowCount();
if($leng_2 > 0){while($row = $stmt_2->fetch()) {

$spakwordde = $row["english_word"];
$spakwordar = $row["arabic_word_fl"];
$wordurl = "https://alhamou.com/swen.php?langs=mc&word=".$row["english_word"];
$wordur2 = "https://alhamou.com/swar.php?langs=mc&word=".$row["arabic_word_fl"];
include ('xml-result/mc-ar-result.php');};};
///////////////////////// END 2
$leng_3 = $stmt_3->rowCount();
if($leng_3 > 0){while($row = $stmt_3->fetch()) {

$spakwordde = $row["english_word"];
$spakwordar = $row["arabic_word_fl"];
$wordurl = "https://alhamou.com/swen.php?langs=mc&word=".$row["english_word"];
$wordur2 = "https://alhamou.com/swar.php?langs=mc&word=".$row["arabic_word_fl"];
include ('xml-result/mc-ar-result.php');};
} else { ///////////////// ELSE SEARCH IN ARABIC WORD
$sql_4 ="SELECT * FROM  medicine WHERE arabic_word_fl LIKE '%$word%' AND arabic_word_fl NOT LIKE '$word' OR english_word LIKE '%$word%' AND english_word NOT LIKE '$word' LIMIT 4 ";
$stmt_4 = $conn->query($sql_4);

$leng_4 = $stmt_4->rowCount();
if($leng_4 > 0){while($row = $stmt_4->fetch()) {
$spakwordde = $row["english_word"];
$spakwordar = $row["arabic_word_fl"];
$wordurl = "https://alhamou.com/swen.php?langs=mc&word=".$row["english_word"];
$wordur2 = "https://alhamou.com/swar.php?langs=mc&word=".$row["arabic_word_fl"];
include ('xml-result/mc-ar-result.php');};};};
///////////////////////// END 3



////////////////////////////// STAR SINILAR TEXT //////////////////////////////////////
$e = $leng_1 . $leng_2 . $leng_3 . $leng_4;
if ($e >= 1) { } else { // STAR IF CONDITION
echo "<div class='div-mean-word'><span id='doYouMean'>$word</span><p id='doYouMeanThis'>خطأ في الكلمة, لكن ربما تجدها هنا!!</p></div>";

$ssmean = $conn->query('SELECT * FROM medicine');
foreach( $ssmean as $term ) {
  $terms[ $term['arabic_word_fl'] ] = $term;};
  foreach ($terms as $value) {
    $find = $word;
    $value_de = $value['arabic_word_fl'];
    $result_find = 0;
    similar_text($value_de,$find,$result_find);
    if ($result_find >=80) {
      $spakwordde = $value["english_word"];
      $spakwordar = $value["arabic_word_fl"];
      $wordur2 = "https://alhamou.com/swar.php?langs=mc&word=".$value["arabic_word_fl"];
      include ('mean/mc-ar-mean-result/mean-result-ar.php');
    };};
$ssmean = $conn->query('SELECT * FROM medicine');
foreach( $ssmean as $term ) {
  $terms[ $term['english_word'] ] = $term;};
  foreach ($terms as $value) {
    $find = $word;
    $value_de = $value['english_word'];
    $result_find = 0;
    similar_text($value_de,$find,$result_find);
    if ($result_find >=80) {
      $spakwordde = $value["english_word"];
      $spakwordar = $value["arabic_word_fl"];
      $wordur2 = "https://alhamou.com/swen.php?langs=mc&word=".$value["english_word"];
      include ('mean/mc-ar-mean-result/mean-result-en.php');
    };};

  }; // END IF CONDITION
    ////////////////////////////// END SINILAR TEXT ///////////////////////////////////////



};// نهاية ال isset
include ("include/footer.php");
include ('include/ads.php') /* GOOGLE ADS */?>

 <script>
  $(function() {
  $( ".txtsrch" ).autocomplete({
  source: 'https://alhamou.com/ajax/mc-ar-ajax.php' ,
  minLength : 1
  });
  });
  </script>

  </body>
  </html>

