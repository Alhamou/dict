<?php error_reporting(0);
/*
include ('include/connect.php');
include ('include/header.php');
$wo = $_GET['wo'];// كلمة البحث الاتية من ال input
$trip = strip_tags($wo); // مسح جميع الأكواد
$strlen = strlen($trip); // عدد حروف الكلمة
if ($strlen >1){// دالة شرطية بعدد حروف  كلمة البحث
$word = trim($trip);// كلمة البحث المفلترة النهائية الجاهزة للبحث
if (isset($_GET)&& $word!=""){
};//isset نهاية ال
};//strlen نهاية ال

هذه الكود لعمليات بحث مستقبلية
(SELECT * FROM word_germany WHERE word LIKE 'test%')
UNION ALL (SELECT * FROM word_germany WHERE word LIKE '%test%' WHERE word
NOT IN (SELECT * FROM word_germany WHERE word LIKE 'test%'))
*/


include ('include/header.php');
$word = strip_tags($_GET['word']);
$select = $_GET['langs'];


switch ($select) {
  case 'de':
  include ('langs/de-ar.php');
  break;
  case 'en':
  include ('langs/en-ar.php');
  break;
  case 'fr':
  include ('langs/fr-ar.php');
  break;
  case 'tr':
  include ('langs/tr-ar.php');
  break;
  case 'sw':
  include ('langs/sw-ar.php');
  break;
  case 'sp':
  include ('langs/sp-ar.php');
  break;
  case 'it':
  include ('langs/it-ar.php');
  break;
  case 'ru':
  include ('langs/ru-ar.php');
  break;
  case 'fa':
  include ('langs/fa-ar.php');
  break;
  case 'mc':
  include ('langs/mc-ar.php');
  break;
  case 'deutsch':
  include ('index.php');
  break;
  case 'english':
  include ('index.php');
  break;
  case 'french':
  include ('index.php');
  break;
  case 'turki':
  include ('index.php');
  break;
  case 'sweden':
  include ('index.php');
  break;
  case 'spanish':
  include ('index.php');
  break;
  case 'russian':
  include ('index.php');
  break;
  case 'italian':
  include ('index.php');
  break;
  case 'farsi':
  include ('index.php');
  break;
  case 'medical':
  include ('index.php');
  break;

  default: echo '<center><h1>keine Sprache gewahlt</h1></center>';
  break;}









 ?>
