<?php error_reporting(0); ?>


<title>ترجمة كلمة <?php echo $word ?> في اللغة  الإيطالية - قاموس الحمو</title>
</head>
<body>
<?php
include 'include/head-log.php';?>

        <option class="option-lang" value="it" selected>Arabic - Italian</option>

      </select>
    </form>
    <img src="https://alhamou.com/img/flags/it.svg" alt="Italian" class="sllim">

  </div>

<?php
include ('include/connect.php');
$wo = htmlspecialchars($_GET['word'], ENT_QUOTES, 'UTF-8');
$word = trim($wo);
if (isset($_GET)&& $word!=""){

  $sql_1 ="SELECT * FROM word_italian WHERE italian_word LIKE '$word' LIMIT 10 ";
  $sql_2 ="SELECT * FROM word_italian WHERE italian_word LIKE '$word %' LIMIT 4 ";
  $sql_3 ="SELECT * FROM word_italian WHERE italian_word LIKE '% $word' AND italian_word NOT LIKE '$word' LIMIT 4 ";

  $stmt_1 = $conn->query($sql_1);
  $stmt_2 = $conn->query($sql_2);
  $stmt_3 = $conn->query($sql_3);



  $leng_1 = $stmt_1->rowCount();
  if($leng_1 > 0){while($row = $stmt_1->fetch()) {

    $spakwordde = $row["italian_word"];
    $spakwordar = $row["arabic_word_fl"];
    $wordurl = "swen.php?langs=it&word=".$row["italian_word"];
    $wordur2 = "swar.php?langs=it&word=".$row["arabic_word_fl"];
    include ('xml-result/it-ar-result.php');};};
  /////////////////////// END 1

  $leng_2 = $stmt_2->rowCount();
  if($leng_2 > 0){while($row = $stmt_2->fetch()) {

    $spakwordde = $row["italian_word"];
    $spakwordar = $row["arabic_word_fl"];
    $wordurl = "swen.php?langs=it&word=".$row["italian_word"];
    $wordur2 = "swar.php?langs=it&word=".$row["arabic_word_fl"];
    include ('xml-result/it-ar-result.php');};};
  /////////////////////// END 2

  $leng_3 = $stmt_3->rowCount();
  if($leng_3 > 0){while($row = $stmt_3->fetch()) {

    $spakwordde = $row["italian_word"];
    $spakwordar = $row["arabic_word_fl"];
    $wordurl = "swen.php?langs=it&word=".$row["italian_word"];
    $wordur2 = "swar.php?langs=it&word=".$row["arabic_word_fl"];
    include ('xml-result/it-ar-result.php');
  };}else{
    $sql_4 ="SELECT * FROM  word_italian WHERE italian_word LIKE '%$word%' AND italian_word NOT LIKE '$word' LIMIT 4 ";
    $stmt_4 = $conn->query($sql_4);
    $leng_4 = $stmt_4->rowCount();
    if($leng_4 > 0){while($row = $stmt_4->fetch()) {

      $spakwordde = $row["italian_word"];
      $spakwordar = $row["arabic_word_fl"];
      $wordurl = "swen.php?langs=it&word=".$row["italian_word"];
      $wordur2 = "swar.php?langs=it&word=".$row["arabic_word_fl"];
      include ('xml-result/it-ar-result.php');};};};
  /////////////////////// END 3

  ////////////////////////////// STAR SINILAR TEXT //////////////////////////////////////
  $e = $leng_1 . $leng_2 . $leng_3 . $leng_4;
  if ($e >= 1) { } else { // STAR IF CONDITION
    echo "<div class='div-mean-word'><span id='doYouMean'>$word</span><p id='doYouMeanThis'>خطأ في الكلمة, لكن ربما تجدها هنا!!</p></div>";

    $ssmean = $conn->query('SELECT * FROM word_italian_mean');
    foreach( $ssmean as $term ) {
      $terms[ $term['italian_word'] ] = $term;};
      foreach ($terms as $value) {
        $find = $word;
        $value_de = $value['italian_word'];
        $result_find = 0;
        similar_text($value_de,$find,$result_find);
        if ($result_find >=80) {
          $spakwordde = $value["italian_word"];
          $spakwordar = $value["arabic_filtered"];
          $wordurl = "swen.php?langs=it&word=".$value["italian_word"];
          include ('mean/it-ar-mean-result/mean-result-it.php');};};}; // END IF CONDITION
        ////////////////////////////// END SINILAR TEXT ///////////////////////////////////////



};// نهاية ال isset


 ?>

 <?php
 include ('include/footer.php'); /* Footer */

  include ('include/ads.php') /* GOOGLE ADS */?>
 <script>
  $(function() {
  $( ".txtsrch" ).autocomplete({
  source: 'ajax/it-ar-ajax.php' ,
  minLength : 1
  });
  });
  </script>

  </body>
  </html>
