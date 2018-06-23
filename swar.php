<?php
$word = htmlspecialchars($_GET['word'], ENT_QUOTES, 'UTF-8');
$select = htmlspecialchars($_GET['langs'], ENT_QUOTES, 'UTF-8');

$rand = rand(0, 999999);
setcookie($rand."_".$select,$word, time() + (30 * 24 * 60 * 60));
setcookie('lang',$select, time() + (30 * 24 * 60 * 60));





include ('include/header.php');


switch ($select) {
  case 'de':
  include ('sw/de-ar.php');
  break;
  case 'en':
  include ('sw/en-ar.php');
  break;
  case 'fr':
  include ('sw/fr-ar.php');
  break;
  case 'tr':
  include ('sw/tr-ar.php');
  break;
  case 'sw':
  include ('sw/sw-ar.php');
  break;
  case 'sp':
  include ('sw/sp-ar.php');
  break;
  case 'it':
  include ('sw/it-ar.php');
  break;
  case 'ru':
  include ('sw/ru-ar.php');
  break;
  case 'fa':
  include ('langs/fa-ar.php');
  break;
  case 'mc':
  include ('sw/mc-ar.php');
  break;
  default: echo '<center><h1>keine Sprache gewahlt</h1></center>';
  break;}









  ?>
