<center>
  <div class="mean">
    <div class="mean-ar">
      <i class="fa fa-volume-up mean-de-i" onclick='responsiveVoice.speak("<?php echo $spakwordde ?>","Deutsch Female")'></i>
      <span class="mean-word-ar">
        <?php echo $value["english_word"] ?>
      </span>
    </div>
    <div class="mean-de">
      <span class="">
        <a class=" pluse" href='<?php echo $wordur2 ?>'><?php echo $value["arabic_word"]?></a>
      </span>
      <i class="fa fa-volume-up fa-rotate-180 mean-ar-i" onclick='responsiveVoice.speak("<?php echo $spakwordar ?>","Arabic Female")'></i>
    </div>
  </div>
</center>
