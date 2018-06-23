<?php
include '../include/header.php';
if ($_SERVER['RECUEST_METHUD'] == 'GET'){
  ?>
  <title>ترجمة كلمة <?php echo $word ?>في الأمثلة  البرتغالية - قاموس الحمو</title>
<?php

} else {
  echo " <title>إبحث عن كلمة في الأمثلة البرتغالية - قاموس الحمو</title>";
};

?>
</head>
<body>
  <?php include '../include/exhead-log.php';?>
  <option class="option-lang" value="pt" selected>إبحث هنا في الأمثلة البرتغالية</option>

</select>
</form>
<img src="../img/flags/pt.svg" alt="Portugal" class="sllim">
</div>



  <?php
  
  $ex = strip_tags($_GET['examples']);// كلمة البحث الاتية من ال input
  $trim = trim($ex);// كلمة البحث المفلترة النهائية الجاهزة للبحث
  $word = strip_tags($trim); // مسح جميع الأكواد
  $strlen = strlen($word); // عدد حروف الكلمة
  if ($strlen >1){// دالة شرطية بعدد حروف  كلمة البحث


    $qexamples = "SELECT * FROM portugiesisch_examples WHERE pt LIKE '% $word %' OR ar LIKE '% $word %' LIMIT 7 ";

      $stmt = $conn->query($qexamples);
      $wc = $stmt->rowCount();

      if ($wc >= 1 ){while ($row_ex = $stmt->fetch()){
        include ('../xml-examples/pt-ar-examples.php');

        }}else {};// نهاية اللوب الخاص بالنتائج البحث عن كلمة

    $qexamples = "SELECT * FROM portugiesisch_examples WHERE pt LIKE '%$word%' OR ar LIKE '% $word %' LIMIT 5 ";

      $stmt = $conn->query($qexamples);
      $wc = $stmt->rowCount();

      if ($wc >= 1 ){while ($row_ex = $stmt->fetch()){

        include ('../xml-examples/pt-ar-examples.php');

        }}else {};// نهاية اللوب الخاص بالنتائج البحث عن كلمة


  };//isset نهاية ال

    ?>

    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/custom.js"></script>
    </body>
    </html>
    <?php include ('../include/ads.php') /* GOOGLE ADS */?>
