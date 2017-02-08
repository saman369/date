<?php
include "../Access.php"; //  در این قسمت ادرس   فایل توکن ربات تلگرام
include "../index.php";  //  این قسمتن میتونید پاک کنید اگه بخش پلاگین تو فایلی که توکن هش دادین باشه

$date_and_time = json_decode(file_get_contents('http://api.norbert-team.ir/date-time'));
if(preg_match('/^\/([Dd]ate)/s',$text)){
	$date_fa = $date_and_time->date_fa;
	$date_en = $date_and_time->date_en;
	$time_fa = $date_and_time->time_fa;
	SendAction($chat_id,'typing');
	SendMessage($chat_id , "<b>📅 تاریخ شمسی : </b> $date_fa
	<b>تاریخ میلادی : 🇦🇺</b> $date_en
	<b>⌚️ ساعت : </b> $time_fa ","html");
  }
  
  ?>
