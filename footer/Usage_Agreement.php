<?php error_reporting(0); include ('../include/header.php');?>



      </head>
      <body>
        <div class="img-logo">
    <a href="https://alhamou.com"><img class="logo"src="https://alhamou.com/img/log.svg" alt="" width="260px"></a>
  </div>



<h5 class="privacy-head">سياسة الخصوصية  : <a href="" style="color:#446fa7;">Alhamou.com</a></h5>
<p class="privacy">

<span style="font-weight: bold;">

سياسة الخصوصية  ل Alhamou.com  مقدمة:
<br>
</span>
<br>
<?php
$text = '
- يلتزم موقع الحمو بحماية خصوصية المعلومات الشخصية التي يتلقاها من المستخدمين عند استخدام أي من خدماته. <br>
ما هي المعلومات التي قد يقوم موقع الحمو بجمعها عني؟ <br>
عندما يطلب المستخدم الاشتراك في احدى الخدمات التي يقدمها موقع الحمو مثل البريد الالكتروني او التسجيل في خدمة سؤال وجواب (منتدى النقاش) او المشاركة في تقييم الكلمات او اضافة كلمة غير موجودة او تصحيح بعض المصطلحات المتوفرة، فقد نطلب تقديم بيانات شخصية، مثل الاسم وعنوان البريد الالكتروني وتاريخ الميلاد.<br>
 يستخدم الموقع ايضاً ملفات تعريف الارتباط ، وهي عبارة عن بيانات محدودة عن تفضيلات المستخدمين المرتبطين، وهذه البيانات تساعد موقع الحمو على تلبية احتياجات مستخدميها.<br>
 بشكل مشابه يقوم موقع الحمو ايضاً بتسجيل عنوان الـ IP، وهو عبارة عن رقم يمكن ان يحدد كل جهاز كمبيوتر يستخدم شبكة الانترنت.<br>
 نستخدم برامج تحليلية لمتابعة ملفات الارتباط وعناوين الـ IP بهدف التعرف على احتياجات المستخدمين.<br>
ولا تستخدم هذه المعلومات لتجميع ملفات شخصية عنكم. <br>
 - كيف يستخدم موقع الحمو  البيانات التي يجمعها عني؟ يستخدم موقع الحمو المعلومات الشخصية التي يتلقاها منكم لاغراض محدودة، منها ادارة الخدمات التي يقدمها لمستخدميه، يحتفظ الموقع بسرية المعلومات التي يحصل عليها من مستخدميه، الا اذا تطلب القانون الافصاح عنها، او سمح بذلك.<br>
- ما طول المدة التي سيحتفظ خلالها الموقع ببياناتي الشخصية؟<br>
سنحتفظ بالبيانات الشخصية المقدمة منكم طالما كانت هنالك حاجة اليها لتقديم خدمات اليكم.<br>
 وعندما ترسلون مساهماتكم الى موقع الحمو فانه سيتم الاحتفاظ بالمحتوى لفترة معقولة حسب الغرض الذي ارسلت المساهمات من اجله.<br>

    <br>


    <br>
    © 2018 - Ziad Alhamou All Rights Reserved
    <br>
    ----------------------------------------------------
    <br>
    لمزيد من المعلومات تواصلوا معنا على البريد التالي :
    <br>
      <b>E-mail : info@alhamou.com</b>
    <br>
    ----------------------------------------------------
    <br>    <br><b>
    Programmer by Ziad Alhamou</b>
    <br>


';
function highlight($text, $words) {
    preg_match_all('~\w+~', $words, $m);
    if(!$m)
        return $text;
    $re = '~\\b(' . implode('|', $m[0]) . ')\\b~';
    return preg_replace($re, '<b>$0</b>', $text);
}


$words = 'Alhamou.com';

echo highlight($text, $words);
 ?>




</body>
</html>
