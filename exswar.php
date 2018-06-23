<?php


include ('include/connect.php');
include ('include/header.php');

$word = htmlspecialchars($_GET['examples'], ENT_QUOTES, 'UTF-8');
$select = htmlspecialchars($_GET['langs'], ENT_QUOTES, 'UTF-8');


switch ($select) {
  case 'de':
  include ('ex/de-ar.php');
  break;
  case 'en':
  include ('ex/en-ar.php');
  break;
  case 'fr':
  include ('ex/fr-ar.php');
  break;
  case 'tr':
  include ('ex/tr-ar.php');
  break;
  case 'sp':
  include ('ex/sp-ar.php');
  break;
  case 'it':
  include ('ex/it-ar.php');
  break;
  case 'gr':
  include ('ex/gr-ar.php');
  break;
  case 'hin':
  include ('ex/hin-ar.php');
  break;
  case 'jp':
  include ('ex/jp-ar.php');
  break;
  case 'no':
  include ('ex/no-ar.php');
  break;
  case 'ru':
  include ('ex/ru-ar.php');
  break;
  case 'sp':
  include ('ex/sp-ar.php');
  break;
  case 'sw':
  include ('ex/sw-ar.php');
  break;
  case 'cn':
  include ('ex/cn-ar.php');
  break;
  case 'da':
  include ('ex/da-ar.php');
  break;
  case 'pt':
  include ('ex/pt-ar.php');
  break;
  case 'ko':
  include ('ex/ko-ar.php');
  break;
  case 'fa':
  include ('ex/fa-ar.php');
  break;
  default: echo '<center><h1>Examples keine Sprache</h1></center>';
  break;}









 ?>
