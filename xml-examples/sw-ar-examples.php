
<div class="exsatz">
  <div class="">
    <div class="arabexa">
      <?php
      $ar = $row_ex["ar"];

      $ex = explode(' ', $ar);

      for ($i=0; $i < count($ex) ; $i++) {

        $wordurl = 'https://alhamou.com/exswar.php?langs=sw&examples='. $ex[$i] ; ?>
        <a class="exwordall" href='<?php echo $wordurl ?>'><span class=""><?php echo
        preg_replace("/\p{L}*?".preg_quote($word)."\p{L}*/ui","<span class='mark'>$0</span>", $ex[$i] . ' ') ?></span></a>
      <?php } ?>
    </div>

    <div class="englexa">
      <?php
      $de = $row_ex["sw"];
      $ex = explode(' ', $de);

      for ($i=0; $i < count($ex) ; $i++) {

        $wordurl = 'https://alhamou.com/exswen.php?langs=sw&examples='. $ex[$i] ; ?>

        <a class="exwordall" href='<?php echo $wordurl ?>'><span class="">
          <?php echo
          preg_replace("/\p{L}*?".preg_quote($word)."\p{L}*/ui","<span class='mark'>$0</span>", $ex[$i].' ') ?></span></a>

        <?php } ?>
      </div>
    </div>
  </div>
