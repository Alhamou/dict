<?php
include '../include/header.php';
if ($_SERVER['RECUEST_METHUD'] == 'GET'){
  ?>
  <title>ترجمة كلمة <?php echo $word ?>في الأمثلة  الإيطالية - قاموس الحمو</title>
<?php

} else {
  echo " <title>إبحث عن كلمة في الأمثلة الإيطالية - قاموس الحمو</title>";
};

?>
</head>
<body>
  <?php include '../include/exhead-log.php';?>
  <option class="option-lang" value="it" selected>إبحث هنا في الأمثلة الإيطالية</option>

</select>
</form>
<img src="../img/flags/it.svg" alt="Italien" class="sllim">
</div>



<?php

$ex = $_GET['examples'];// كلمة البحث الاتية من ال input
$trip = strip_tags($ex); // مسح جميع الأكواد
$strlen = strlen($trip); // عدد حروف الكلمة
if ($strlen >1){// دالة شرطية بعدد حروف  كلمة البحث
$word = trim($trip);// كلمة البحث المفلترة النهائية الجاهزة للبحث

  $qexamples = "SELECT * FROM  italien_examples WHERE it LIKE '% $word %' OR ar LIKE '% $word %'LIMIT 7 ";

    $stmt = $conn->query($qexamples);
    $wc = $stmt->rowCount();

    if ($wc >= 1 ){while ($row_ex = $stmt->fetch()){
      include ('../xml-examples/it-ar-examples.php');

      }}else {};// نهاية اللوب الخاص بالنتائج البحث عن كلمة

  $qexamples = "SELECT * FROM  italien_examples WHERE it LIKE '%$word%' OR ar LIKE '%$word%'LIMIT 5 ";

    $stmt = $conn->query($qexamples);
    $wc = $stmt->rowCount();

    if ($wc >= 1 ){while ($row_ex = $stmt->fetch()){

      include ('../xml-examples/it-ar-examples.php');

      }}else {};// نهاية اللوب الخاص بالنتائج البحث عن كلمة

};//isset نهاية ال

  ?>

  <script src="../js/jquery-3.2.1.min.js"></script>
  <script src="../js/custom.js"></script>
  </body>
  </html>
  <?php include ('../include/ads.php') /* GOOGLE ADS */?>
