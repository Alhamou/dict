<?php
include '../include/header.php';
if ($_SERVER['RECUEST_METHUD'] == 'GET'){
  ?>
  <title>ترجمة كلمة <?php echo $word ?>في الأمثلة  الألمانية - قاموس الحمو</title>
  <?php
} else {
  echo " <title>إبحث عن كلمة في الأمثلة الألمانية - قاموس الحمو</title>";
};

?>
</head>
<body>
  <?php include '../include/exhead-log.php';?>
  <option class="option-lang" value="de" selected>إبحث هنا في الأمثلة الألمانية</option>

</select>
</form>
<img src="../img/flags/de.svg" alt="Deutsch" class="sllim">
</div>


<?php


$ex = strip_tags($_GET['examples']);// كلمة البحث الاتية من ال input
$trim = trim($ex);// كلمة البحث المفلترة النهائية الجاهزة للبحث
$word = strip_tags($trim); // مسح جميع الأكواد
$strlen = strlen($word); // عدد حروف الكلمة
if ($strlen >1){// دالة شرطية بعدد حروف  كلمة البحث


  $qexamples = "SELECT * FROM  german_examples WHERE de LIKE '% $word %' OR ar LIKE '% $word %' LIMIT 7 ";


    $stmt = $conn->query($qexamples);
    $wc = $stmt->rowCount();

    if ($wc >= 1 ){while ($row_ex = $stmt->fetch()){
      include ('../xml-examples/de-ar-examples.php');

      }}else {};// نهاية اللوب الخاص بالنتائج البحث عن كلمة

  $qexamples = "SELECT * FROM  german_examples WHERE de LIKE '%$word%' AND de NOT LIKE '$word' OR ar LIKE '%$word%'LIMIT 5 ";


    $stmt = $conn->query($qexamples);
    $wc = $stmt->rowCount();

    if ($wc >= 1 ){while ($row_ex = $stmt->fetch()){

      include ('../xml-examples/de-ar-examples.php');

      }}else {};// نهاية اللوب الخاص بالنتائج البحث عن كلمة


};//isset نهاية ال

  ?>

  <script src="../js/jquery-3.2.1.min.js"></script>
  <script src="../js/custom.js"></script>
  </body>
  </html>
  <?php include ('../include/ads.php') /* GOOGLE ADS */?>
