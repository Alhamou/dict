
<div class="satz">
  <div class="">
    <div class="arabicword">
      <i class="fa fa-volume-up fa-rotate-180" onclick='responsiveVoice.speak("<?php echo $spakwordar ?>","Arabic Female")'></i>
      <a href='<?php echo $wordur2 ?>'><span class="worden"><?php echo preg_replace("/\p{L}*?".preg_quote($word)."\p{L}*/ui","<span class='mark-ar-mark'>$0</span>", $row["arabic_word"]) ?></span></a>
    </div>

    <div class="enabicword">
      <i class="fa fa-volume-up " onclick='responsiveVoice.speak("<?php echo $spakwordde ?>","UK English Male")'></i>
      <a class="a-de" href='<?php echo $wordurl ?>'><span class="worden"><?php echo preg_replace("/\p{L}*?".preg_quote($word)."\p{L}*/ui","<span class='mark-ar-mark'>$0</span>", $row["english_word"]) ?></span></a>
    </div>
  </div>
</div>
