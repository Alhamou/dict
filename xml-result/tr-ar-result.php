

<div class="satz">
  <div class="">
    <div class="arabicword">
      <i class="fa fa-volume-up fa-rotate-180" onclick='responsiveVoice.speak("<?php echo $spakwordar ?>","Arabic Female")'></i>
      <a href='<?php echo $wordur2 ?>'><span class="worden"><?php echo preg_replace("/\p{L}*?".preg_quote($word)."\p{L}*/ui","<span class='mark-ar-mark'>$0</span>", $row["arabic_word"]) ?></span></a>
      <span class="discen"><?php echo $row["arabic_disrebtion"]?></span>
    </div>

    <div class="enabicword">
      <i class="fa fa-volume-up " onclick='responsiveVoice.speak("<?php echo $spakwordde ?>","Turkish Female")'></i>
      <span class="article floatleft" ><?php echo $row["article"] ?></span>
      <a class="a-de" href='<?php echo $wordurl ?>'><span class="worden"><?php echo preg_replace("/\p{L}*?".preg_quote($word)."\p{L}*/ui","<span class='mark-ar-mark'>$0</span>", $row["turkish_word"]) ?></span></a>
      <span class="discen"><?php echo $row["turkish_descreption"] ?></span>
    </div>
  </div>
  <div class="reexbutton">
    <form  class="exform" action="https://www.alhamou.com/exswen.php" method="GET">
      <input type="hidden" name="langs" value="tr">
      <input type="hidden" name="examples" value="<?php echo $row["turkish_word"]?>">
      <input type="submit" class=" ponkt" value="examples" >
    </form>
  </div>
</div>
