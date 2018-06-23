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

include ('include/connect.php');

$word = strip_tags($_GET['examples']);
$select = $_GET['langs'];


switch ($select) {
  case 'de':
  include ('de-ar-ex-word-search.php');
  break;
  case 'en':
  include ('en-ar-ex-word-search.php');
  break;
  case 'fr':
  include ('fr-ar-ex-word-search.php');
  break;
  case 'tr':
  include ('tr-ar-ex-word-search.php');
  break;
  case 'sp':
  include ('sp-ar-ex-word-search.php');
  break;
  case 'it':
  include ('it-ar-ex-word-search.php');
  break;
  case 'sw':
  include ('sw-ar-ex-word-search.php');
  break;
  case 'ko':
  include ('ko-ar-ex-word-search.php');
  break;
  case 'cn':
  include ('cn-ar-ex-word-search.php');
  break;
  case 'no':
  include ('no-ar-ex-word-search.php');
  break;
  case 'ru':
  include ('ru-ar-ex-word-search.php');
  break;
  default: echo '<center><h1>keine Sprache gewahlt</h1></center>';
  break;}









 ?>
