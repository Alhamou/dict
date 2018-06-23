<?php
$word = htmlspecialchars($_GET['word'], ENT_QUOTES, 'UTF-8');
$select = htmlspecialchars($_GET['langs'], ENT_QUOTES, 'UTF-8');

$rand = rand(0, 999999);
setcookie($rand."_".$select,$word, time() + (30 * 24 * 60 * 60));
setcookie('lang',$select, time() + (30 * 24 * 60 * 60));

include ('include/header.php');



switch ($select) {
  case 'de':
  include ('sw/de.php');
  break;
  case 'en':
  include ('sw/en.php');
  break;
  case 'fr':
  include ('sw/fr.php');
  break;
  case 'tr':
  include ('sw/tr.php');
  break;
  case 'sw':
  include ('sw/sw.php');
  break;
  case 'sp':
  include ('sw/sp.php');
  break;
  case 'it':
  include ('sw/it.php');
  break;
  case 'ru':
  include ('sw/ru.php');
  break;
  case 'fa':
  include ('langs/fa-ar.php');
  break;
  case 'mc':
  include ('sw/mc.php');
  break;
  default: echo '<center><h1>keine Sprache gewahlt</h1></center>';
  break;}









 ?>
