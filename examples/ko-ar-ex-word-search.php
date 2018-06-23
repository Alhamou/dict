<?php
include '../include/header.php';
if ($_SERVER['RECUEST_METHUD'] == 'GET'){
  ?>
  <title>ترجمة كلمة <?php echo $word ?>في الأمثلة  الكورية - قاموس الحمو</title>
<?php

} else {
  echo " <title>إبحث عن كلمة في الأمثلة الكورية - قاموس الحمو</title>";
};

?>
</head>
<body>
  <?php  include '../include/exhead-log.php';?>
  <option class="option-lang" value="ko" selected>إبحث هنا في الأمثلة الكورية</option>

</select>
</form>
<img src="../img/flags/kr.svg" alt="Sweden" class="sllim">
</div>



<?php

$ex = $_GET['examples'];// كلمة البحث الاتية من ال input
$trip = strip_tags($ex); // مسح جميع الأكواد
$strlen = strlen($trip); // عدد حروف الكلمة
if ($strlen >1){// دالة شرطية بعدد حروف  كلمة البحث
$word = trim($trip);// كلمة البحث المفلترة النهائية الجاهزة للبحث


  $qexamples = "SELECT * FROM  korean_examples WHERE ar LIKE '% $word %' OR ko LIKE '% $word %'LIMIT 7 ";

    $stmt = $conn->query($qexamples);
    $wc = $stmt->rowCount();

    if ($wc >= 1 ){while ($row_ex = $stmt->fetch()){
      include ('../xml-examples/ko-ar-examples.php');

      }}else {};// نهاية اللوب الخاص بالنتائج البحث عن كلمة

  $qexamples = "SELECT * FROM  korean_examples WHERE ar LIKE '%$word%' OR ko LIKE '%$word%'LIMIT 5 ";

    $stmt = $conn->query($qexamples);
    $wc = $stmt->rowCount();

    if ($wc >= 1 ){while ($row_ex = $stmt->fetch()){

      include ('../xml-examples/ko-ar-examples.php');

      }}else {};// نهاية اللوب الخاص بالنتائج البحث عن كلمة




};//isset نهاية ال

  ?>

  <script src="../js/jquery-3.2.1.min.js"></script>
  <script src="../js/custom.js"></script>
  </body>
  </html>
  <?php include ('../include/ads.php') /* GOOGLE ADS */?>
