<?php error_reporting(0);?>
<title>ترجمة كلمة <?php echo $word ?>  في الأمثلة الصينية - قاموس الحمو </title>
</head>
<body>

  <?php include 'include/inexhead-log.php';?>
  <option class="option-lang" value="cn" selected>إبحث هنا في الأمثلة الصينية</option>

</select>
</form>
<img src="img/flags/cn.svg" alt="China" class="sllim">
</div>

</body>

</html>

<?php


$ex = htmlspecialchars($_GET['examples'], ENT_QUOTES, 'UTF-8');
$word = trim($ex);// كلمة البحث المفلترة النهائية الجاهزة للبحث
if (strlen($word) >1){// دالة شرطية بعدد حروف  كلمة البحث


  $qexamples = "SELECT * FROM  chine_examples WHERE ar LIKE '% $word %' LIMIT 7 ";

  $stmt = $conn->query($qexamples);
  $wc = $stmt->rowCount();

  if ($wc >= 1 ){while ($row_ex = $stmt->fetch()){
    include ('xml-examples/cn-ar-examples.php');

  }}else {};// نهاية اللوب الخاص بالنتائج البحث عن كلمة

    $qexamples = "SELECT * FROM  chine_examples WHERE ar LIKE '%$word%' LIMIT 5 ";

    $stmt = $conn->query($qexamples);
    $wc = $stmt->rowCount();

    if ($wc >= 1 ){while ($row_ex = $stmt->fetch()){

      include ('xml-examples/cn-ar-examples.php');

    }}else {};// نهاية اللوب الخاص بالنتائج البحث عن كلمة




    };//isset نهاية ال

    ?>
    <?php include ('include/ads.php') /* GOOGLE ADS */?>
    <?php include ('include/footer.php')  /* Footer */?>
