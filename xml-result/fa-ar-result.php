

<div class="satz">
  <div class="">
    <div class="arabicword">
      <i class="fa fa-volume-up fa-rotate-180" onclick='responsiveVoice.speak("<?php echo $spakwordar ?>","Arabic Female")'></i>
      <a href='<?php echo $wordur2 ?>'><span class="worden"><?php echo preg_replace("/\p{L}*?".preg_quote($word)."\p{L}*/ui","<span class='mark-ar-mark'>$0</span>", $row["arabic_word"]) ?></span></a>
      <span class="discen"><?php echo $row["arabic_disrebtion"]?></span>
    </div>

    <div class="wordfa">
      <span class="discen"><?php echo $row["farsi_descreption"] ?></span>
      <a class="a-de" href='<?php echo $wordurl ?>'><span class="worden"><?php echo preg_replace("/\p{L}*?".preg_quote($word)."\p{L}*/ui","<span class='mark-ar-mark'>$0</span>", $row["farsi_word"]) ?></span></a>
      <i class="fa fa-volume-up " onclick='responsiveVoice.speak("<?php echo $spakwordde ?>","Arabic Female")'></i>

    </div>
  </div>
  <div class="faexbutton">
    <form  class="exform" action="https://www.alhamou.com/exswen.php" method="GET">
      <input type="hidden" name="langs" value="fa">
      <input type="hidden" name="examples" value="<?php echo $row["farsi_word"]?>">
      <input type="submit" class=" ponkt" value="examples" >

    </form>
  </div>
</div>
