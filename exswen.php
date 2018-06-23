<?php


include ('include/connect.php');
include ('include/header.php');
$word = strip_tags($_GET['examples']);
$select = $_GET['langs'];


switch ($select) {
  case 'de':
  include ('ex/de.php');
  break;
  case 'en':
  include ('ex/en.php');
  break;
  case 'fr':
  include ('ex/fr.php');
  break;
  case 'tr':
  include ('ex/tr.php');
  break;
  case 'sp':
  include ('ex/sp.php');
  break;
  case 'it':
  include ('ex/it.php');
  break;
  case 'gr':
  include ('ex/gr.php');
  break;
  case 'hin':
  include ('ex/hin.php');
  break;
  case 'jp':
  include ('ex/jp.php');
  break;
  case 'no':
  include ('ex/no.php');
  break;
  case 'ru':
  include ('ex/ru.php');
  break;
  case 'sp':
  include ('ex/sp.php');
  break;
  case 'sw':
  include ('ex/sw.php');
  break;
  case 'cn':
  include ('ex/cn.php');
  break;
  case 'da':
  include ('ex/da.php');
  break;
  case 'pt':
  include ('ex/pt.php');
  break;
  case 'ko':
  include ('ex/ko.php');
  break;
  case 'fa':
  include ('ex/fa-ar.php');
  break;
  default: echo '<center><h1>Examples keine Sprache</h1></center>';
  break;}









 ?>
