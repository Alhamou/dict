

<center class="img-logo">
  <a href="https://alhamou.com/"><img class="logo "src="https://alhamou.com/img/log.svg" alt="" width="260px"></a>
</center>
<div class="container-form">
  <form class="formhome testlang" action="https://alhamou.com/search.php" method="GET">
    <i class="fa fa-keyboard-o keyboard-form"></i>
    <i class="fa fa-times x-times" ></i>
    <input type="search" name="word" dir="auto" value="<?php echo $wo = $_GET['word']; ?>" autofocus="on" autocomplete="off" class="txtsrch input">
    <button type="submit" class="button-form submit-form"><i class="fa fa-search"></i></button>
    <select id="select-lang" name="langs" class="select-lang">
