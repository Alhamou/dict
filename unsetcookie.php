<?php
ob_start();
$cookie = $_COOKIE;
foreach ($cookie as $key => $value){
setcookie($key,'',time() + 1);
};
header('Location: https://alhamou.com/');
exit();
ob_end_flush();
?>