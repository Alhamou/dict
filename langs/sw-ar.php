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
        <meta name='description' content='معنى كلمة {$url} في الإسبانية, ترجمة كلمة {$url} مع اللفظ, في قاموس الحمو العالمي إبحث عن أي كلمة في الأمثلة من العربي الى باقي اللغات'/>
        <meta property='og:title' content='ترجمة ومعنى كلمة {$url} في اللغة الاسبانية - قاموس الحمو'/>
        <meta property='og:description' content='معنى كلمة {$url} في الاسبانية, ترجمة كلمة {$url} مع اللفظ, في قاموس الحمو العالمي إبحث عن أي كلمة في الأمثلة من العربي الى باقي اللغات'/>
        <title>ترجمة ومعنى كلمة {$url} في اللغة الاسبانية - قاموس الحمو</title>
        <meta name='twitter:title' property='og:title' content='ترجمة ومعنى كلمة {$url} في اللغة الاسبانية - قاموس الحمو' />
        <meta name='twitter:description' property='og:description' itemprop='description' content='معنى كلمة {$url} في الاسبانية, ترجمة كلمة {$url} مع اللفظ, في قاموس الحمو العالمي إبحث عن أي كلمة في الأمثلة من العربي الى باقي اللغات' />
        </head>", $contents);



}


 ?>

 </head>
 <body>
   <?php
     ad_to_head();
     ?>
   <?php ad_to_head(); include 'include/head-log.php';?>
  <option class="option-lang" value="sw">Spanish</option>

  </select>
  </form>
  <img src="https://alhamou.com/img/flags/se.svg" alt="Sweden" class="sllim">

  </div>

<?php
include ('include/connect.php');
$wo = filter_var($_GET['word'], FILTER_SANITIZE_STRING);
$word = trim($wo);
if (isset($_GET)&& $word!=""){

$i = 0; // فاريبل للاستخدام الشرط فقط

$sql_1 = "SELECT * FROM word_sweden WHERE arabic_word_fl LIKE '$word' OR sweden_word LIKE '$word' or arabic_word LIKE '$word'LIMIT 15 ";
$sql_2 = "SELECT * FROM word_sweden WHERE arabic_word_fl LIKE '$word %' OR sweden_word LIKE '$word %' LIMIT 4 ";
$sql_3 ="SELECT * FROM word_sweden WHERE arabic_word_fl LIKE '% $word' AND arabic_word_fl NOT LIKE '$word' OR sweden_word LIKE '% $word' AND sweden_word NOT LIKE '$word' LIMIT 4 ";


  $stmt_1 = $conn->query($sql_1);
  $stmt_2 = $conn->query($sql_2);
  $stmt_3 = $conn->query($sql_3);


$leng_1 = $stmt_1->rowCount();
if($leng_1 > 0){while($row = $stmt_1->fetch()) {

  $spakwordde = $row["sweden_word"];
  $spakwordar = $row["arabic_word_fl"];
  $wordurl = "https://alhamou.com/swen.php?langs=sw&word=".$row["sweden_word"];
  $wordur2 = "https://alhamou.com/swar.php?langs=sw&word=".$row["arabic_word_fl"];


  include ('xml-result/sw-ar-result.php');};};
///////////////////////// END 1

$leng_2 = $stmt_2->rowCount();
if($leng_2 > 0){while($row = $stmt_2->fetch()) {

  $spakwordde = $row["sweden_word"];
  $spakwordar = $row["arabic_word_fl"];
  $wordurl = "https://alhamou.com/swen.php?langs=sw&word=".$row["sweden_word"];
  $wordur2 = "https://alhamou.com/swar.php?langs=sw&word=".$row["arabic_word_fl"];
  include ('xml-result/sw-ar-result.php');};};
///////////////////////// END 2
$leng_3 = $stmt_3->rowCount();
if($leng_3 > 0){while($row = $stmt_3->fetch()) {

  $spakwordde = $row["sweden_word"];
  $spakwordar = $row["arabic_word_fl"];
  $wordurl = "https://alhamou.com/swen.php?langs=sw&word=".$row["sweden_word"];
  $wordur2 = "https://alhamou.com/swar.php?langs=sw&word=".$row["arabic_word_fl"];
  include ('xml-result/sw-ar-result.php');};
} else { ///////////////// ELSE SEARCH IN ARABIC WORD
$sql_4 ="SELECT * FROM word_sweden WHERE arabic_word_fl LIKE '%$word%' AND arabic_word_fl NOT LIKE '$word' OR sweden_word LIKE '%$word%' AND sweden_word NOT LIKE '$word' LIMIT 4 ";
$stmt_4 = $conn->query($sql_4);

$leng_4 = $stmt_4->rowCount();
if($leng_4 > 0){while($row = $stmt_4->fetch()) {

  $spakwordde = $row["sweden_word"];
  $spakwordar = $row["arabic_word_fl"];
  $wordurl = "https://alhamou.com/swen.php?langs=sw&word=".$row["sweden_word"];
  $wordur2 = "https://alhamou.com/swar.php?langs=sw&word=".$row["arabic_word_fl"];
  include ('xml-result/sw-ar-result.php');};};};
///////////////////////// END 3



////////////////////////////// STAR SINILAR TEXT //////////////////////////////////////
$e = $leng_1 . $leng_2 . $leng_3 . $leng_4;
if ($e >= 1) { } else { // STAR IF CONDITION
  echo "<div class='div-mean-word'><span id='doYouMean'>$word</span><p id='doYouMeanThis'>خطأ في الكلمة, لكن ربما تجدها هنا!!</p></div>";

  $ssmean = $conn->query('SELECT * FROM word_sweden_mean');
  foreach( $ssmean as $term ) {
    $terms[ $term['arabic_word_fl'] ] = $term;};
    foreach ($terms as $value) {
      $find = $word;
      $value_de = $value['arabic_word_fl'];
      $result_find = 0;
      similar_text($value_de,$find,$result_find);
      if ($result_find >=80) {
        $spakwordde = $value["sweden_word"];
        $spakwordar = $value["arabic_word_fl"];
        $wordur2 = "https://alhamou.com/swar.php?langs=sw&word=".$value["arabic_word_fl"];
        include ('mean/sw-ar-mean-result/mean-result-ar.php');
      };};

$ssmean = $conn->query('SELECT * FROM word_sweden_mean');
foreach( $ssmean as $term ) {
  $terms[ $term['sweden_word'] ] = $term;};
  foreach ($terms as $value) {
    $find = $word;
    $value_de = $value['sweden_word'];
    $result_find = 0;
    similar_text($value_de,$find,$result_find);
    if ($result_find >=80) {
      $spakwordde = $value["sweden_word"];
      $spakwordar = $value["arabic_word_fl"];
      $wordur2 = "https://alhamou.com/swen.php?langs=sw&word=".$value["sweden_word"];
      include ('mean/sw-ar-mean-result/mean-result-sw.php');
    };};

    }; // END IF CONDITION
      ////////////////////////////// END SINILAR TEXT ///////////////////////////////////////





};// نهاية ال isset
include ("include/footer.php");
include ('include/ads.php') /* GOOGLE ADS */?>

 <script>
  $(function() {
  $( ".txtsrch" ).autocomplete({
  source: 'https://alhamou.com/ajax/sw-ar-ajax.php' ,
  minLength : 1
  });
  });
  </script>
  </body>
  </html>

