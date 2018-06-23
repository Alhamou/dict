<?php
include '../include/header.php';
if ($_SERVER['RECUEST_METHUD'] == 'GET'){
  ?>
  <title>ترجمة كلمة <?php echo $word ?>في الأمثلة  الإنجليزية - قاموس الحمو</title>
  <?php
} else {
  echo " <title>إبحث عن كلمة في الأمثلة الإنجليزية - قاموس الحمو</title>";
};

?>
</head>
<body>
  <?php include '../include/exhead-log.php';?>
  <option class="option-lang" value="en" selected>إبحث هنا في الأمثلة الإنجليزية</option>

</select>
</form>
<img src="../img/flags/en.svg" alt="English" class="sllim">
</div>

<?php

$ex = $_GET['examples'];// كلمة البحث الاتية من ال input
$trip = strip_tags($ex); // مسح جميع الأكواد
$strlen = strlen($trip); // عدد حروف الكلمة
if ($strlen >1){// دالة شرطية بعدد حروف  كلمة البحث
$word = trim($trip);// كلمة البحث المفلترة النهائية الجاهزة للبحث

  $qexamples = "SELECT * FROM  english_examples WHERE en LIKE '% $word %' OR ar LIKE '% $word %'LIMIT 7 ";


    $stmt = $conn->query($qexamples);
    $wc = $stmt->rowCount();

    if ($wc >= 1 ){while ($row_ex = $stmt->fetch()){
      include ('../xml-examples/en-ar-examples.php');

      }}else {};// نهاية اللوب الخاص بالنتائج البحث عن كلمة

  $qexamples = "SELECT * FROM  english_examples WHERE en LIKE '%$word%' OR ar LIKE '%$word%'LIMIT 5 ";


    $stmt = $conn->query($qexamples);
    $wc = $stmt->rowCount();

    if ($wc >= 1 ){while ($row_ex = $stmt->fetch()){

      include ('../xml-examples/en-ar-examples.php');

      }}else {};// نهاية اللوب الخاص بالنتائج البحث عن كلمة

};//isset نهاية ال

  ?>

  <script src="../js/jquery-3.2.1.min.js"></script>
  <script src="../js/custom.js"></script>
  </body>
  </html>
  <?php include ('../include/ads.php') /* GOOGLE ADS */?>
