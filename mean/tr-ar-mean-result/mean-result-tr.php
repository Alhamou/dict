<center>
  <div class="mean">
    <div class="mean-de">
      <span class="">
        <a class="mean-word-de" href='<?php echo $wordurl ?>'><?php echo $value["turkish_word"]?></a>
      </span>
      <i class="fa fa-volume-up fa-rotate-180 mean-ar-i" onclick='responsiveVoice.speak("<?php echo $spakwordar ?>","Arabic Female")'></i>
    </div>
    <div class="mean-ar">
      <i class="fa fa-volume-up mean-de-i" onclick='responsiveVoice.speak("<?php echo $spakwordde ?>","Turkish Female")'></i>
      <span class="mean-word-ar">
        <?php echo $value["arabic_word"] ?>
      </span>
    </div>
  </div>
</center>
