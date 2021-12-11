<?php
ob_start();
define("API_KEY","2102760958:AAH8RKZdofJIB7U4XXh27-ZAm7_IawOTF5k");
echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
function bot($method,$datas=[]){
$url = "https://api.telegram.org/bot".API_KEY."/".$method;
$CQCQQ = curl_init();
curl_setopt($CQCQQ,CURLOPT_URL,$url);
curl_setopt($CQCQQ,CURLOPT_RETURNTRANSFER,true);
curl_setopt($CQCQQ,CURLOPT_POSTFIELDS,$datas);
$HHMHHH = curl_exec($CQCQQ);
if(curl_error($CQCQQ)){
var_dump(curl_error($CQCQQ));
}else{
return json_decode($HHMHHH);
}}

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$name = $message->from->first_name;
$user = $message->from->username;
$from_id = $message->from->id;
$tws = file_get_contents("tw.txt");
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message = $update->message;
$chat_id = $message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$from_id = $message->from->id;
$name = $update->message->from->first_name;
$from_id = $message->from->id;
$u = explode("\n",file_get_contents("memb.txt"));
$c = count($u)-1;
$modxe = file_get_contents("usr.txt");
$username = $update->message->from->username;
$reply = $message->reply_to_message->message_id;
$list = file_get_contents("blocklist.txt");
$rep = $message->reply_to_message->forward_from; 
$id = $rep->id; 
$K5 = file_get_contents("k.txt");
$K6 = file_get_contents("k1.txt");
$admin = 0000; # ايديك
$message = $update->message;
$chat_id = $message->chat->id;
$textmsg = $message->text;
$user = $message->from->username;
$name = $message->from->first_name;
$for = $message->from->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message = $update->message;
$chat_id = $message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$from_id = $message->from->id;
$name = $update->message->from->first_name;
$from_id = $message->from->id;
$k5 = file_get_contents("k5.txt");
$k6 = file_get_contents("k6.txt");
$k7 = file_get_contents("k7.txt");
$admin2 = file_get_contents("admin2.txt");
$ad = array("$admin","$admin2","000");
$list = file_get_contents("blocklist.txt");
$ebu = explode("\n",$list);
if(in_array($from_id,$ebu)){
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"⛳| عزيزي انت محظور من البوت",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);    
}
#التخزين ايديات
$from_id = $message->from->id;
mkdir("alsh");
if(isset($message)){
$al = file_get_contents('memb.txt');
$alo = explode("\n",$al);
if(!in_array($from_id,$alo)){
$alsh2 = fopen("memb.txt", "a") or die("Unable to open file!");
fwrite($alsh2, "$from_id\n");
fclose($alsh2);}}
$first_name = $message->from->first_name;
$username = $message->from->username;
$from_id = $message->from->id;
$marcus = explode("\n",file_get_contents("memb.txt"));
$hassan = count($marcus)-1;
if ($message && !in_array($from_id, $marcus)) {
    file_put_contents("memb.txt", $from_id."\n",FILE_APPEND);
  }
$sta = file_get_contents("start.txt");
#شتراك اجباري خاصه
$all = file_get_contents("id.txt");
$rabt = file_get_contents("rabt.txt");
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$all&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
*عذرأ عزيزي ( $name ).
عليك الاشترأك بقناة البوت الاساسية 📢.
ليمكنك أستخدام ألبوت بشكل صحيح .*
[اضغط هنا للأشتراڪك]($rabt) 📢.
⋘ - - - - - - - - - - ☆ - - - - - - - - - - ⋙*
عند الاشتراك اضغط ~ /start ~ .*",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
          'inline_keyboard'=>[
[['text'=>" أو اضغط هنا للأشتراك 📢.",'url'=>"$rabt"]],
]])]);return false;}
#شتراك 
$op = file_get_contents("ch.txt");
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@$op&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
عذرأ عزيزي ( $name )

عليك الاشترأك بقناة البوت الأولئ 📢.
ليمكنك أستخدام ألبوت بشكل صحيح .
قناة ألبوت ~ @$op ~ 📢.
⋘ - - - - - - - - - - ☆ - - - - - - - - - - ⋙
عند الاشتراك اضغط ~ /start ~ .",
'reply_to_message_id'=>$message->message_id,
]);return false;}
#شتراك اجباري2
$oop = file_get_contents("chc.txt");
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@$oop&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
عذرأ عزيزي ( $name )

عليك الاشترأك بقناة البوت الثانية 📢.
ليمكنك أستخدام ألبوت بشكل صحيح .
قناة ألبوت ~ @$oop ~ 📢.
⋘ - - - - - - - - - - ☆ - - - - - - - - - - ⋙
عند الاشتراك اضغط ~ /start ~ .",
'reply_to_message_id'=>$message->message_id,
]);return false;}
if($text == "/start" and !in_array($from_id,$ebu) and !in_array($from_id,$ebu) and !in_array($chat_id,$ad) and $sta == null){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
*- أهلا بك  في بوت آلزخࢪفة الحديث 📮.
- يحتوي البوت على العديد من الاقسام والخطوط ⚙.

- أليك الاقسام التالية أختࢪ من الاسفل ⤵️💞.*",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' - ؏ـربي  🤎🦇.','callback_data'=>'ii'],['text'=>'ﺄڼڪلش 🤎🦇.','callback_data'=>'ww']],
[['text'=>'ﺄسماء محادثات جاهزۿ 🍼💞.','callback_data'=>'namei']],
[['text'=>'رموز ݪݪزخرفۿ 🧸🎈 .','callback_data'=>'at'],['text'=>'ﺄسماء جاۿزة 🪤📍 .','callback_data'=>'asm']],
[['text'=>'ﺄسماء قنـوات - ڪروبات 📮🩹 .','callback_data'=>'negchtm']],
[['text'=>'ﺄسماء ببجي ڪيوت  🚧🧃.','callback_data'=>'pubgs'],['text'=>'بـأيوات ﺄنستا 📗🎀.','callback_data'=>'bins']],
[['text'=>'أختِصارات 🗿💕','callback_data'=>'iktsarat']],
[['text'=>'نبَذات تليڪرأم 📘🧃','callback_data'=>'btele'],['text'=>'وصوفات ڪروبات وقنوات 💒🦯.','callback_data'=>'wsofat']],
]
])
]);
}
if($text == "/start" and !in_array($from_id,$ebu) and !in_array($from_id,$ebu) and !in_array($chat_id,$ad) and $sta != null){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>
"
*- أهلا بك  في بوت آلزخࢪفة الحديث 📮.
- يحتوي البوت على العديد من الاقسام والخطوط ⚙.

- أليك الاقسام التالية أختࢪ من الاسفل ⤵️💞.*",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' - ؏ـربي  🤎🦇.','callback_data'=>'ii'],['text'=>'ﺄڼڪلش 🤎🦇.','callback_data'=>'ww']],
[['text'=>'ﺄسماء محادثات جاهزۿ 🍼💞.','callback_data'=>'namei']],
[['text'=>'رموز ݪݪزخرفۿ 🧸🎈 .','callback_data'=>'at'],['text'=>'ﺄسماء جاۿزة 🪤📍 .','callback_data'=>'asm']],
[['text'=>'ﺄسماء قنـوات - ڪروبات 📮🩹 .','callback_data'=>'negchtm']],
[['text'=>'ﺄسماء ببجي ڪيوت  🚧🧃.','callback_data'=>'pubgs'],['text'=>'بـأيوات ﺄنستا 📗🎀.','callback_data'=>'bins']],
[['text'=>'أختِصارات 🗿💕','callback_data'=>'iktsarat']],
[['text'=>'نبَذات تليڪرأم 📘🧃','callback_data'=>'btele'],['text'=>'وصوفات ڪروبات وقنوات 💒🦯.','callback_data'=>'wsofat']],
]
])
]);
}
if($data == "home" ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"
*- أهلا بك  في بوت آلزخࢪفة الحديث 📮.
- يحتوي البوت على العديد من الاقسام والخطوط ⚙.

- أليك الاقسام التالية أختࢪ من الاسفل ⤵️💞.*",
'parse_mode'=>"Markdown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' - ؏ـربي  🤎🦇.','callback_data'=>'ii'],['text'=>'ﺄڼڪلش 🤎🦇.','callback_data'=>'ww']],
[['text'=>'ﺄسماء محادثات جاهزۿ 🍼💞.','callback_data'=>'namei']],
[['text'=>'رموز ݪݪزخرفۿ 🧸🎈 .','callback_data'=>'at'],['text'=>'ﺄسماء جاۿزة 🪤📍 .','callback_data'=>'asm']],
[['text'=>'ﺄسماء قنـوات - ڪروبات 📮🩹 .','callback_data'=>'negchtm']],
[['text'=>'ﺄسماء ببجي ڪيوت  🚧🧃.','callback_data'=>'pubgs'],['text'=>'بـأيوات ﺄنستا 📗🎀.','callback_data'=>'bins']],
[['text'=>'أختِصارات 🗿💕','callback_data'=>'iktsarat']],
[['text'=>'نبَذات تليڪرأم 📘🧃','callback_data'=>'btele'],['text'=>'وصوفات ڪروبات وقنوات 💒🦯.','callback_data'=>'wsofat']],

]
])
]);
}

if($data == "ww" ){
file_put_contents("k5.txt","k5");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'*- حسنآ قم بأرسال اسمڪ باللغه الانكليزيه وألحروف سمول . !*',
'parse_mode'=>'MarkDown',
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'ألعوده الى القائمة الرئيسيه ↪' ,'callback_data'=>"home"]],
]])
]);   
}
if($data == "ii" ){
file_put_contents("k6.txt","k6");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'*- حسنآ قم بأرسال اسمڪ باللغه ﺄلعربيه . !*',
'parse_mode'=>'MarkDown',
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'ألعوده الى القائمة الرئيسيه ↪' ,'callback_data'=>"home"]],
]])
]);   
}
#زخرفه انكلش
  if($text != "/start"   and $k5 == "k5" and $chat_id !=  $k6 and $chat_id != $k7){
      file_put_contents("k5.txt","none");
      bot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"",
  ]);
$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',];  
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text); 
$MA = str_replace('a','ᵃ',$text);
$MA = str_replace('A','ᵃ',$MA);
$MA = str_replace('b','ᵇ',$MA);
$MA = str_replace('B','ᵇ',$MA);
$MA = str_replace('c','ᶜ',$MA);
$MA = str_replace('C','ᶜ',$MA);
$MA = str_replace('d','ᵈ',$MA);
$MA = str_replace('D','ᵈ',$MA);
$MA = str_replace('e','ᵉ',$MA);
$MA = str_replace('E','ᵉ',$MA);
$MA = str_replace('f','ᶠ',$MA);
$MA = str_replace('F','ᶠ',$MA);
$MA = str_replace('g','ᵍ',$MA);
$MA = str_replace('G','ᵍ',$MA);
$MA = str_replace('h','ʰ',$MA);
$MA = str_replace('H','ʰ',$MA);
$MA = str_replace('i','ᶤ',$MA);
$MA = str_replace('I','ᶤ',$MA);
$MA = str_replace('j','ʲ',$MA);
$MA = str_replace('J','ʲ',$MA);
$MA = str_replace('k','ᵏ',$MA);
$MA = str_replace('K','ᵏ',$MA);
$MA = str_replace('l','ˡ',$MA);
$MA = str_replace('L','ˡ',$MA);
$MA = str_replace('m','ᵐ',$MA);
$MA = str_replace('M','ᵐ',$MA);
$MA = str_replace('n','ᶰ',$MA);
$MA = str_replace('N','ᶰ',$MA);
$MA = str_replace('o','ᵒ',$MA);
$MA = str_replace('O','ᵒ',$MA);
$MA = str_replace('p','ᵖ',$MA);
$MA = str_replace('P','ᵖ',$MA);
$MA = str_replace('q','ᵠ',$MA);
$MA = str_replace('Q','ᵠ',$MA);
$MA = str_replace('r','ʳ',$MA);
$MA = str_replace('R','ʳ',$MA);
$MA = str_replace('s','ˢ',$MA);
$MA = str_replace('S','ˢ',$MA);
$MA = str_replace('t','ᵗ',$MA);
$MA = str_replace('T','ᵗ',$MA);
$MA = str_replace('u','ᵘ',$MA);
$MA = str_replace('U','ᵘ',$MA);
$MA = str_replace('v','ᵛ',$MA);
$MA = str_replace('V','ᵛ',$MA);
$MA = str_replace('w','ʷ',$MA);
$MA = str_replace('W','ʷ',$MA);
$MA = str_replace('x','ˣ',$MA);
$MA = str_replace('X','ˣ',$MA);
$MA = str_replace('y','ʸ',$MA);
$MA = str_replace('Y','ʸ',$MA);
$MA = str_replace('z','ᶻ',$MA);
$MA = str_replace('Z','ᶻ',$MA);
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>'*'.$MA.' '.$smile.'* ',
'parse_mode'=>'MarkDown',
]);
$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$MA1 = str_replace('a', 'ᴀ', $text);
$MA1 = str_replace('b', 'ʙ', $MA1);
$MA1 = str_replace('c', 'ᴄ', $MA1);
$MA1 = str_replace('d', 'ᴅ', $MA1);
$MA1 = str_replace('e', 'ᴇ', $MA1);
$MA1 = str_replace('f', 'ᴈ', $MA1);
$MA1 = str_replace('g', 'ɢ', $MA1);
$MA1 = str_replace('h', 'ʜ', $MA1);
$MA1 = str_replace('i', 'ɪ', $MA1);
$MA1 = str_replace('j', 'ᴊ', $MA1);
$MA1 = str_replace('k', 'ᴋ', $MA1);
$MA1 = str_replace('l', 'ʟ', $MA1);
$MA1 = str_replace('m', 'ᴍ', $MA1);
$MA1 = str_replace('n', 'ɴ', $MA1);
$MA1 = str_replace('o', 'ᴏ', $MA1);
$MA1 = str_replace('p', 'ᴘ', $MA1);
$MA1 = str_replace('q', 'ᴓ', $MA1);
$MA1 = str_replace('r', 'ʀ', $MA1);
$MA1 = str_replace('s', 'ᴤ', $MA1);
$MA1 = str_replace('t', 'ᴛ', $MA1);
$MA1 = str_replace('u', 'ᴜ', $MA1);
$MA1 = str_replace('v', 'ᴠ', $MA1);
$MA1 = str_replace('w', 'ᴡ', $MA1);
$MA1 = str_replace('x', 'ᴥ', $MA1);
$MA1 = str_replace('y', 'ʏ', $MA1);
$MA1 = str_replace('z', 'ᴢ', $MA1);
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>'*'.$MA1.' '.$smile.'* ',
'parse_mode'=>'MarkDown',
]);
$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text); 
$MA2 = str_replace('a','α',$text);
$MA2 = str_replace("b","в",$MA2);
$MA2 = str_replace("c","c",$MA2);
$MA2 = str_replace("d","∂",$MA2);
$MA2 = str_replace("e","ε",$MA2);
$MA2 = str_replace("E","ғ",$MA2);
$MA2 = str_replace("g","g",$MA2);
$MA2 = str_replace("h","н",$MA2);
$MA2 = str_replace("i","ι",$MA2);
$MA2 = str_replace("j","נ",$MA2);
$MA2 = str_replace("k","к",$MA2);
$MA2 = str_replace("l","ℓ",$MA2);
$MA2 = str_replace("m","м",$MA2);
$MA2 = str_replace("n","η",$MA2);
$MA2 = str_replace("o","σ",$MA2);
$MA2 = str_replace("p","ρ",$MA2);
$MA2 = str_replace("q","q",$MA2);
$MA2 = str_replace("r","я",$MA2);
$MA2 = str_replace("s","s",$MA2);
$MA2 = str_replace("t","т",$MA2);
$MA2 = str_replace("u","υ",$MA2);
$MA2 = str_replace("v","v",$MA2);
$MA2 = str_replace("w","ω",$MA2);
$MA2 = str_replace("x","x",$MA2);
$MA2 = str_replace("y","ү",$MA2);
$MA2 = str_replace("z","z",$MA2);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'*'.$MA2.' '.$smile.'* ',
'parse_mode'=>'MarkDown',
]);
$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$MA3 = str_replace('a','𝙰',$text); 
 $MA3 = str_replace('b','𝙱',$MA3); 
 $MA3 = str_replace('c','𝙲',$MA3); 
 $MA3 = str_replace('d','𝙳',$MA3); 
 $MA3 = str_replace('e','𝙴',$MA3); 
 $MA3 = str_replace('f','𝙵',$MA3); 
 $MA3 = str_replace('g','𝙶',$MA3); 
 $MA3 = str_replace('h','𝙷',$MA3); 
 $MA3 = str_replace('i','𝙸',$MA3); 
 $MA3 = str_replace('j','??',$MA3); 
 $MA3 = str_replace('k','𝙺',$MA3); 
 $MA3 = str_replace('l','𝙻',$MA3); 
 $MA3 = str_replace('m','𝙼',$MA3); 
 $MA3 = str_replace('n','𝙽',$MA3); 
 $MA3 = str_replace('o','𝙾',$MA3); 
 $MA3 = str_replace('p','𝙿',$MA3); 
 $MA3 = str_replace('q','𝚀',$MA3); 
 $MA3 = str_replace('r','𝚁',$MA3); 
 $MA3 = str_replace('s','𝚂',$MA3); 
 $MA3 = str_replace('t','𝚃',$MA3); 
 $MA3 = str_replace('u','𝚄',$MA3); 
 $MA3 = str_replace('v','𝚅',$MA3); 
 $MA3 = str_replace('w','𝚆',$MA3); 
 $MA3 = str_replace('x','𝚇',$MA3); 
 $MA3 = str_replace('y','𝚈',$MA3); 
 $MA3 = str_replace('z','𝚉',$MA3);
bot('sendMessage',[ 
'chat_id'=>$chat_id,
'text'=>'*'.$MA3.' '.$smile.'* ',
'parse_mode'=>'MarkDown',
]);
$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$MA4 = str_replace('a','𝖆',$text); 
 $MA4 = str_replace('b','𝖇',$MA4); 
 $MA4 = str_replace('c','𝖈',$MA4); 
 $MA4 = str_replace('d','𝖉',$MA4); 
 $MA4 = str_replace('e','𝖊',$MA4); 
 $MA4 = str_replace('f','𝖋',$MA4); 
 $MA4 = str_replace('g','𝖌',$MA4); 
 $MA4 = str_replace('h','𝖍',$MA4); 
 $MA4 = str_replace('i','𝖎',$MA4); 
 $MA4 = str_replace('j','𝖏',$MA4); 
 $MA4 = str_replace('k','𝖐',$MA4); 
 $MA4 = str_replace('l','𝖑',$MA4); 
 $MA4 = str_replace('m','𝖒',$MA4); 
 $MA4 = str_replace('n','𝖓',$MA4); 
 $MA4 = str_replace('o','𝖔',$MA4); 
 $MA4 = str_replace('p','𝖕',$MA4); 
 $MA4 = str_replace('q','𝖖',$MA4); 
 $MA4 = str_replace('r','𝖗',$MA4); 
 $MA4 = str_replace('s','𝖘',$MA4); 
 $MA4 = str_replace('t','𝖙',$MA4); 
 $MA4 = str_replace('u','𝖚',$MA4); 
 $MA4 = str_replace('v','𝖛',$MA4); 
 $MA4 = str_replace('w','𝖜',$MA4); 
 $MA4 = str_replace('x','𝖝',$MA4); 
 $MA4 = str_replace('y','𝖞',$MA4); 
 $MA4 = str_replace('z','𝖟',$MA4);
bot('sendMessage',[ 
'chat_id'=>$chat_id,
'text'=>'*'.$MA4.' '.$smile.'* ',
'parse_mode'=>'MarkDown',
]);
$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$MA5 = str_replace('a','𝔸',$text);
$MA5 = str_replace("b","𝔹",$MA5);
$MA5 = str_replace("c","ℂ",$MA5);
$MA5 = str_replace("d","𝔻",$MA5);
$MA5 = str_replace("e","𝔼",$MA5);
$MA5 = str_replace("E","𝔽",$MA5);
$MA5 = str_replace("g","𝔾",$MA5);
$MA5 = str_replace("h","ℍ",$MA5);
$MA5 = str_replace("i","𝕀",$MA5);
$MA5 = str_replace("j","𝕁",$MA5);
$MA5 = str_replace("k","𝕂",$MA5);
$MA5 = str_replace("l","𝕃",$MA5);
$MA5 = str_replace("m","𝕄",$MA5);
$MA5 = str_replace("n","ℕ",$MA5);
$MA5 = str_replace("o","𝕆",$MA5);
$MA5 = str_replace("p","ℙ",$MA5);
$MA5 = str_replace("q","ℚ",$MA5);
$MA5 = str_replace("r","ℝ",$MA5);
$MA5 = str_replace("s","𝕊",$MA5);
$MA5 = str_replace("t","𝕋",$MA5);
$MA5 = str_replace("u","𝕌",$MA5);
$MA5 = str_replace("v","𝕍",$MA5);
$MA5 = str_replace("w","𝕎",$MA5);
$MA5 = str_replace("x","𝕏",$MA5);
$MA5 = str_replace("y","Ý",$MA5);
$MA5 = str_replace("z","ℤ",$MA5);
 bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>'*'.$MA5.' '.$smile.'* ',
'parse_mode'=>'MarkDown',
]);
$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$MA6 = str_replace('a','𝐀',$text);
$MA6 = str_replace("b","𝐁",$MA6);
$MA6 = str_replace("c","𝐂",$MA6);
$MA6 = str_replace("d","𝐃",$MA6);
$MA6 = str_replace("e","𝐄",$MA6);
$MA6 = str_replace("E","𝐅",$MA6);
$MA6 = str_replace("g","𝐆",$MA6);
$MA6 = str_replace("h","𝐇",$MA6);
$MA6 = str_replace("i","𝐈",$MA6);
$MA6 = str_replace("j","𝐉",$MA6);
$MA6 = str_replace("k","𝐊",$MA6);
$MA6 = str_replace("l","𝑳",$MA6);
$MA6 = str_replace("m","𝐌",$MA6);
$MA6 = str_replace("n","𝐍",$MA6);
$MA6 = str_replace("o","𝐎",$MA6);
$MA6 = str_replace("p","𝐏",$MA6);
$MA6 = str_replace("q","𝐐",$MA6);
$MA6 = str_replace("r","𝐑",$MA6);
$MA6 = str_replace("s","𝐒",$MA6);
$MA6 = str_replace("t","𝐓",$MA6);
$MA6 = str_replace("u","𝐔",$MA6);
$MA6 = str_replace("v","𝐕",$MA6);
$MA6 = str_replace("w","𝐖",$MA6);
$MA6 = str_replace("x","𝐗",$MA6);
$MA6 = str_replace("y","𝐘",$MA6);
$MA6 = str_replace("z","𝐙",$MA6);
 bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>'*'.$MA6.' '.$smile.'* ',
'parse_mode'=>'MarkDown',
]);
$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$MA7 = str_replace('a','𝘢',$text); 
 $MA7 = str_replace('b','𝘣',$MA7); 
 $MA7 = str_replace('c','𝘤',$MA7); 
 $MA7 = str_replace('d','𝘥',$MA7); 
 $MA7 = str_replace('e','𝘦',$MA7); 
 $MA7 = str_replace('f','𝘧',$MA7); 
 $MA7 = str_replace('g','𝘨',$MA7); 
 $MA7 = str_replace('h','𝘩',$MA7); 
 $MA7 = str_replace('i','𝘪',$MA7); 
 $MA7 = str_replace('j','𝘫',$MA7); 
 $MA7 = str_replace('k','𝘬',$MA7); 
 $MA7 = str_replace('l','𝘭',$MA7); 
 $MA7 = str_replace('m','𝘮',$MA7); 
 $MA7 = str_replace('n','𝘯',$MA7); 
 $MA7 = str_replace('o','𝘰',$MA7); 
 $MA7 = str_replace('p','𝘱',$MA7); 
 $MA7 = str_replace('q','𝘲',$MA7); 
 $MA7 = str_replace('r','𝘳',$MA7); 
 $MA7 = str_replace('s','𝘴',$MA7); 
 $MA7 = str_replace('t','𝘵',$MA7); 
 $MA7 = str_replace('u','𝘶',$MA7); 
 $MA7 = str_replace('v','𝘷',$MA7); 
 $MA7 = str_replace('w','𝘸',$MA7); 
 $MA7 = str_replace('x','𝘹',$MA7); 
 $MA7 = str_replace('y','𝘺',$MA7); 
 $MA7 = str_replace('z','𝘻',$MA7);
bot('sendMessage',[ 
'chat_id'=>$chat_id,
'text'=>'*'.$MA7.' '.$smile.'* ',
'parse_mode'=>'MarkDown',
]);
$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$MA8 = str_replace('a','𝒂',$text); 
 $MA8 = str_replace('b','𝒃',$MA8); 
 $MA8 = str_replace('c','𝒄',$MA8); 
 $MA8 = str_replace('d','𝒅',$MA8); 
 $MA8 = str_replace('e','𝒆',$MA8); 
 $MA8 = str_replace('f','𝒇',$MA8); 
 $MA8 = str_replace('g','𝒈',$MA8); 
 $MA8 = str_replace('h','𝒉',$MA8); 
 $MA8 = str_replace('i','𝒊',$MA8); 
 $MA8 = str_replace('j','𝒋',$MA8); 
 $MA8 = str_replace('k','𝒌',$MA8); 
 $MA8 = str_replace('l','𝒍',$MA8); 
 $MA8 = str_replace('m','𝒎',$MA8); 
 $MA8 = str_replace('n','𝒏',$MA8); 
 $MA8 = str_replace('o','𝒐',$MA8); 
 $MA8 = str_replace('p','𝒑',$MA8); 
 $MA8 = str_replace('q','𝒒',$MA8); 
 $MA8 = str_replace('r','𝒓',$MA8); 
 $MA8 = str_replace('s','𝒔',$MA8); 
 $MA8 = str_replace('t','𝒕',$MA8); 
 $MA8 = str_replace('u','𝒖',$MA8); 
 $MA8 = str_replace('v','𝒗',$MA8); 
 $MA8 = str_replace('w','𝒘',$MA8); 
 $MA8 = str_replace('x','𝒙',$MA8); 
 $MA8 = str_replace('y','𝒚',$MA8); 
 $MA8 = str_replace('z','𝒛',$MA8);
bot('sendMessage',[ 
'chat_id'=>$chat_id,
'text'=>'*'.$MA8.' '.$smile.'* ',
'parse_mode'=>'MarkDown',
]);

$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$MA9 = str_replace('a','𝑎',$text); 
 $MA9 = str_replace('b','𝑏',$MA9); 
 $MA9 = str_replace('c','𝑐',$MA9); 
 $MA9 = str_replace('d','𝑑',$MA9); 
 $MA9 = str_replace('e','𝑒',$MA9); 
 $MA9 = str_replace('f','𝑓',$MA9); 
 $MA9 = str_replace('g','𝑔',$MA9); 
 $MA9 = str_replace('h','ℎ',$MA9); 
 $MA9 = str_replace('i','𝑖',$MA9); 
 $MA9 = str_replace('j','𝑗',$MA9); 
 $MA9 = str_replace('k','𝑘',$MA9); 
 $MA9 = str_replace('l','𝑙',$MA9); 
 $MA9 = str_replace('m','𝑚',$MA9); 
 $MA9 = str_replace('n','𝑛',$MA9); 
 $MA9 = str_replace('o','𝑜',$MA9); 
 $MA9 = str_replace('p','𝑝',$MA9); 
 $MA9 = str_replace('q','𝑞',$MA9); 
 $MA9 = str_replace('r','𝑟',$MA9); 
 $MA9 = str_replace('s','𝑠',$MA9); 
 $MA9 = str_replace('t','𝑡',$MA9); 
 $MA9 = str_replace('u','𝑢',$MA9); 
 $MA9 = str_replace('v','𝑣',$MA9); 
 $MA9 = str_replace('w','𝑤',$MA9); 
 $MA9 = str_replace('x','𝑥',$MA9); 
 $MA9 = str_replace('y','𝑦',$MA9); 
 $MA9 = str_replace('z','𝑧',$MA9);
bot('sendMessage',[ 
'chat_id'=>$chat_id,
'text'=>'*'.$MA9.' '.$smile.'* ',
'parse_mode'=>'MarkDown',
]);

$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$MA10 = str_replace('a','𝕒',$text); 
 $MA10 = str_replace('b','𝕓',$MA10); 
 $MA10 = str_replace('c','𝕔',$MA10); 
 $MA10 = str_replace('d','𝕕',$MA10); 
 $MA10 = str_replace('e','𝕖',$MA10); 
 $MA10 = str_replace('f','𝕗',$MA10); 
 $MA10 = str_replace('g','𝕘',$MA10); 
 $MA10 = str_replace('h','𝕙',$MA10); 
 $MA10 = str_replace('i','𝕚',$MA10); 
 $MA10 = str_replace('j','𝕛',$MA10); 
 $MA10 = str_replace('k','𝕜',$MA10); 
 $MA10 = str_replace('l','𝕝',$MA10); 
 $MA10 = str_replace('m','𝕞',$MA10); 
 $MA10 = str_replace('n','𝕟',$MA10); 
 $MA10 = str_replace('o','𝕠',$MA10); 
 $MA10 = str_replace('p','𝕡',$MA10); 
 $MA10 = str_replace('q','𝕢',$MA10); 
 $MA10 = str_replace('r','𝕣',$MA10); 
 $MA10 = str_replace('s','𝕤',$MA10); 
 $MA10 = str_replace('t','𝕥',$MA10); 
 $MA10 = str_replace('u','𝕦',$MA10); 
 $MA10 = str_replace('v','𝕧',$MA10); 
 $MA10 = str_replace('w','𝕨',$MA10); 
 $MA10 = str_replace('x','𝕩',$MA10); 
 $MA10 = str_replace('y','𝕪',$MA10); 
 $MA10 = str_replace('z','𝕫',$MA10);
bot('sendMessage',[ 
'chat_id'=>$chat_id,
'text'=>'*'.$MA10.' '.$smile.'* ',
'parse_mode'=>'MarkDown',
]);

$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$MA11 = str_replace('a','𝗔',$text);
$MA11 = str_replace('b','𝗕',$MA11);
$MA11 = str_replace('c','𝗖',$MA11);
$MA11 = str_replace('d','𝗗',$MA11);
$MA11 = str_replace('e','𝗘',$MA11);
$MA11 = str_replace('f','f',$MA11);
$MA11 = str_replace('g','𝗚',$MA11);
$MA11 = str_replace('h','𝗛',$MA11);
$MA11 = str_replace('i','𝗜',$MA11);
$MA11 = str_replace('j','𝗝',$MA11);
$MA11 = str_replace('k','𝗞',$MA11);
$MA11 = str_replace('l','𝗟',$MA11);
$MA11 = str_replace('m','𝗠',$MA11);
$MA11 = str_replace('n','𝗡',$MA11);
$MA11 = str_replace('o','𝗢',$MA11);
$MA11 = str_replace('p','𝗣',$MA11);
$MA11 = str_replace('q','𝗤',$MA11);
$MA11 = str_replace('r','𝗥',$MA11);
$MA11 = str_replace('s','𝗦',$MA11);
$MA11 = str_replace('t','𝗧',$MA11);
$MA11 = str_replace('u','𝗨',$MA11);
$MA11 = str_replace('v','𝗩',$MA11);
$MA11 = str_replace('w','𝗪',$MA11);
$MA11 = str_replace('x','𝗫',$MA11);
$MA11 = str_replace('y','𝗬',$MA11);
$MA11 = str_replace('z','𝗭',$MA11);
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>'*'.$MA11.' '.$smile.'* ',
'parse_mode'=>'MarkDown',
]);

$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$MA13 = str_replace('a','ᗩ',$text);
$MA13 = str_replace('b','ᗷ',$MA13);
$MA13 = str_replace('c','ᑕ',$MA13);
$MA13 = str_replace('d','ᗞ',$MA13);
$MA13 = str_replace('e','ᗴ',$MA13);
$MA13 = str_replace('f','ᖴ',$MA13);
$MA13 = str_replace('g','Ꮐ',$MA13);
$MA13 = str_replace('h','ᕼ',$MA13);
$MA13 = str_replace('i','Ꮖ',$MA13);
$MA13 = str_replace('j','ᒍ',$MA13);
$MA13 = str_replace('k','Ꮶ',$MA13);
$MA13 = str_replace('l','し',$MA13);
$MA13 = str_replace('m','ᗰ',$MA13);
$MA13 = str_replace('n','ᑎ',$MA13);
$MA13 = str_replace('o','ᝪ',$MA13);
$MA13 = str_replace('p','ᑭ',$MA13);
$MA13 = str_replace('q','ᑫ',$MA13);
$MA13 = str_replace('r','ᖇ',$MA13);
$MA13 = str_replace('s','ᔑ',$MA13);
$MA13 = str_replace('t','Ꭲ',$MA13);
$MA13 = str_replace('u','ᑌ',$MA13);
$MA13 = str_replace('v','ᐯ',$MA13);
$MA13 = str_replace('w','ᗯ',$MA13);
$MA13 = str_replace('x','᙭',$MA13);
$MA13 = str_replace('y','Ꭹ',$MA13);
$MA13 = str_replace('z','Ꮓ',$MA13);
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>'*'.$MA13.' '.$smile.'* ',
'parse_mode'=>'MarkDown',
]);

$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$MA14 = str_replace('a','Ａ',$text);
$MA14 = str_replace('b','Ｂ',$MA14);
$MA14 = str_replace('c','Ｃ',$MA14);
$MA14 = str_replace('d','Ｄ',$MA14);
$MA14 = str_replace('e','Ｅ',$MA14);
$MA14 = str_replace('f','Ｆ',$MA14);
$MA14 = str_replace('g','Ｇ',$MA14);
$MA14 = str_replace('h','Ｈ',$MA14);
$MA14 = str_replace('i','Ｉ',$MA14);
$MA14 = str_replace('j','Ｊ',$MA14);
$MA14 = str_replace('k','Ｋ',$MA14);
$MA14 = str_replace('l','Ｌ',$MA14);
$MA14 = str_replace('m','Ｍ',$MA14);
$MA14 = str_replace('n','Ｎ',$MA14);
$MA14 = str_replace('o','Ｏ',$MA14);
$MA14 = str_replace('p','Ｐ',$MA14);
$MA14 = str_replace('q','Ｑ',$MA14);
$MA14 = str_replace('r','Ｒ',$MA14);
$MA14 = str_replace('s','Ｓ',$MA14);
$MA14 = str_replace('t','Ｔ',$MA14);
$MA14 = str_replace('u','Ｕ',$MA14);
$MA14 = str_replace('v','Ｖ',$MA14);
$MA14 = str_replace('w','Ｗ',$MA14);
$MA14 = str_replace('x','Ｘ',$MA14);
$MA14 = str_replace('y','Ｙ',$MA14);
$MA14 = str_replace('z','Ｚ',$MA14);
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>'*'.$MA14.' '.$smile.'* ',
'parse_mode'=>'MarkDown',
]);

$items = ['𝄮' , '𝄵' , '??' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '??' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$MA15 = str_replace('a','ᴀ',$text);
$MA15 = str_replace('b','ʙ',$MA15);
$MA15 = str_replace('c','ᴄ',$MA15);
$MA15 = str_replace('d','ᴅ',$MA15);
$MA15 = str_replace('e','ᴇ',$MA15);
$MA15 = str_replace('f','ꜰ',$MA15);
$MA15 = str_replace('g','ɢ',$MA15);
$MA15 = str_replace('h','ʜ',$MA15);
$MA15 = str_replace('i','ɪ',$MA15);
$MA15 = str_replace('j','ᴊ',$MA15);
$MA15 = str_replace('k','ᴋ',$MA15);
$MA15 = str_replace('l','ʟ',$MA15);
$MA15 = str_replace('m','ᴍ',$MA15);
$MA15 = str_replace('n','ɴ',$MA15);
$MA15 = str_replace('o','ᴏ',$MA15);
$MA15 = str_replace('p','ᴩ',$MA15);
$MA15 = str_replace('q','Q',$MA15);
$MA15 = str_replace('r','ʀ',$MA15);
$MA15 = str_replace('s','ꜱ',$MA15);
$MA15 = str_replace('t','ᴛ',$MA15);
$MA15 = str_replace('u','ᴜ',$MA15);
$MA15 = str_replace('v','ᴠ',$MA15);
$MA15 = str_replace('w','ᴡ',$MA15);
$MA15 = str_replace('x','x',$MA15);
$MA15 = str_replace('y','Y',$MA15);
$MA15 = str_replace('z','ᴢ',$MA15);
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>'*'.$MA15.' '.$smile.'* ',
'parse_mode'=>'MarkDown',
]);

$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$MA16 = str_replace('a','ᴬ',$text);
$MA16 = str_replace('b','ᴮ',$MA16);
$MA16 = str_replace('c','ᶜ',$MA16);
$MA16 = str_replace('d','ᴰ',$MA16);
$MA16 = str_replace('e','ᴱ',$MA16);
$MA16 = str_replace('f','ᶠ',$MA16);
$MA16 = str_replace('g','ᴳ',$MA16);
$MA16 = str_replace('h','ᴴ',$MA16);
$MA16 = str_replace('i','ᴵ',$MA16);
$MA16 = str_replace('j','ᴶ',$MA16);
$MA16 = str_replace('k','ᴷ',$MA16);
$MA16 = str_replace('l','ᴸ',$MA16);
$MA16 = str_replace('m','ᴹ',$MA16);
$MA16 = str_replace('n','ᴺ',$MA16);
$MA16 = str_replace('o','ᴼ',$MA16);
$MA16 = str_replace('p','ᴾ',$MA16);
$MA16 = str_replace('q','Q',$MA16);
$MA16 = str_replace('r','ᴿ',$MA16);
$MA16 = str_replace('s','ˢ',$MA16);
$MA16 = str_replace('t','ᵀ',$MA16);
$MA16 = str_replace('u','ᵁ',$MA16);
$MA16 = str_replace('v','ⱽ',$MA16);
$MA16 = str_replace('w','ᵂ',$MA16);
$MA16 = str_replace('x','ˣ',$MA16);
$MA16 = str_replace('y','ʸ',$MA16);
$MA16 = str_replace('z','ᶻ',$MA16);
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>'*'.$MA16.' '.$smile.'* ',
'parse_mode'=>'MarkDown',
]);

$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$MA17 = str_replace('a','𝐀',$text);
$MA17 = str_replace('b','𝐁',$MA17);
$MA17 = str_replace('c','𝐂',$MA17);
$MA17 = str_replace('d','𝐃',$MA17);
$MA17 = str_replace('e','𝐄',$MA17);
$MA17 = str_replace('f','𝐅',$MA17);
$MA17 = str_replace('g','𝐆',$MA17);
$MA17 = str_replace('h','𝐇',$MA17);
$MA17 = str_replace('i','𝐈',$MA17);
$MA17 = str_replace('j','𝐉',$MA17);
$MA17 = str_replace('k','𝐊',$MA17);
$MA17 = str_replace('l','𝐋',$MA17);
$MA17 = str_replace('m','𝐌',$MA17);
$MA17 = str_replace('n','𝐍',$MA17);
$MA17 = str_replace('o','𝐎',$MA17);
$MA17 = str_replace('p','𝐏',$MA17);
$MA17 = str_replace('q','𝐐',$MA17);
$MA17 = str_replace('r','𝐑',$MA17);
$MA17 = str_replace('s','𝐒',$MA17);
$MA17 = str_replace('t','𝐓',$MA17);
$MA17 = str_replace('u','𝐔',$MA17);
$MA17 = str_replace('v','𝐕',$MA17);
$MA17 = str_replace('w','𝐖',$MA17);
$MA17 = str_replace('x','𝐗',$MA17);
$MA17 = str_replace('y','𝐘',$MA17);
$MA17 = str_replace('z','𝐙',$MA17);
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>'*'.$MA17.' '.$smile.'* ',
'parse_mode'=>'MarkDown',
]);

$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$MA18 = str_replace('a','ᗩ',$text);
$MA18 = str_replace('b','ᗷ',$MA18);
$MA18 = str_replace('c','ᑕ',$MA18);
$MA18 = str_replace('d','ᗪ',$MA18);
$MA18 = str_replace('e','ᗴ',$MA18);
$MA18 = str_replace('f','ᖴ',$MA18);
$MA18 = str_replace('g','Ǥ',$MA18);
$MA18 = str_replace('h','ᕼ',$MA18);
$MA18 = str_replace('i','Ꭵ',$MA18);
$MA18 = str_replace('j','ᒎ',$MA18);
$MA18 = str_replace('k','ᛕ',$MA18);
$MA18 = str_replace('l','ᒪ',$MA18);
$MA18 = str_replace('m','ᗰ',$MA18);
$MA18 = str_replace('n','ᑎ',$MA18);
$MA18 = str_replace('o','ᗝ',$MA18);
$MA18 = str_replace('p','ᑭ',$MA18);
$MA18 = str_replace('q','Ɋ',$MA18);
$MA18 = str_replace('r','ᖇ',$MA18);
$MA18 = str_replace('s','Տ',$MA18);
$MA18 = str_replace('t','丅',$MA18);
$MA18 = str_replace('u','ᑌ',$MA18);
$MA18 = str_replace('v','ᐯ',$MA18);
$MA18 = str_replace('w','ᗯ',$MA18);
$MA18 = str_replace('x','᙭',$MA18);
$MA18 = str_replace('y','Ƴ',$MA18);
$MA18 = str_replace('z','乙',$MA18);
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>'*'.$MA18.' '.$smile.'* ',
'parse_mode'=>'MarkDown',
]);

$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$MA19 = str_replace('a','A̶',$text);
$MA19 = str_replace('b','B̶',$MA19);
$MA19 = str_replace('c','C̶',$MA19);
$MA19 = str_replace('d','D̶',$MA19);
$MA19 = str_replace('e','E̶',$MA19);
$MA19 = str_replace('f','F̶',$MA19);
$MA19 = str_replace('g','G̶',$MA19);
$MA19 = str_replace('h','H̶',$MA19);
$MA19 = str_replace('i','I̶',$MA19);
$MA19 = str_replace('j','J̶',$MA19);
$MA19 = str_replace('k','K̶',$MA19);
$MA19 = str_replace('l','L̶',$MA19);
$MA19 = str_replace('m','M̶',$MA19);
$MA19 = str_replace('n','N̶',$MA19);
$MA19 = str_replace('o','O̶',$MA19);
$MA19 = str_replace('p','P̶',$MA19);
$MA19 = str_replace('q','Q̶',$MA19);
$MA19 = str_replace('r','R̶',$MA19);
$MA19 = str_replace('s','S̶',$MA19);
$MA19 = str_replace('t','T̶',$MA19);
$MA19 = str_replace('u','U̶',$MA19);
$MA19 = str_replace('v','V̶',$MA19);
$MA19 = str_replace('w','W̶',$MA19);
$MA19 = str_replace('x','X̶',$MA19);
$MA19 = str_replace('y','Y̶',$MA19);
$MA19 = str_replace('z','Z̶',$MA19);
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>'*'.$MA19.' '.$smile.'* ',
'parse_mode'=>'MarkDown',
]);

$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '??︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$MA20 = str_replace('a','ꪖ',$text);
$MA20 = str_replace('b','᥇',$MA20);
$MA20 = str_replace('c','ᥴ',$MA20);
$MA20 = str_replace('d','ᦔ',$MA20);
$MA20 = str_replace('e','ꫀ',$MA20);
$MA20 = str_replace('f','ᠻ',$MA20);
$MA20 = str_replace('g','ᧁ',$MA20);
$MA20 = str_replace('h','ꫝ',$MA20);
$MA20 = str_replace('i','𝓲',$MA20);
$MA20 = str_replace('j','𝓳',$MA20);
$MA20 = str_replace('k','𝘬',$MA20);
$MA20 = str_replace('l','ꪶ',$MA20);
$MA20 = str_replace('m','ꪑ',$MA20);
$MA20 = str_replace('n','ꪀ',$MA20);
$MA20 = str_replace('o','ꪮ',$MA20);
$MA20 = str_replace('p','ρ',$MA20);
$MA20 = str_replace('q','𝘲',$MA20);
$MA20 = str_replace('r','𝘳',$MA20);
$MA20 = str_replace('s','𝘴',$MA20);
$MA20 = str_replace('t','𝓽',$MA20);
$MA20 = str_replace('u','ꪊ',$MA20);
$MA20 = str_replace('v','ꪜ',$MA20);
$MA20 = str_replace('w','᭙',$MA20);
$MA20 = str_replace('x','᥊',$MA20);
$MA20 = str_replace('y','ꪗ',$MA20);
$MA20 = str_replace('z','ɀ',$MA20);
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>'*'.$MA20.' '.$smile.'* ',
'parse_mode'=>'MarkDown',
]);

$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$MA20 = str_replace('a','ą',$text);
$MA20 = str_replace('b','ც',$MA20);
$MA20 = str_replace('c','ƈ',$MA20);
$MA20 = str_replace('d','ɖ',$MA20);
$MA20 = str_replace('e','ɛ',$MA20);
$MA20 = str_replace('f','ʄ',$MA20);
$MA20 = str_replace('g','ɠ',$MA20);
$MA20 = str_replace('h','ɧ',$MA20);
$MA20 = str_replace('i','ı',$MA20);
$MA20 = str_replace('j','ʝ',$MA20);
$MA20 = str_replace('k','ƙ',$MA20);
$MA20 = str_replace('l','Ɩ',$MA20);
$MA20 = str_replace('m','ɱ',$MA20);
$MA20 = str_replace('n','ŋ',$MA20);
$MA20 = str_replace('o','ơ',$MA20);
$MA20 = str_replace('p','℘',$MA20);
$MA20 = str_replace('q','զ',$MA20);
$MA20 = str_replace('r','r',$MA20);
$MA20 = str_replace('s','ʂ',$MA20);
$MA20 = str_replace('t','ɬ',$MA20);
$MA20 = str_replace('u','ų',$MA20);
$MA20 = str_replace('v','v',$MA20);
$MA20 = str_replace('w','ῳ',$MA20);
$MA20 = str_replace('x','ҳ',$MA20);
$MA20 = str_replace('y','ყ',$MA20);
$MA20 = str_replace('z','ʑ',$MA20);
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>'*'.$MA20.' '.$smile.'* ',
'parse_mode'=>'MarkDown',
]);
$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$MA21 = str_replace('a', '[̲̅a̲̅]', $text);
$MA21 = str_replace('b', '[̲̅b̲̅]', $MA21);
$MA21 = str_replace('c', '[̲̅c̲̅]', $MA21);
$MA21 = str_replace('d', '[̲̅d̲̅]', $MA21);
$MA21 = str_replace('e', '[̲̅e̲̅]', $MA21);
$MA21 = str_replace('f', '[̲̅f̲̅]', $MA21);
$MA21 = str_replace('g', '[̲̅g̲̅]', $MA21);
$MA21 = str_replace('h', '[̲̅h̲̅]', $MA21);
$MA21 = str_replace('i', '[̲̅i̲̅]', $MA21);
$MA21 = str_replace('j', '[̲̅j̲̅]', $MA21);
$MA21 = str_replace('k', '[̲̅k̲̅]', $MA21);
$MA21 = str_replace('l', '[̲̅l̲̅]', $MA21);
$MA21 = str_replace('m', '[̲̅m̲̅]', $MA21);
$MA21 = str_replace('n', '[̲̅n̲̅]', $MA21);
$MA21 = str_replace('o', '[̲̅o̲̅]', $MA21);
$MA21 = str_replace('p', '[̲̅p̲̅]', $MA21);
$MA21 = str_replace('q', '[̲̅q̲̅]', $MA21);
$MA21 = str_replace('r', '[̲̅r̲̅]', $MA21);
$MA21 = str_replace('s', '[̲̅s̲̅]', $MA21);
$MA21 = str_replace('t', '[̲̅t̲̅]', $MA21);
$MA21 = str_replace('u', '[̲̅u̲̅]', $MA21);
$MA21 = str_replace('v', '[̲̅v̲̅]', $MA21);
$MA21 = str_replace('w', '[̲̅w̲̅]', $MA21);
$MA21 = str_replace('x', '[̲̅x̲̅]', $MA21);
$MA21 = str_replace('y', '[̲̅y̲̅]', $MA21);
$MA21 = str_replace('z', '[̲̅z̲̅]', $MA21);
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>'*'.$MA21.' '.$smile.'* ',
'parse_mode'=>'MarkDown',
]);
$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$MA22 = str_replace('a','Δ',$text);
$MA22 = str_replace("b","β",$MA22);
$MA22 = str_replace("c","૮",$MA22);
$MA22 = str_replace("d","ᴅ",$MA22);
$MA22 = str_replace("e","૯",$MA22);
$MA22 = str_replace("f","ƒ",$MA22);
$MA22 = str_replace("g","ɢ",$MA22);
$MA22 = str_replace("h","み",$MA22);
$MA22 = str_replace("i","เ",$MA22);
$MA22 = str_replace("j","ʝ",$MA22);
$MA22 = str_replace("k","ҡ",$MA22);
$MA22 = str_replace("l","ɭ",$MA22);
$MA22 = str_replace("m","ണ",$MA22);
$MA22 = str_replace("n","ท",$MA22);
$MA22 = str_replace("o","๏",$MA22);
$MA22 = str_replace("p","ρ",$MA22);
$MA22 = str_replace("q","ǫ",$MA22);
$MA22 = str_replace("r","ʀ",$MA22);
$MA22 = str_replace("s","ઽ",$MA22);
$MA22 = str_replace("t","τ",$MA22);
$MA22 = str_replace("u","υ",$MA22);
$MA22 = str_replace("v","ѵ",$MA22);
$MA22 = str_replace("w","ω",$MA22);
$MA22 = str_replace("x","ﾒ",$MA22);
$MA22 = str_replace("y","ყ",$MA22);
$MA22 = str_replace("z","ʑ",$MA22);
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>'*'.$MA22.' '.$smile.'* ',
'parse_mode'=>'MarkDown',
]);
$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$MA23 = str_replace('a','A꯭',$text);
$MA23 = str_replace("b","B꯭",$MA23);
$MA23 = str_replace("c","C꯭",$MA23);
$MA23 = str_replace("d","D꯭",$MA23);
$MA23 = str_replace("e","E꯭",$MA23);
$MA23 = str_replace("E","F꯭",$MA23);
$MA23 = str_replace("g","G꯭",$MA23);
$MA23 = str_replace("h","H꯭",$MA23);
$MA23 = str_replace("i","I꯭",$MA23);
$MA23 = str_replace("j","J꯭",$MA23);
$MA23 = str_replace("k","K꯭",$MA23);
$MA23 = str_replace("l","L꯭",$MA23);
$MA23 = str_replace("m","M꯭",$MA23);
$MA23 = str_replace("n","N꯭",$MA23);
$MA23 = str_replace("o","O꯭",$MA23);
$MA23 = str_replace("p","P꯭",$MA23);
$MA23 = str_replace("q","Q꯭",$MA23);
$MA23 = str_replace("r","R꯭",$MA23);
$MA23 = str_replace("s","S꯭",$MA23);
$MA23 = str_replace("t","T꯭",$MA23);
$MA23 = str_replace("u","U꯭",$MA23);
$MA23 = str_replace("v","V꯭",$MA23);
$MA23 = str_replace("w","W꯭",$MA23);
$MA23 = str_replace("x","X꯭",$MA23);
$MA23 = str_replace("y","Y꯭",$MA23);
$MA23 = str_replace("z","Z꯭",$MA23);
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>'*'.$MA23.' '.$smile.'* ',
'parse_mode'=>'MarkDown',
]);
$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$MA24 = str_replace('a','ᕱ',$text);
$MA24 = str_replace("b","β",$MA24);
$MA24 = str_replace("c","૮",$MA24);
$MA24 = str_replace("d","Ɗ",$MA24);
$MA24 = str_replace("e","ξ",$MA24);
$MA24 = str_replace("f","ƒ",$MA24);
$MA24 = str_replace("g","Ǥ",$MA24);
$MA24 = str_replace("h","ƕ",$MA24);
$MA24 = str_replace("i","Ĩ",$MA24);
$MA24 = str_replace("j","ʝ",$MA24);
$MA24 = str_replace("k","Ƙ",$MA24);
$MA24 = str_replace("l","Ꮭ",$MA24);
$MA24 = str_replace("m","ണ",$MA24);
$MA24 = str_replace("n","ท",$MA24);
$MA24 = str_replace("o","♡",$MA24);
$MA24 = str_replace("p","Ƥ",$MA24);
$MA24 = str_replace("q","𝑄",$MA24);
$MA24 = str_replace("r","Ꮢ",$MA24);
$MA24 = str_replace("s","Ƨ",$MA24);
$MA24 = str_replace("t","Ƭ",$MA24);
$MA24 = str_replace("u","Ꮜ",$MA24);
$MA24 = str_replace("v","ѵ",$MA24);
$MA24 = str_replace("w","ẁ́̀́",$MA24);
$MA24 = str_replace("x","ﾒ",$MA24);
$MA24 = str_replace("y","ɣ",$MA24);
$MA24 = str_replace("z","ʑ",$MA24);
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>'*'.$MA24.' '.$smile.'* ',
'parse_mode'=>'MarkDown',
]);
$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$MA25 = str_replace('a','░a░',$text);
$MA25 = str_replace("b","░b░",$MA25);
$MA25 = str_replace("c","░c░",$MA25);
$MA25 = str_replace("d","░d░",$MA25);
$MA25 = str_replace("e","░e░",$MA25);
$MA25 = str_replace("f","░f░",$MA25);
$MA25 = str_replace("g","░g░",$MA25);
$MA25 = str_replace("h","░h░",$MA25);
$MA25 = str_replace("i","░i░",$MA25);
$MA25 = str_replace("j","░j░",$MA25);
$MA25 = str_replace("k","░k░",$MA25);
$MA25 = str_replace("l","░l░",$MA25);
$MA25 = str_replace("m","░m░",$MA25);
$MA25 = str_replace("n","░n░",$MA25);
$MA25 = str_replace("o","░o░",$MA25);
$MA25 = str_replace("p","░p░",$MA25);
$MA25 = str_replace("q","░q░",$MA25);
$MA25 = str_replace("r","░r░",$MA25);
$MA25 = str_replace("s","░s░",$MA25);
$MA25 = str_replace("t","░t░",$MA25);
$MA25 = str_replace("u","░u░",$MA25);
$MA25 = str_replace("v","░v░",$MA25);
$MA25 = str_replace("w","░w░",$MA25);
$MA25 = str_replace("x","░x░",$MA25);
$MA25 = str_replace("y","░y░",$MA25);
$MA25 = str_replace("z","░z░",$MA25);
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>'*'.$MA25.' '.$smile.'* ',
'parse_mode'=>'MarkDown',
]);
$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$MA26 = str_replace('a','ًٍَُِّA',$text);
$MA26 = str_replace("b","ًٍَُِّB",$MA26);
$MA26 = str_replace("c","ًٍَُِّC",$MA26);
$MA26 = str_replace("d","ًٍَُِّD",$MA26);
$MA26 = str_replace("e","ًٍَُِّE",$MA26);
$MA26 = str_replace("f","ًٍَُِّF",$MA26);
$MA26 = str_replace("g","ًٍَُِّG",$MA26);
$MA26 = str_replace("h","ًٍَُِّH",$MA26);
$MA26 = str_replace("i","ًٍَُِّI",$MA26);
$MA26 = str_replace("j","ًٍَُِّJ",$MA26);
$MA26 = str_replace("k","ًٍَُِّK",$MA26);
$MA26 = str_replace("l","ًٍَُِّL",$MA26);
$MA26 = str_replace("m","ًٍَُِّM",$MA26);
$MA26 = str_replace("n","ًٍَُِّN",$MA26);
$MA26 = str_replace("o","ًٍَُِّO",$MA26);
$MA26 = str_replace("p","ًٍَُِّP",$MA26);
$MA26 = str_replace("q","ًٍَُِّQ",$MA26);
$MA26 = str_replace("r","ًٍَُِّR",$MA26);
$MA26 = str_replace("s","ًٍَُِّS",$MA26);
$MA26 = str_replace("t","ًٍَُِّT",$MA26);
$MA26 = str_replace("u","ًٍَُِّU",$MA26);
$MA26 = str_replace("v","ًٍَُِّV",$MA26);
$MA26 = str_replace("w","ًٍَُِّW",$MA26);
$MA26 = str_replace("x","ًٍَُِّX",$MA26);
$MA26 = str_replace("y","ًٍَُِّY",$MA26);
$MA26 = str_replace("z","ًٍَُِّZ",$MA26);
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>'*'.$MA26.' '.$smile.'* ',
'parse_mode'=>'MarkDown',
]);
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
*- تم زخرفة الاسم $text
- ويمكنك رؤية الرموز ايضاً بالضغط على رموز 
- يرجى الضغط على زر عوده في الاسفل*"
,'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'•الرموز⚛•' ,'callback_data'=>"at"],['text'=>'ألعوده الى القائمة الرئيسيه ↪' ,'callback_data'=>"home"]],
[['text'=>'• زخرفة مرة اخرى ☪️' ,'callback_data'=>"ww"]],
]])]);
}

if($data == "at"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>"𝟏 𝟐 𝟑 𝟒 𝟓 𝟔 𝟕 𝟖 𝟗 𝟎 🇮🇶 ﷼ ﷻ ﷽ ✞ ッ ッ 彡 Ω ۞ ۩ ✟ 『』۝ Ξ 道 凸 父 个 ¤ 品 〠 ๛ 𖤍 ᶠᶸᶜᵏᵧₒᵤ ࿐ ⍆ ⍅ ⇭ ༒   𖠃 𖠅 𖠆 𖠊 𖡒 𖡗 𖣩 ꧁ ꧂〰 𖥓 𖥏 𖥎 𖥌 𖥋 𖥊 𖥈 𖥅 𖥃 𖥂 𖥀 𖤼 𖤹 𖤸 𖤷 𖤶 𖤭 𖤫 𖤪 𖤨 𖤧 𖤥 𖤤 𖤣 𖤢 𖤡 𖤟 𖤞 𖤝 𖤜 𖤛 𖤚 𖤘 𖤙 𖤗 𖤕 𖤓 𖤒 𖤐 ဏ ࿘ ࿗ ࿖ ࿕ ࿑ ࿌ ࿋ ࿊ ࿉ ࿈ ࿇ ࿅ ࿄ ࿃ ࿂ ༼ ༽ ༺ ༻ ༗ ༖ ༕ ⏝ ⏜ ⏎ ၄ ߷ ܛ ׀
𖠀 𖠁 𖠂 𖠅 𖠆 𖠇 𖠈 𖠉 𖠍 𖠎 𖠏 𖠐 𖠑 𖠒 𖠓 𖠔 𖠕 𖠖 𖠗 𖠘 𖠙 𖠚 𖠛 𖠜 𖠝 𖠞 𖠟 𖠠 𖠡 𖠢 𖠣 𖠤 𖠥 𖠦 𖠧 𖠨 𖠩 𖠪 𖠫 𖠬 𖠭 𖠮 𖠯 𖠰 𖠱 𖠲 𖠳 𖠴 𖠵 𖠶 𖠷 𖠸 𖠹 𖠺 𖠻 𖠼 𖠽 𖠾 𖠿 𖡀 𖡁 𖡂 𖡃 𖡄 𖡅 𖡆 𖡇 𖡈 𖡉 ?? 𖡋 𖡌 𖡍 𖡎 𖡏 𖡐 𖡑 𖡒 𖡓 𖡔 𖡕 𖡖 𖡗 𖡘 𖡙 𖡚 𖡛 𖡜 𖡝 𖡞 𖡟 𖡠 𖡡 𖡢 𖡣 𖡤 𖡥 𖡦 𖡧 𖡨 𖡩 𖡪 𖡫 𖡬 𖡭 𖡮 𖡯 𖡰 𖡱 𖡲 𖡳 𖡴 𖡵 𖡶 𖡷 𖡸 𖡹 𖡺 𖡻 𖡼 𖡽 𖡾 𖡿 𖢀 𖢁 𖢂 𖢃 𖢄 𖢅 𖢆 𖢇 𖢈 𖢉 𖢊 𖢋 𖢌 𖢍 𖢎 𖢏 𖢐 𖢑 𖢒 𖢓 𖢔 𖢕 𖢖 𖢗 𖢘 𖢙 𖢚 𖢛 𖢜 𖢝 𖢞 𖢟 𖢠 𖢡 𖢢 𖢣 𖢤 𖢥 𖢦 𖢧 𖢨 𖢩 𖢪 𖢫 𖢬 𖢭 𖢮 𖢯 𖢰 𖢱 𖢲 𖢳 𖢴 𖢵 𖢶 𖢷 𖢸 𖢹 𖢺 𖢻 𖢼 𖢽 𖢾 𖢿 𖣀 𖣁 𖣂 𖣃 𖣄 𖣅 𖣆 𖣇 𖣈 𖣉 𖣊 𖣋 𖣌 𖣍 𖣎 𖣏 𖣐 𖣑 𖣒 𖣓 𖣔 𖣕 𖣖 𖣗 𖣘 𖣙 𖣚 𖣛 𖣜 𖣝 𖣞 𖣟 𖣠 𖣡 𖣢 𖣣 𖣤 𖣥 𖣦 𖣧 𖣨 𖣩 𖣪 𖣫 𖣬 𖣭 𖣮 𖣯 𖣰 𖣱 𖣲 𖣳 𖣴 𖣵 𖣶 𖣷 𖣸 𖣹 𖣺 𖣻 𖣼 𖣽 𖣾 𖣿
 ",'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"home"]],
]])]);}


#زخرفه عربي
      if($text != "/start"  and  $k6 == "k6" and $chat_id !=  $k5 and $chat_id != $k7){
      file_put_contents("k6.txt","none");
            bot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"",
  ]);
$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text); 
   $marcus = str_replace('ض', 'ضِٰـِۢ', $text);
   $marcus = str_replace('ص', 'صِٰـِۢ', $marcus);
   $marcus = str_replace('ث', 'ثِٰـِۢ', $marcus);
   $marcus = str_replace('ق', 'قِٰـِۢ', $marcus);
   $marcus = str_replace('ف', 'فِٰ͒ـِۢ', $marcus);
   $marcus = str_replace('غ', 'غِٰـِۢ', $marcus);
   $marcus = str_replace('ع', 'عِٰـِۢ', $marcus);
   $marcus = str_replace('خ', 'خِٰ̐ـِۢ', $marcus);
   $marcus = str_replace('ح', 'حِٰـِۢ', $marcus);
   $marcus = str_replace('ج', 'جِٰـِۢ', $marcus);
   $marcus = str_replace('ش', 'شِٰـِۢ', $marcus);
   $marcus = str_replace('س', 'سِٰـِۢ', $marcus);
   $marcus = str_replace('ي', 'يِٰـِۢ', $marcus);
   $marcus = str_replace('ب', 'بِٰـِۢ', $marcus);
   $marcus = str_replace('ل', 'لِٰـِۢ', $marcus);
   $marcus = str_replace('ا', 'آ', $marcus);
   $marcus = str_replace('ت', 'تِٰـِۢ', $marcus);
   $marcus = str_replace('ن', 'نََ', $marcus);
   $marcus = str_replace('م', 'مِٰـِۢ', $marcus);
   $marcus = str_replace('ك', 'ڪِٰـِۢ', $marcus);
   $marcus = str_replace('ط', 'طِٰـِۢ', $marcus);
   $marcus = str_replace('ظ', 'ظِٰـِۢ', $marcus);
   $marcus = str_replace('ء', 'ء', $marcus);
   $marcus = str_replace('ؤ', 'ؤ', $marcus);
   $marcus = str_replace('ر', 'ر', $marcus);
   $marcus = str_replace('ى', 'ى', $marcus);
   $marcus = str_replace('ز', 'ز', $marcus);
   $marcus = str_replace('و', 'ﯛ̲୭', $marcus);
   $marcus = str_replace("ه", "ۿۿہ", $marcus);
 bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>'*'.$marcus.' '.$smile.'*',
'parse_mode'=>'MarkDown',
]);
$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
   $marcus = str_replace('ض', 'ﺿ', $text);
   $marcus = str_replace('ص', 'ﺻ', $marcus);
   $marcus = str_replace('ث', 'ﺚ', $marcus);
   $marcus = str_replace('ق', 'ﭱ', $marcus);
   $marcus = str_replace('ف', 'ﭫ', $marcus);
   $marcus = str_replace('غ', 'ڠ', $marcus);
   $marcus = str_replace('؏', 'ع', $marcus);
   $marcus = str_replace('خ', 'ݗ', $marcus);
   $marcus = str_replace('ح', 'حُ', $marcus);
   $marcus = str_replace('ج', 'ݘ', $marcus);
   $marcus = str_replace('ش', 'ﺸ', $marcus);
   $marcus = str_replace('س', 'ﺴ', $marcus);
   $marcus = str_replace('ي', 'ﯥ', $marcus);
   $marcus = str_replace('ب', 'ﭘ', $marcus);
   $marcus = str_replace('ل', 'ڸ', $marcus);
   $marcus = str_replace('ا', 'آ', $marcus);
   $marcus = str_replace('ت', 'ٿ', $marcus);
   $marcus = str_replace('ن', 'ﮡ', $marcus);
   $marcus = str_replace('م', 'ﻢ', $marcus);
   $marcus = str_replace('ك', 'ﮗ', $marcus);
   $marcus = str_replace('ظ', 'ظ', $marcus);
   $marcus = str_replace('ظ', 'ظ', $marcus);
   $marcus = str_replace('ء', 'ء', $marcus);
   $marcus = str_replace('ؤ', 'ؤ', $marcus);
   $marcus = str_replace('ر', 'ر', $marcus);
   $marcus = str_replace('ى', 'ى', $marcus);
   $marcus = str_replace('ز', 'ز', $marcus);
   $marcus = str_replace('و', 'ﯛ̲୭', $marcus);
   $marcus = str_replace("ه", "ۿۿہ", $marcus);
bot('sendMessage',[ 
'chat_id'=>$chat_id,
'text'=>'*'.$marcus.' '.$smile.'*',
'parse_mode'=>'MarkDown',
]);
$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$marcus = str_replace('ض','ضٰہٰٖ',$text);
$marcus = str_replace('ص','صٰہٰٖ',$marcus);
$marcus = str_replace('ث','ثٰہٰٖ',$marcus);
$marcus = str_replace('ق','قٰہٰٖ',$marcus);
$marcus = str_replace('ف','فٰہٰٖ',$marcus);
$marcus = str_replace('غ','غٰہٰٖ',$marcus);
$marcus = str_replace('ع','عٰہٰٖ',$marcus);
$marcus = str_replace('ه','هٰہٰٖ',$marcus);
$marcus = str_replace('خ','خٰہٰٖ',$marcus);
$marcus = str_replace('ح','حٰہٰٖ',$marcus);
$marcus = str_replace('ج','جٰہٰٖ',$marcus);
$marcus = str_replace('ش','شٰہٰٖ',$marcus);
$marcus = str_replace('س','سٰہٰٖ',$marcus);
$marcus = str_replace('ي','يٰہٰٖ',$marcus);
$marcus = str_replace('ب','بٰہٰٖ',$marcus);
$marcus = str_replace('ل','لہٰٖ',$marcus);
$marcus = str_replace('ا','اٰ',$marcus);
$marcus = str_replace('ت','تٰہٰٖ',$marcus);
$marcus = str_replace('ن','نٰہٰٖ',$marcus);
$marcus = str_replace('م','مٰہٰٖ',$marcus);
$marcus = str_replace('ك','كٰہٰٖ',$marcus);
$marcus = str_replace('ة','ةً',$marcus);
$marcus = str_replace('ء','ء',$marcus);
$marcus = str_replace('ظ','ظٰہٰٖ',$marcus);
$marcus = str_replace('ط','طٰہٰٖ',$marcus);
$marcus = str_replace('ذ','ذٖ',$marcus);
$marcus = str_replace('د','دٰ',$marcus);
$marcus = str_replace('ز','زٖ',$marcus);
$marcus = str_replace('ر','رٰ',$marcus);
$marcus = str_replace('و','وٰ',$marcus);
$marcus = str_replace('ى','ى',$marcus);
bot('sendMessage',[ 
'chat_id'=>$chat_id,
'text'=>'*'.$marcus.' '.$smile.'*',
'parse_mode'=>'MarkDown',
]);
$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$marcus = str_replace('ض','ضـٰ๋۪͜ﮧٰ',$text); 
$marcus = str_replace('ص','صـٌٍ๋ۤ͜ﮧْ',$marcus); 
$marcus = str_replace('ث','ث̲ꫭـﮧ',$marcus); 
$marcus = str_replace('ق','قٰٰྀ̲ـِٰ̲ﮧْ',$marcus); 
$marcus = str_replace('ف','',$marcus); 
$marcus = str_replace('غ','فـٌٍ๋ۤ͜ﮧ',$marcus); 
$marcus = str_replace('ع','غـّٰ̐ہٰٰ',$marcus); 
$marcus = str_replace('ه','ٰ̲ھہ',$marcus); 
$marcus = str_replace('خ','خ̲ﮧ',$marcus); 
$marcus = str_replace('ح','ح̲ꪳـﮧ',$marcus); 
$marcus = str_replace('ج','ج̲ꪸـﮧ',$marcus); 
$marcus = str_replace('ش','ش̲ꪾـﮧ',$marcus); 
$marcus = str_replace('س','سـ̷ٰٰﮧْ',$marcus); 
$marcus = str_replace('ي','يـِٰ̲ﮧ',$marcus); 
$marcus = str_replace('ب','ب̲ꪰـﮧ',$marcus);
$marcus = str_replace('ل','لٍُـّٰ̐ہ',$marcus); 
$marcus = str_replace('ا',' ཻا ',$marcus); 
$marcus = str_replace('ت','تـٰۧﮧ',$marcus); 
$marcus = str_replace('ن','نٰ̲̐ـﮧْ',$marcus); 
$marcus = str_replace('م','مٰٰྀ̲ـِٰ̲ﮧْ',$marcus); 
$marcus = str_replace('ك','كـِّﮧْٰٖ',$marcus); 
$marcus = str_replace('ة','ةً',$marcus); 
$marcus = str_replace('ء','ء',$marcus); 
$marcus = str_replace('ظ','ظَـ๋͜ﮧْ',$marcus); 
$marcus = str_replace('ط','ط̲꫁ـﮧ',$marcus); 
 $marcus = str_replace('ذ','ذٖ',$marcus); 
$marcus = str_replace('د','دُ',$marcus); 
$marcus = str_replace('ز','ژٰ',$marcus); 
$marcus = str_replace('ر','',$marcus); 
$marcus = str_replace('و','ﯛ૭',$marcus); 
 $marcus = str_replace('ى','ىِ',$marcus); 
bot('sendMessage',[ 
'chat_id'=>$chat_id,
'text'=>'*'.$marcus.' '.$smile.'*',
'parse_mode'=>'MarkDown',
]);
$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$marcus = str_replace('ض','ضً',$text); 
$marcus = str_replace('ص','صً',$marcus); 
$marcus = str_replace('ث','ثہ',$marcus); 
$marcus = str_replace('ق','قہً',$marcus); 
$marcus = str_replace('ف','فُہ',$marcus); 
$marcus = str_replace('غ','غہ',$marcus); 
$marcus = str_replace('ع','عہُ',$marcus); 
$marcus = str_replace('ه','ه',$marcus); 
$marcus = str_replace('خ','خہ',$marcus); 
$marcus = str_replace('ح','حہ',$marcus); 
$marcus = str_replace('ج','جہ',$marcus); 
$marcus = str_replace('ش','شہ',$marcus); 
$marcus = str_replace('س','سہ',$marcus); 
$marcus = str_replace('ي','يہ',$marcus); 
$marcus = str_replace('ب',' ٻً',$marcus);
$marcus = str_replace('ل','لہ',$marcus); 
$marcus = str_replace('ا',' ٳ',$marcus); 
$marcus = str_replace('ت','تہ',$marcus); 
$marcus = str_replace('ن','نٍ',$marcus); 
$marcus = str_replace('ك','كُہ',$marcus); 
$marcus = str_replace('م','مْ',$marcus); 
$marcus = str_replace('ة','ةً',$marcus); 
$marcus = str_replace('ء','ء',$marcus); 
$marcus = str_replace('ظ','ظً',$marcus); 
$marcus = str_replace('ط','طہ',$marcus); 
 $marcus = str_replace('ذ','ذً',$marcus); 
$marcus = str_replace('د','دِ',$marcus); 
$marcus = str_replace('ز','زً',$marcus); 
$marcus = str_replace('ر','ڒٍ',$marcus); 
$marcus = str_replace('و','وٌ',$marcus); 
 $marcus = str_replace('ى','ىّ',$marcus);
bot('sendMessage',[ 
'chat_id'=>$chat_id,
'text'=>'*'.$marcus.' '.$smile.'*',
'parse_mode'=>'MarkDown',
]);
$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$marcus = str_replace('ا','ٱ',$text); 
$marcus = str_replace('ب','ﭜ',$marcus); 
$marcus = str_replace('ج','چ',$marcus); 
$marcus = str_replace('ث','ﭦ',$marcus); 
$marcus = str_replace('ت','ﭠ',$marcus); 
$marcus = str_replace('ح','ڂ',$marcus); 
$marcus = str_replace('خ','خ',$marcus); 
$marcus = str_replace('د','ﮃ',$marcus); 
$marcus = str_replace('ذ','ڎ',$marcus); 
$marcus = str_replace('ر','ر',$marcus); 
$marcus = str_replace('ز','ژ',$marcus); 
$marcus = str_replace('س','ﺳ̭͠ ',$marcus); 
$marcus = str_replace('ش','شَ',$marcus); 
$marcus = str_replace('ص','ڝ',$marcus); 
$marcus = str_replace('ض','ڞ',$marcus); 
$marcus = str_replace('ط','ط',$marcus); 
$marcus = str_replace('ظ','ڟ',$marcus); 
$marcus = str_replace('ع','؏',$marcus); 
$marcus = str_replace('غ','ﻏ̐ ',$marcus); 
$marcus = str_replace('ف','ڤ',$marcus); 
$marcus = str_replace('ق','ڦ',$marcus); 
$marcus = str_replace('ك','ڳ',$marcus); 
$marcus = str_replace('ل','لَ',$marcus);
$marcus = str_replace('م','م',$marcus); 
$marcus = str_replace('ن','ڻ',$marcus);  
$marcus = str_replace('ه','هـﮧ',$marcus); 
$marcus = str_replace('و','و',$marcus); 
$marcus = str_replace('ي','يِّ',$marcus); 
bot('sendMessage',[ 
'chat_id'=>$chat_id,
'text'=>'*'.$marcus.' '.$smile.'*',
'parse_mode'=>'MarkDown',
]);
$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$marcus = str_replace('ض','ضً',$text); 
$marcus = str_replace('ص','صً',$marcus); 
$marcus = str_replace('ث','ثہ',$marcus); 
$marcus = str_replace('ق','قہً',$marcus); 
$marcus = str_replace('ف','فُہ',$marcus); 
$marcus = str_replace('غ','غہ',$marcus); 
$marcus = str_replace('ع','عہُ',$marcus); 
$marcus = str_replace('ه','ه',$marcus); 
$marcus = str_replace('خ','خہ',$marcus); 
$marcus = str_replace('ح','حہ',$marcus); 
$marcus = str_replace('ج','جہ',$marcus); 
$marcus = str_replace('ش','شہ',$marcus); 
$marcus = str_replace('س','سہ',$marcus); 
$marcus = str_replace('ي','يہ',$marcus); 
$marcus = str_replace('ب',' ٻً',$marcus);
$marcus = str_replace('ل','لہ',$marcus); 
$marcus = str_replace('ا',' ٳ',$marcus); 
$marcus = str_replace('ت','تہ',$marcus); 
$marcus = str_replace('ن','نٍ',$marcus); 
$marcus = str_replace('ك','كُہ',$marcus); 
$marcus = str_replace('م','مْ',$marcus); 
$marcus = str_replace('ة','ةً',$marcus); 
$marcus = str_replace('ء','ء',$marcus); 
$marcus = str_replace('ظ','ظً',$marcus); 
$marcus = str_replace('ط','طہ',$marcus); 
 $marcus = str_replace('ذ','ذً',$marcus); 
$marcus = str_replace('د','دِ',$marcus); 
$marcus = str_replace('ز','زً',$marcus); 
$marcus = str_replace('ر','ڒٍ',$marcus); 
$marcus = str_replace('و','وٌ',$marcus); 
 $marcus = str_replace('ى','ىّ',$marcus);
bot('sendMessage',[ 
'chat_id'=>$chat_id,
'text'=>'*'.$marcus.' '.$smile.'*',
'parse_mode'=>'MarkDown',
]);
$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫🇰',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text); 
   $marcus = str_replace('ض', 'ۻ', $text);
   $marcus = str_replace('ص', 'صِ', $marcus);
   $marcus = str_replace('ث', 'ثِ', $marcus);
   $marcus = str_replace('ق', 'قِ', $marcus);
   $marcus = str_replace('ف', 'ڣ', $marcus);
   $marcus = str_replace('غ', 'ۼ', $marcus);
   $marcus = str_replace('ع', 'عِ', $marcus);
   $marcus = str_replace('خ', 'خِ', $marcus);
   $marcus = str_replace('ح', 'حِ', $marcus);
   $marcus = str_replace('ج', 'جِ', $marcus);
   $marcus = str_replace('ش', 'ۺ', $marcus);
   $marcus = str_replace('س', 'ښ', $marcus);
   $marcus = str_replace('ي', 'ي', $marcus);
   $marcus = str_replace('ب', 'ݕ', $marcus);
   $marcus = str_replace('ل', 'ݪ', $marcus);
   $marcus = str_replace('ا', 'آ', $marcus);
   $marcus = str_replace('ت', 'ټ', $marcus);
   $marcus = str_replace('ن', 'ڼَ', $marcus);
   $marcus = str_replace('م', 'ݦ', $marcus);
   $marcus = str_replace('ك', 'ڪ', $marcus);
   $marcus = str_replace('ط', 'طِ', $marcus);
   $marcus = str_replace('ظ', 'ظِ', $marcus);
   $marcus = str_replace('ء', '۶', $marcus);
   $marcus = str_replace('ؤ', 'ۈ', $marcus);
   $marcus = str_replace('ر', 'ݛ', $marcus);
   $marcus = str_replace('ى', 'ى', $marcus);
   $marcus = str_replace('ز', 'ڒ', $marcus);
   $marcus = str_replace('و', 'ۅ', $marcus);
   $marcus = str_replace("ه", "ۿ", $marcus);
 bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>'*'.$marcus.' '.$smile.'*',
'parse_mode'=>'MarkDown',
]);
$items = ['𝄮' , '𝄵' , '𓃠' , 'ま' , '†' , '⁦♡⁩' , '⁦˖꒰' , '⁦ਊ' , '❥' , '⁦㉨' , '𝆹𝅥𝅮' , '𝄬' , '𝄋' , '𖤍' , '𖠛' , ' 𝅘𝅥𝅮' , '⁦♬⁩' , '⁦⁦ㇱ' , '𝅘𝅥𝅯' , 'メ', '〠' , '〄' , '⩫' , '༄︎' , '᯾︎' , '۞︎' , '𓃟︎' , '𓃒︎' , '𓃠︎' , '𐂃︎' , '𐂂︎' , '𓃗︎' , '𖢣' , '𒍧' , '𒍦' , '𓏵' , '𐂠' , '𐇪' , '𓆦' , '𓇼' , '𓂀' , '𓆃' , '𓂐' , 'ᝰ͎', '𓃼' , '𓅻' , '𓀎' , '𓉀' , '#1🇮🇶' , '☬' , '༼༽' , '༆' , '༅', '༄' , '༇' , '༈༉' , '༊ ' , '༗' , '࿌' , '࿋' , '࿊' , '࿉' , '࿈' , '࿖' , '࿕' , '࿓' , '࿑' , '࿐' , '࿗࿘', '࿇࿆ ' , '༺' , '༻' , '༢༣' ,'†','↻','♥','🇫??',]; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text); 
   $marcus = str_replace('ض', 'ضِـ', $text);
   $marcus = str_replace('ص', 'صِـ', $marcus);
   $marcus = str_replace('ث', 'ثِـ', $marcus);
   $marcus = str_replace('ق', 'قِـ', $marcus);
   $marcus = str_replace('ف', 'ڣِـ', $marcus);
   $marcus = str_replace('غ', 'غِـ', $marcus);
   $marcus = str_replace('ع', 'عِـ', $marcus);
   $marcus = str_replace('خ', 'خِـ', $marcus);
   $marcus = str_replace('ح', 'حِـ', $marcus);
   $marcus = str_replace('ج', 'جِـ', $marcus);
   $marcus = str_replace('ش', 'شِـ', $marcus);
   $marcus = str_replace('س', 'سِـ', $marcus);
   $marcus = str_replace('ي', 'يِـ', $marcus);
   $marcus = str_replace('ب', 'بِـ', $marcus);
   $marcus = str_replace('ل', 'ݪِـ', $marcus);
   $marcus = str_replace('ا', 'آ', $marcus);
   $marcus = str_replace('ت', 'تِـ', $marcus);
   $marcus = str_replace('ن', 'نِـ', $marcus);
   $marcus = str_replace('م', 'مِـ', $marcus);
   $marcus = str_replace('ك', 'ݢ', $marcus);
   $marcus = str_replace('ط', 'طِـ', $marcus);
   $marcus = str_replace('ظ', 'ضِـ', $marcus);
   $marcus = str_replace('ء', 'ءٍ', $marcus);
   $marcus = str_replace('ؤ', 'ؤ', $marcus);
   $marcus = str_replace('ر', 'ږ', $marcus);
   $marcus = str_replace('ى', 'ى', $marcus);
   $marcus = str_replace('ز', 'ڒ', $marcus);
   $marcus = str_replace('و' ,'ۆ', $marcus);
   $marcus = str_replace("ه", "ۿﮧ", $marcus);
 bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>'*'.$marcus.' '.$smile.'*',
'parse_mode'=>'MarkDown',
]);
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
- تم زخرفة الاسم $text
- ويمكنك رؤية الرموز ايضاً بالضغط على رموز 
- يرجى الضغط على زر عوده في الاسفل"
,'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'•الرموز⚛•' ,'callback_data'=>"at"],['text'=>'ألعوده الى القائمة الرئيسيه ↪' ,'callback_data'=>"home"]],
[['text'=>'• زخرفة مرة اخرى ☪️' ,'callback_data'=>"ii"]],
]])]);}
if($data == "at" ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"
𝟏 𝟐 𝟑 𝟒 𝟓 𝟔 𝟕 𝟖 𝟗 𝟎 🇮🇶 ﷼ ﷻ ﷽ ✞ ッ ッ 彡 Ω ۞ ۩ ✟ 『』۝ Ξ 道 凸 父 个 ¤ 品 〠 ๛ 𖤍 ᶠᶸᶜᵏᵧₒᵤ ࿐ ⍆ ⍅ ⇭ ༒   𖠃 𖠅 𖠆 𖠊 𖡒 𖡗 𖣩 ꧁ ꧂〰 𖥓 𖥏 𖥎 𖥌 𖥋 𖥊 𖥈 𖥅 𖥃 𖥂 𖥀 𖤼 𖤹 𖤸 𖤷 𖤶 𖤭 𖤫 𖤪 𖤨 𖤧 𖤥 𖤤 𖤣 𖤢 𖤡 𖤟 𖤞 𖤝 𖤜 𖤛 𖤚 𖤘 𖤙 𖤗 𖤕 𖤓 𖤒 𖤐 ဏ ࿘ ࿗ ࿖ ࿕ ࿑ ࿌ ࿋ ࿊ ࿉ ࿈ ࿇ ࿅ ࿄ ࿃ ࿂ ༼ ༽ ༺ ༻ ༗ ༖ ༕ ⏝ ⏜ ⏎ ၄ ߷ ܛ ׀
𖠀 𖠁 𖠂 𖠅 𖠆 𖠇 𖠈 𖠉 𖠍 𖠎 𖠏 𖠐 𖠑 𖠒 𖠓 𖠔 𖠕 𖠖 𖠗 𖠘 𖠙 𖠚 𖠛 𖠜 𖠝 𖠞 𖠟 𖠠 𖠡 𖠢 𖠣 𖠤 𖠥 𖠦 𖠧 𖠨 𖠩 𖠪 𖠫 ?? 𖠭 𖠮 𖠯 𖠰 𖠱 𖠲 𖠳 𖠴 𖠵 𖠶 𖠷 𖠸 𖠹 𖠺 𖠻 𖠼 𖠽 𖠾 𖠿 𖡀 𖡁 𖡂 𖡃 𖡄 𖡅 𖡆 𖡇 𖡈 𖡉 𖡊 𖡋 𖡌 𖡍 𖡎 𖡏 𖡐 𖡑 𖡒 𖡓 𖡔 𖡕 𖡖 𖡗 𖡘 𖡙 𖡚 𖡛 𖡜 𖡝 𖡞 𖡟 𖡠 𖡡 𖡢 𖡣 𖡤 𖡥 𖡦 𖡧 𖡨 𖡩 𖡪 𖡫 𖡬 𖡭 𖡮 𖡯 𖡰 𖡱 ?? 𖡳 𖡴 𖡵 𖡶 𖡷 𖡸 𖡹 𖡺 𖡻 𖡼 𖡽 𖡾 𖡿 𖢀 𖢁 𖢂 𖢃 𖢄 𖢅 𖢆 𖢇 𖢈 𖢉 𖢊 𖢋 𖢌 𖢍 𖢎 𖢏 𖢐 𖢑 𖢒 𖢓 𖢔 𖢕 𖢖 𖢗 𖢘 𖢙 𖢚 𖢛 𖢜 𖢝 𖢞 𖢟 𖢠 𖢡 𖢢 𖢣 𖢤 𖢥 𖢦 𖢧 𖢨 ?? 𖢪 𖢫 𖢬 𖢭 𖢮 𖢯 𖢰 𖢱 𖢲 𖢳 𖢴 𖢵 𖢶 𖢷 𖢸 𖢹 𖢺 𖢻 𖢼 𖢽 𖢾 𖢿 𖣀 𖣁 𖣂 𖣃 𖣄 𖣅 𖣆 𖣇 𖣈 𖣉 𖣊 𖣋 𖣌 𖣍 𖣎 𖣏 𖣐 𖣑 𖣒 𖣓 𖣔 𖣕 𖣖 𖣗 𖣘 𖣙 𖣚 𖣛 𖣜 𖣝 𖣞 𖣟 𖣠 𖣡 𖣢 𖣣 𖣤 𖣥 𖣦 𖣧 𖣨 𖣩 𖣪 𖣫 𖣬 𖣭 𖣮 𖣯 𖣰 𖣱 𖣲 𖣳 𖣴 𖣵 𖣶 𖣷 𖣸 𖣹 𖣺 𖣻 𖣼 𖣽 𖣾 𖣿
 
",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'ألعوده الى القائمة الرئيسيه ↪' ,'callback_data'=>"home"]],
]])
]);   
}
if($data == "iktsarat" ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"
 ~ أضغـط علئ الأختصار المناسب من الأسفل .
~ لـيتم نسخهُ لكَ فوراً .
  — — — — — — — — —
`جَيتـﮧ`
`ﺣَبيبي ﯛأللۿ`
`اڪﯛلڪـﮧ`
`بَأﯛ؏`
`صَدﯛڪﮧ`
`شُڪݛأ`
`فِديتـﮧ`
`ﺄمـَشـʊ̤ .`
`ؤلـَـʊ̤ .`
`شَعلـʊ̤ .`
`مَـدرʊ̤ .`
`ﺄنڪَلعـʊ̤ .`
`نجـَبـʊ̤`
`ﺄنـَـʊ̤`
`خلـَـʊ̤`
`ﺄʊ̤`
`ﺄۈڪَـʊ̤`
`حَبيبـʊ̤`
`حَيأتـʊ̤`
`؏ُـمݛʊ̤`
`ڪَلبـʊ̤`
`بنيتَـʊ̤`
`أنجَبيـﮧ`
`تِعبتـﮧ`
`بأيـﮧَ`
`ۿوهـﮧ`
`حبَيـﮧ`
`ﺷِنـو`
`ﺷِڪو`
`ﻣَـأﺷشي`
`ﺄيـﮧَ`
`بـَـأʊ̤ .`
`ﺄحِـبڪك .`
`ﺄنجـَب .`
`ۈڪك .`
`ۈلـڪ .`
`صـݪيتـʊ̤`
`جۅ؏ـآنـۿ`
`؏ـطشِآنـۿ`
`؏ـۅفينـَـʊ̤`
`صـَـآيمـۿ`
",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'ألعوده الى القائمة الرئيسيه ↪' ,'callback_data'=>"home"]],]])]);}
if($data == 'btele'){
bot('deletemessage',['chat_id'=>$chat_id2,'message_id'=>$message_id]);
bot('sendMessage',['chat_id'=>$chat_id2,'text'=>"- الان قم باختيار القسم المناسب لك ",
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>'نبذأت تلي ؏ـربية 🇮🇶.','callback_data'=>'artele'],['text'=>'نبذات تلي ﺄنڪليزية ، 🇰🇾.','callback_data'=>'antele']],[['text'=>'العودة ↪' ,'callback_data'=>"home"]],]])]);}
$btele = array("- نحنُ ألفاشلون وطنياً نجحنا أخيرا في حب الوطن .🤍.","- أحبيني بعيدا عن مدينتي ألتي شبعت نوم .🤍.","- ملامحي تتحدث نيابة عن كُل ألتعب ألذي في داخلي .🤍","- تـجي أعزمڪہ ؏ غده وأشربك ﭼـاي مهيل من أدينات أمي .🖤.","- أريدُ أن أهدء لعام أثنان ثلاثة لقد شعرت دائماً بالكثير من القلق أريد أن أهدء فحسب .🤍.","- تگلها شبيها عيونـﭻ تعبانه عمت عين السادس الخلاﭺ هيـﭻ ذبلانه .🖤.","- أنا بحاجة جداً إلى الجلوس قربه النافذة  بيوم ماطر وهادئ .🤍.","- كُنت مهماً لدرجه أنني أعطيتُك أغنيتي المفظلة .🤍.","- تگـله أتعب وأتعب و أرد مڪسوره وأنتجي ؏ صوت سوالفك .🖤.","- تگوله أبقى وياي مثل ڪل يوم ساندني كولشي بدونك يتعب .🖤.","- هل هُناك مغزى من ألعيش هل أستحق حتى أن أعيش .🤍.","- بأمكان الأنسان أن يكون صديق لكثير من الأشياء غير البشر .🤍.","- جنـﭻ بغـداد بسوالفها والحله بلطافتها والبصره بسمارها .🖤.","- وهكذا كنتُ بالڪاد أخرجٌ من غرفتي في الأيام ألتالية .🤍.","- تجـي تلـوليلي شويه ؏ صوتـڪہ وتضمني بين أديناتك .🖤.","- هادئة ولا تشغلها الأحداث أليومية هيَ في مسارُها وألعالم بذلك ألمسار يُغرد لذاتهِ .🤍.","- تگـوله شرايك الليله نغير المسار أنت تجي تنام ؏ صوتي وألعب بشعرك .🖤.");
$bartele = array_rand($btele, 1);
if($data == 'artele'){
bot('deletemessage',['chat_id'=>$chat_id2,'message_id'=>$message_id]);
bot('sendMessage',['chat_id'=>$chat_id2,'text'=>"$btele[$bartele]",
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>'- نبذۿ اخرى ، 🌈.','callback_data'=>'artele']],[['text'=>'نبذات تلي ﺄنڪليزية ، 🇰🇾.','callback_data'=>'antele']],[['text'=>'العودة ↪' ,'callback_data'=>"home"]],]])]);}
$teleb = array("- 𝙃𝙚𝙡𝙡𝙤 : 𝙞'𝙢 𝙣𝙤𝙩 𝙛𝙞𝙣𝙚, 𝙘𝙖𝙣 𝙮𝙤𝙪 𝙝𝙪𝙜 𝙢𝙚?","- 𝙃𝙚𝙡𝙡𝙤 : 𝙞'𝙢 𝙏𝙞𝙧𝙚𝙙, 𝙘𝙖𝙣 𝙮𝙤𝙪  𝙝𝙪𝙜 𝙢𝙚?","- 𝙃𝙚𝙡𝙡𝙤 : 𝙇𝙞𝙛𝙚 𝙞𝙨 𝙙𝙞𝙛𝙛𝙞𝙘𝙪𝙡𝙩 𝘽𝙪𝙩 𝙣𝙤𝙩 𝙞𝙢𝙥𝙤𝙨𝙨𝙞𝙗𝙡𝙚","- 𝘏𝘦𝘭𝘭𝘰 : 𝘠𝘰𝘶 𝘢𝘭𝘭 𝘩𝘢𝘷𝘦 𝘦𝘭𝘦𝘤𝘵𝘳𝘰𝘯𝘪𝘤 𝘍𝘢𝘯𝘵𝘢𝘴𝘪𝘴𝘦","- 𝙃𝙚𝙡𝙡𝙤 : 𝗶 𝗮𝗺 𝗩𝗲𝗿𝘆 D̶e̶p̶r̶e̶s̶s̶e̶d̶","- 𝙝𝙚𝙡𝙡𝙤 : 𝙞'𝙢 𝙨𝙤 𝙗𝙖𝙙 𝙤 𝙬𝙖𝙡𝙠 𝙖𝙬𝙖𝙮","- 𝙃𝙚𝙡𝙡𝙤 : 𝙞'𝙢 𝙞𝙣 𝙨𝙤 𝙢𝙪𝙘𝙝 𝙋𝙖𝙞𝙣","- 𝙃𝙚𝙡𝙡𝙤 : 𝙏𝙝𝙚 𝙀𝙣𝙙 𝙞𝙨 𝙖𝙨 𝙫𝙞𝙡𝙚 𝙖𝙨 𝙎𝙣𝙖𝙠𝙚 𝙑𝙚𝙢𝙤𝙣","- 𝙃𝙚𝙡𝙡𝙤 : 𝙞 𝙈𝙞𝙨𝙨𝙚𝙙 𝙖 𝙇𝙤𝙩 𝙬𝙝𝙚𝙣 𝙬𝙞𝙡𝙡 𝙬𝙚 𝙢𝙚𝙚𝙩","𝙃𝙚𝙡𝙡𝙤 : 𝙇𝙞𝙩𝙩𝙡𝙚 𝙋𝙧𝙚𝙨𝙚𝙣𝙘𝙚 𝙊𝙛 𝙜𝙧𝙚𝙖𝙩 𝙨𝙩𝙖𝙣𝙙𝙞𝙣𝙜","𝙃𝙚𝙡𝙡𝙤 : 𝘿𝙞𝙙 𝙮𝙤𝙪 𝙢𝙞𝙨𝙨 𝙢𝙚 ?!","𝙃𝙚𝙡𝙡𝙤 : 𝘿𝙤 𝙔𝙤𝙪 𝙡𝙤𝙫𝙚 𝙢𝙚 ? :/","𝙃𝙚𝙡𝙡𝙤 : 𝘿𝙤 𝙔𝙤𝙪 𝙎𝙩𝙞𝙡𝙡 𝙇𝙤𝙫𝙚 𝙢𝙚? :)");
$bantele = array_rand($teleb, 1);
if($data == 'antele'){
bot('deletemessage',['chat_id'=>$chat_id2,'message_id'=>$message_id]);
bot('sendMessage',['chat_id'=>$chat_id2,'text'=>"$teleb[$bantele]",
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>'- نبذۿ اخرى ، 🌈.','callback_data'=>'antele']],[['text'=>'نبذأت تلي ؏ـربية 🇮🇶','callback_data'=>'artele']],[['text'=>'العودة ↪' ,'callback_data'=>"home"]],]])]);}

if($data == "asm" ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎

`‹ ټـﯡؤت | ۽نڪِط كَڪياتۿ 🧏🏼‍♀🤎.`

`‹ ڼـﯡؤن | ﻣخلۈقـاﺄ مِن ؏ـسݪ 🍯💛.`

`ﺳﯠؤس | ۽ختِلف ؏ـڼ ﺄلنـﺴۈان 💁🏻‍♀🖤.`

`‹ ﺷﯠؤش | ڼثيۿ ﺄصيݪۿة 🧚🏻‍♀💕.`

`‹ مِيـ۾ | قَـۈيۿ 💆🏼‍♀🤍.`

`ﺄيۈش آلـﮧ ﺳُڪݛ ، 💕.`

`نَنۈش آلـﮧ ﺳُڪݛ ، 💕.`

`ﺄﺳۈ آلـﮧ ﺳُڪݛ ، 💕.`

`ۿدۈ آلـﮧ ﺳُڪݛ ، 💕.`

`فَتۈ آلـﮧ ﺳُڪݛ ، 💕.`

`داملاﭑ ఌ︎`

`ديلارﭑ ꨄ︎`

`نارفين ❥︎`

`ۿازال ♔︎`

`نيلۉفر ᴥ︎`

` ‏ٖ ٖتبوٰ ༗ 𖨆︎`

`ٖ ٖړنوٰ ༗ ㋛︎`

`ٖ ٖتبآركہٰ ✞︎༗`

`ٖ ٖآيمانہٰ ༗␈︎`

`ٖ ٖ␈︎ملآكہٰ ༗.`

`ٖ ٖنډى␈︎༗.`

`ٖ ٖطيبۿہٰ𓄁︎༗.`

`⌯﮼ڪـمَـَٰـَُٰٰٰيـل𖤍༿`

`⌯﮼ ذوٰ୭‏ فقـَٰـَُٰٰٰـاﺂࢪ𖤍༿`

`⌯﮼ مـٛڵوڪـهہ𖤍༿`

`⌯﮼‌‏ ࢪضــاﺂويــۂ𖤍༿`

`⌯﮼‌‏ تبـٱࢪڪۂ𖤍༿`

`⌯﮼‌‏ نيـࢪمـﺂن𖤍༿`

`⌯﮼ ࢪ࣪ۿـࢪا۽𖤍༿`

• `ﭼـٰ̲ٱﺳـۧيڪَآ ،`

• `ـٱﻣـۧٱڹـڊـآ `

• `ﻟﮧۅڕيـۧڹ ؛`

• `ـٱﻣـۧيڵي ،`

`• ﭑسٰـيݪ ⁽️. ⁽𝒂𝒔𝒆𝒆𝒍`

`• ݪـمٰـﭑࢪ ⁽️. ⁽𝒍𝒂𝒎𝒂𝒓`

`• فٰـࢪحَ ⁽️. ⁽𝒇𝒂𝒓𝒂𝒉`

`• مٰيـﭑمٰيـטּ ⁽️. ⁽𝒎𝒚𝒂𝒎𝒚𝒏`

`• مٰـيࢪﭑ ⁽️. ⁽𝒎𝒊𝒓𝒂`

`• مٰـﭑࢪۉݪا ⁽️. ⁽𝒎𝒂𝒓𝒖𝒍𝒂`

`• مٰـﭑࢪݪـي ⁽️. ⁽𝒎𝒂𝒓𝒍𝒆𝒚`

`• جٰـۉدي ⁽️. ⁽𝒋𝒖𝒅𝒚`

`• مٰـﭑيـٰﭑ ⁽️. ⁽𝒎𝒂𝒚𝒂`

`• ڪـﭑتيـﭑ ⁽️. ⁽𝒌𝒂𝒕𝒊𝒂`

`• مٰـيݪا ⁽️. ⁽𝒎𝒆𝒍𝒂`

`• ࢪنٰـۉۉ ⁽️. ⁽𝒓𝒏??`

`• ٰﺂيٰـۉۉ ⁽️. ⁽𝒂𝒚𝒐`

`• ٰۿۿـِدﯛ ⁽️. ⁽𝒉𝒅𝒐`

`• سٓـࢪۉۉ ⁽️. ⁽𝒔𝒓𝒐𝒐`

`• سٓـجۉۉ ⁽️. ⁽𝒔𝒋𝒐𝒐`

`• حنٰـۉۉ ⁽️. ⁽𝒉𝒏𝒐`

`• ٰﺂسٓـۉۉ ⁽️. ⁽𝒂𝒔𝒐`

`⌯ طِفݪتـۿﮧ ¹⁶ ، 𓋜'`

`⌯ ؏ـﺄﺷِڪټۿ ¹⁶ ، 𓋜'`

`⌯ قزۈمټـۿﮧ ¹⁶ ، 𓋜'`

`⌯ زقچټـۿﮧ ¹⁶ ، 𓋜'`

`⌯ مَݪڪټۿﮧ ¹⁶ ، 𓋜'`

`⌯ ﻧﮧَـݛجـِﺴﮧ ؛𓋜'`

`⌯ ﺳﮧﺂݛهـۿ ؛𓋜'`

`⌯ بَـټۈݪ ؛𓋜'`

`⌯ ﺷِۈشۿ ؛𓋜'`

`⌯ بڼَيـټۿ ؛𓋜'`

`فَطݦ ﺄݪ ؏ـݪي┆ﺄݪثګل ﺷَمرۿه ﻣۈ تَـﻌݪۈم ☪`

`ﺂؤګټآفيآ ┊جَݦيݪۿه گ ۈرډ ݛوـۈسيأ 🌈`

`زهَوﺷۿه ┆فَصيݪۿ ډݦي ﺄﯡ ؏ـسݪ 🍯`

`سَݦݛۿه ┆ﺄݪـ گيۅټا 🦄`

`؋ݪۿه ┆ﻣتۅحِدۿ ؤ ﺄګرۿ ﺄݪاختِلاط ✡`

`ﺄڼـو ﺄل شِمـر 🇮🇶💘.`

`فتَـو ﺄل شِمـر 🇮🇶💘.`

`مَـرﯡ ﺄل شِمـر 🇮🇶💘.`

`سَـرﯡ ﺄل شِمـر 🇮🇶💘.`

`تبَـو ﺄل شِمـر 🇮🇶💘.`

`- ءِݪـﻄيفأﺄ 𐂃︎.`

`- ءِݪڪيۈتأﺄ 𐂃︎.`

`- ءِݪنآزڪأﺄ 𐂃︎.`

`- ءِݪحݪـۅﺄ 𐂃︎.`

`- ءِݪڪصيݛۈنأﺄ 𐂃︎.`

`اضغط على الاسم ليتم نسخه`
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'ألتالي ↩' ,'callback_data'=>"asm1"]],
[['text'=>'ألعوده الى القائمة الرئيسيه ↪' ,'callback_data'=>"home"]],
]])
]);   
}
if($data == "asm1" ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎

`『𝙻𝙾𝚂𝙶』`

`『𝚉𝙴𝙴𝙽』`

`『𝙵𝚃𝙾𝚂𝙷𝙰』`

`『𝙼𝙽𝚃𝙰𝚉』`

`『𝙺𝙾𝙰𝙺𝙿』`

`- 𝙏𝙤𝙏 𓃠.`

`- 𝘼𝙎𝙊 𓃠.`

`- 𝙉𝙤𝙤𝙍 𓃠.`

`- 𝙍𝙚𝙚𝙈 𓃠.`

`- 𝙅𝙤𝙅𝙖 𓃠.`

`:  𝑽𝑬𝑨??↻ .`

`:  𝑻𝑬𝑩𝑨↻ .`

`:  𝑹𝑬𝑴𝑨𝑺↻ .`

`:  𝑴𝑨𝑳𝑨𝑲↻ .`

`:  𝑩𝑨𝑵𝑬𝑬𝑵↻ .`

`𝘍𝘢𝘙𝘰𝘚𝘢𝘏 🌿.`

`𝘙𝘢𝘛𝘰𝘚𝘢𝘏 🌿.`

`𝘏𝘢𝘋𝘰𝘚𝘢𝘏 🌿.`

`𝘔𝘢𝘙𝘰𝘚𝘢𝘏 🌿.`

`𝘛𝘢𝘉𝘰𝘚𝘢𝘏 🌿.`

`اضغط على الاسم ليتم نسخه`
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'ألتالي ↩' ,'callback_data'=>"asm2"]],
[['text'=>'ألعوده الى القائمة السابقه ⤴' ,'callback_data'=>"asm"]],
[['text'=>'ألعوده الى القائمة الرئيسيه ↪' ,'callback_data'=>"home"]],
]])
]);   
}
if($data == "asm2" ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎

`ΔᗰᗨNᗪΔ`

`Ꮮ𝑎𝑢𝑟𝑒𝑛`

`𝐄𝐌𝐄𝐋𝐘`

`𝐉𝒂𝒔𝒔𝒊𝒄𝒂`

`⟬ ℤ𝕠ℤ𝕒 ⟭ ༆.`

`⟬ ℤ𝕒ℍ𝕠 ⟭ ༆.`

`⟬ ℤ𝕒ℕ𝕠 ⟭ ༆.`

`⟬ 𝕋𝕠𝕋𝕒 ⟭ ༆.`

`⟬ 𝕋𝕒ℕ𝕠 ⟭ ༆.`

`⟬ 𝕋𝕒𝔹𝕠 ⟭ ༆.`

`⟬ 𝕊𝕠𝕤𝕒 ⟭ ༆.`

`⟬ 𝕊𝕣𝕠𝕠 ⟭ ༆.`

`⟬ 𝕊𝕒𝕁𝕠 ⟭ ༆.`

`〈 𝑵𝑶𝑵 : 📍🔖 .`

`〈 𝑻𝑶𝑻 : 📍🔖 .`

`〈 𝑴𝑬𝑴 : 📍🔖 .`

`〈 𝑯𝑨𝑨 : 📍🔖 .`

`〈 𝑲𝑨?? : 📍🔖 .`

`〈 𝑭𝑶𝑭 : 📍🔖.`

`〈 𝑨𝑳𝑭 : 📍🔖 .`

`〈 𝑺𝑬𝑵 : 📍🔖 .`

`〈 𝑱𝑬𝑴 : 📍🔖 .`

`اضغط على الاسم ليتم نسخه`
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'ألتالي ↩' ,'callback_data'=>"asm3"]],
[['text'=>'ألعوده الى القائمة السابقه ⤴' ,'callback_data'=>"asm1"]],
[['text'=>'ألعوده الى القائمة الرئيسيه ↪' ,'callback_data'=>"home"]],
]])
]);   
}
if($data == "asm3" ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎

`- 𓆰 𝘼𝙡𝙚𝙓 ♱.`

` - 𓆰 𝘼𝙡𝙡𝙀𝙉 ♱.`

` - 𓆰 𝘼𝙢𝘽𝙚𝙍♱.`

` - 𓆰 𝙍𝙞𝙘𝙝𝙖𝙍𝘿 ♱. `

`- 𓆰 𝙆𝙖𝙍𝙞𝙉𝘼 ♱.`

` - 𓆰 𝘿𝙖𝙫𝙞𝘿 ♱.`

`𓆩𝗧𝗮𝗯𝗮𝗿𝗸𓆪  ˹💕˼ .`

`𓆩𝗭𝗮𝗶𝗻𝗮𝗯𓆪  ˹💕˼ .`

`𓆩𝗔𝘀𝗿𝗮𝗮𓆪  ˹💕˼ .`

`𓆩𝗦𝗷𝗮𝗮𓆪  ˹💕˼ .`

`𓆩𝗔𝘆𝗮𓆪  ˹💕˼ .`

`ᯓ 𓆩 ˹ 𝙈𝙖𝙧𝙮𝙖𝙢 ˼ ?? .`

`ᯓ 𓆩 ˹ 𝙍𝙖𝙁𝙖𝙇 ˼ 𓆪 .`

`ᯓ 𓆩 ˹ 𝙃𝙖𝙅𝙚𝙍 ˼ 𓆪 .`

`ᯓ 𓆩 ˹ 𝙏𝙖𝘽𝙖𝙍𝙖𝙆 ˼ 𓆪 .`

`ᯓ 𓆩 ˹ 𝙉𝙤𝙊𝙧𝘼 ˼ 𓆪 .`
`اضغط على الاسم ليتم نسخه`
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'ألعوده الى القائمة السابقه ⤴' ,'callback_data'=>"asm2"]],
[['text'=>'ألعوده الى القائمة الرئيسيه ↪' ,'callback_data'=>"home"]],
]])
]);   
}

$ins = array("𓆦 : مَـ؏ـشۈقته ◡̈ 🦌💞.
𓆦 : ذآت ﺄلـ  ١٦ ؏َـام ◡̈ 🦌💞.
𓆦 : - أسافِر والأغانـي لـوجهَك #تردنـي ◡̈ 🦌💞.","𓆦 : بنَيتـۿ ◡̈ 🍋🌿.
𓆦 : ذآت ﺄلـ  ٢٠ ؏ـام ◡̈ 🍋🌿.
𓆦 : - إتباهـاا بيِّڪ هوايـَْه يَسمر #يحـلو ◡̈ 🍋🌿.","𓆦 : مݛيتـۿ ◡̈ 🤍💧.
𓆦 : ذآت ﺄلـ ١٨ ؏ـام ◡̈ 🤍💧.
𓆦 : - عينـاكَ بحر ومـا ڪان الغريـق الاَّ #أنـا ◡̈ 🤍💧.","⠀⠀                
⠀ ⠀ ⠀⠀⠀. ғʀᴏᴍ #𝙸𝚛𝚊𝚚 ↻.  
         𓆩 نحن ڪـ الفرص لا نأتي مرتين 𓆪
⠀ ⠀⠀ - ᴡᴇʟᴄᴏᴍᴇ ᴇᴠᴇʀʏᴏɴᴇ ❔
⠀","⠀⠀ ⠀ ⠀
 ⠀⠀      ⠀⠀    ⠀ - 𝟪.𝟣𝟨 𝑚𝑎𝑟𝑐ℎ 🕊: 
 ⠀⠀⠀⠀     - 𝑓𝑟𝑜𝑚 . . 𝐼𝑟𝑎𝑞 𝑏𝑎𝑔ℎ𝑑𝑎𝑑 📌.
       -رقيقـٰۿۃ‏ ڪہ ٱجنحۿۃ‏ ٱلفراشۿۃ‏🦋 ⠀⠀⠀⠀
 ⠀⠀ ⠀ ⠀","⠀⠀             ⠀⠀⠀ ⠀⠀⠀ 
⠀⠀⠀ ⠀⠀⠀⠀⠀⠀⠀⠀  ❲ 21 𝒚.𝒐 ❳
     ⠀⠀         ⠀⠀• َ𝒊𝒏 • 𝒃𝒂𝒈𝒉𝒅𝒂𝒅 ❄️  .
-ء ୪ أُعَوَّض ୪ ꪆ أُسَتبدَل ୪ ꪆ أُقارَن✋🏼. 📨!.     
⠀⠀  ⠀⠀⠀   
⠀⠀⠀⠀⠀⠀","⠀⠀ ⠀ ⠀
 ⠀⠀        ⠀        - :17y.o. 
                    - : 𝑖𝑛 iraq 🇮🇶. 
 ⠀⠀       كَـ حبة المَـطر، رقـيقة ☁️ . 
• 𝙻𝙸𝙺𝙴 𝙰 𝚁𝙰𝙸𝙽𝙳𝚁𝙾𝙿, 𝚃𝙷𝙸𝙽 . ❤️.
  ⠀⠀         
 ⠀⠀  ⠀ ⠀","⠀⠀ ⠀ ⠀
 ⠀⠀ ⠀ - 𝒊𝒏 #Basra
 ⠀⠀     - ℒ𝒐𝒗𝒆 𝒎𝒚 𝒔𝒆𝒍𝒇
 ⠀⠀ ⠀ -  • أنيــــہ الإستثنائيـۃ  ، المختلفـۃ 🖤❕.","⠀⠀ ⠀ ⠀
 ⠀⠀      ⠀⠀    ⠀ - 𝟒: 𝟏𝟏🏷: 
 ⠀⠀⠀⠀     -  𝐼𝑟𝑎𝑞: 𝐚𝐫𝐩𝐢𝐥🍂.
     - ﭑنـا بزوديَ ارتفع محد يعليني . ⠀⠀⠀⠀
 ⠀⠀ ⠀ ⠀","⠀⠀             ⠀⠀⠀ ⠀⠀⠀ 
⠀⠀⠀ ⠀⠀⠀⠀⠀⠀⠀⠀  ❲ 01:23 ❳
     ⠀⠀         ⠀⠀- 𝐼𝑛 : 𝐷ℎ𝑖 𝑄𝑎𝑟 .
-يڪرهونَـيَ، وَيقلدون ﭑلمشـي الآمشيُـهہۛ 📨!.     
⠀⠀  ⠀⠀⠀   
⠀⠀⠀⠀⠀⠀","‎ 
‎  ‌‎  ‎  ‎  ‎  ‎  ‎  ‎  ‎  ‎  ‎ ‎ 𐄐 𝓑𝗮𝗴𝗵𝗱𝗮𝗱 🇮🇶 ⸃.
 ‎  .❕ ۿادئۃ مُتصالحۃة مع ڪل شيئَ : 
 ‎  ‎  ‎  ‌‎ ‎  ‎  ‎  ‎  ‎  ‎ ‎  ‎  ‎  𐄐 ‎ 𝟭𝟴  𝗬.𝗢 ⌝.
‎","⠀ 
                ⠀⠀⠀⠀⠀    ˹ ↯  .
            ❥ ғʀᴏᴍ ɪʀᴀǫ 🇮🇶✿
    - هادئۿۃ‏، #قويۿۃ‏، جميلۿۃ‏، وحيدۿۃ‏🐆.
           
       𓐄𓐄𓐄𓐄𓐄𓐄𓐄𓐄𓐄𓐄𓐄°ꨄ°𓐄𓐄𓐄𓐄𓐄𓐄𓐄𓐄𓐄𓐄𓐄
⠀","⠀⠀                
⠀ ⠀ ⠀⠀⠀. ғʀᴏᴍ #𝙸𝚛𝚊𝚚 ↻.  
         𓆩 قـآتل مُـن ٱجل حلـمڪٰ دائما 𓆪
⠀ ⠀⠀ - ᴡᴇʟᴄᴏᴍᴇ ᴇᴠᴇʀʏᴏɴᴇ ❔
⠀","⠀⠀                
⠀ ⠀ ⠀⠀⠀. ғʀᴏᴍ #𝙸𝚛𝚊𝚚 ↻.  
         𓆩 نحن ڪـ الفرص لا نأتي مرتين 𓆪
⠀ ⠀⠀ - ᴡᴇʟᴄᴏᴍᴇ ᴇᴠᴇʀʏᴏɴᴇ ❔
⠀
","⠀⠀⠀⠀⠀⠀
‌ ⠀ ‌ ⠀ ‌⠀ ‌ ⠀⠀ ⠀⠀ ‌   .𓆸 #𝘋𝘪𝘺𝘢𝘭𝘢 𑁍.
‌ ⠀ ‌ ⠀ ‌ ⠀ ‌ ⠀ - 𝘐 𝘯𝘦𝘦𝘥 𝘢 𝘯𝘦𝘷𝘦𝘳 𝘦𝘯𝘥𝘪𝘯𝘨 𝘩𝘶𝘨 .
‌ ⠀ ‌ ⠀ ‌ ⠀ ‌‌ ‌ ⠀ ⠀‌       .⧼ 𝟤𝟶𝟶𝟥 ☆. ⧽.
","⠀⠀⠀⠀⠀⠀
‌ ⠀ ‌ ⠀ ‌⠀ ‌ ⠀⠀ ⠀⠀ ‌   .𓆸 #𝘏𝘪𝘭𝘭𝘢 𑁍.
‌ ⠀ ‌ ⠀ ‌ ⠀ ‌ ⠀ - 𝘭 '𝘮 𝘴𝘰 𝘴𝘰𝘳𝘳𝘺, 𝘉𝘶𝘵 𝘧𝘢𝘬𝘦 𝘭𝘰𝘷𝘦 .
‌ ⠀ ‌ ⠀ ‌ ⠀ ‌‌ ‌ ⠀ ⠀‌       .⧼ 𝟤𝟶𝟶𝟧 ☆. ⧽.
","⠀⠀⠀⠀⠀⠀
‌ ⠀ ‌ ⠀ ‌⠀ ‌ ⠀⠀ ⠀⠀ ‌   .𓆸 #𝘉𝘢𝘴𝘳𝘢𑁍.
‌ ⠀ ‌ ⠀ ‌ ⠀ ‌ ⠀ - 𝘐 𝘩𝘢𝘷𝘦𝘯'𝘵 𝘧𝘦𝘭𝘵 𝘢𝘭𝘪𝘷𝘦 𝘪𝘯 𝘢 𝘸𝘩𝘪𝘭𝘦  .
‌ ⠀ ‌ ⠀ ‌ ⠀ ‌‌ ‌ ⠀ ⠀‌       .⧼ 𝟤𝟶𝟶𝟦 ☆. ⧽.
","
⠀⠀ ⠀ ⠀⠀⠀  ⠀ ⠀
      ⠀⠀  ⠀⠀   - ١٢٢٤ ۿ 📋 .
           ثڪَيلة ومہ دور المالهنِ دا؏َـي 🤍
                        - ڪَـربلاء ✨
","

⠀⠀ ⠀ ⠀⠀⠀  ⠀ ⠀
      ⠀⠀  ⠀⠀   - ١٢٢٤ ۿ 📋 .
 :لبوهُۃ شرسهُۃ بثوب انثى ‏ﻡـن ضـبابُ🤍
                    - بـغــداد الـسـلامَ ✨ .
 ⠀ ⠀  ⠀ ⠀
⠀⠀ ⠀⠀ ⠀ ⠀ ⠀  ⠀ ⠀","

⠀ ⠀⠀⠀ ⠀⠀⠀ 
             . 𝑩𝒂𝒈𝒉𝒅𝒂𝒅 : #𝑙𝑟𝑎𝑞 .
ـ ‏ يـومَ ﺎخـر لإخفـاء شـعـورٍ مـاا .• 
              ـ #مَـارس 𝟎𝟒:𝟎𝟎
              ","
              
⠀ ⠀⠀⠀ ⠀⠀⠀ 
             . 𝑩𝒂𝒈𝒉𝒅𝒂𝒅 : #𝑙𝑟𝑎𝑞 .
ـ ‏لـديۿـاا قـوهہ تـشبـۿ الـمعجـزة .• 
              ـ #ﺎبـريـل 𝟎𝟒:𝟎𝟎
","              

⠀ ⠀⠀⠀ ⠀⠀⠀ 
             . 𝑩𝒂𝒈𝒉𝒅𝒂𝒅 : #𝑙𝑟𝑎𝑞 .
ـ ‏ ﭑحِـاول ﺎن لا ابـدۉ ڪمَـا اشعُــر .• 
              ـ #يـونيـوو 𝟎𝟒:𝟎𝟎
              ","
              
              ⠀ 
                                   - ¹⁶سَـہ🧡 ✓.
                                   - ذي قار 🧡❕.
     ‏ - شكَد مَ اني تَعبانه أحبك بكد تَعبي  🧡❕.
⠀","

⠀ 
                                   - ¹⁶سَـہ🧡 ✓.
                                 - البَصرۿ 🧡❕.
- ‏لا أحد يغضب لأمر تافۿ إنها التراكمات 🧡❕
⠀","

⠀ 
                                   - ¹⁶سَـہ🧡 ✓.
                                   - كربلاء 🧡❕.
      ‏ - عيشتني بواهِس الهستوه يمشي  🧡❕.
      ","
      𓆦 : زۿـݛأء  ◡̈ 💞💌.
𓆦 : ذأت الـ ١٧ ؏ـام ◡̈ 💞💌.
𓆦 : وإنك كـل مَا أحب فِي هذه #الحياة ◡̈ 💞💌.
","
?? : أيـۿ  ◡̈ 💙🧿.
𓆦 : ذأت الـ ١٤ ؏ـام ◡̈ 💙🧿.
𓆦 : انت دائماً بقلبي وأنا دائـماً #أحبك ◡̈ 💙🧿 .
","
𓆦 : مَريـم  ◡̈ 🤎🦦.
𓆦 : ذأت الـ ١٩ ؏ـام ◡̈ 🤎🦦.
𓆦 : أنت فرحة عُـمري أنت #أصدق شعور ◡̈ 🤎🦦 .
","
𓆦 : بَنيـن  ◡̈ 💛🍋.
𓆦 : ذأت الـ ١٦ ؏ـام ◡̈ 💛🍋.
𓆦 : ‏تسـرني إذا مريت في #بالي ◡̈ 💛🍋 .
","
𓆦 : ۿبـة  ◡̈ 🤍🕊.
𓆦 : ذأت الـ ٢١ ؏ـام ◡̈ 🤍🕊.
𓆦 : ‏لتكُن أصـابعي #بأمان يديك دائماً ◡̈ 🤍🕊 .
","
𓆦 : ﺄيـة  ◡̈ 🎈.
𓆦 : ذأت الـ ١٩ ؏ـام ◡̈ 🎈.
𓆦 : ‏ماياخذوُنك منَي مهما #زعلنا وأخذنا البُعد ‏ ◡̈ 🎈.
","
𓆦 : شۿـد  ◡̈ 🎈.
𓆦 : ذأت الـ ١٤ ؏ـام ◡̈ 🎈.
𓆦 : ‏ ‏اتمنى أن تمتلك عذراً كافٍ لكل ما تفعله معي حتى الآن . ◡̈ 🎈.
","
𓆦 : زۿـࢪأء  ◡̈ 🎈.
𓆦 : ذأت الـ ١٥ ؏ـام ◡̈ 🎈.
𓆦 : ‏ #حَسباليّ تحِن تاليتك بسابعّ حضن . ◡̈ 🎈.
","
𓆦 : مـينآ  ◡̈ 🎈.
𓆦 : ذأت الـ ١٩ ؏ـام ◡̈ 🎈.
𓆦 : ‏ كافي تكابر #عيونك حچن حزنك . ◡̈ 🎈.
","
𓆦 : ࢪوأن  ◡̈ 🎈.
𓆦 : ذأت الـ ١٦ ؏ـام ◡̈ 🎈.
𓆦 : ‏إذا اعتنيت #بالاشياء ، فهي تدوم .  ◡̈ 🎈.
","
𓆦 : رزﺄن  ◡̈ 🍇.
𓆦 : ذأت الـ ١٤ ؏ـام ◡̈ 🍇.
𓆦 : الوطن ليس مكان بل #انت  ◡̈ 🍇.
","
𓆦 : سَـارۿ  ◡̈ 🍇.
𓆦 : ذأت الـ ٢٠ ؏ـام ◡̈ 🍇.
𓆦 : اعَرف اجرح بلكِلام بسہِ الرفقَ #بالحيوان واجَب  ◡̈ 🍇.
","
𓆦 : سَـجى  ◡̈ 🍇.
𓆦 : ذأت الـ ١٦ ؏ـام ◡̈ 🍇.
𓆦 : اگدر اهين #كرامتك بَس أني ماگدر اهين شي مموجود اصلاً  ◡̈ 🍇.
","
𓆦 : فَـرح  ◡̈ 🍇.
𓆦 : ذأت الـ ١٩ ؏ـام ◡̈ 🍇.
𓆦 : ذيل الجلب عمره مَ #ينـ؏ـدل  ◡̈ 🍇.
","
𓆦 : رؤأن  ◡̈ 🍇.
𓆦 : ذأت الـ ١٨ ؏ـام ◡̈ 🍇.
𓆦 : تُبچيني اغنية عن ايَ #قساوة تحچون؟  ◡̈ 🍇.
");
 $inst = array_rand($ins, 1);
if($data == 'bins'){
bot('deletemessage',['chat_id'=>$chat_id2,'message_id'=>$message_id]);
bot('sendMessage',['chat_id'=>$chat_id2,'text'=>"$ins[$inst]",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'بأيو ﺄخر 💌' ,'callback_data'=>"bins"]],
[['text'=>'ألعوده الى القائمة الرئيسيه ↪' ,'callback_data'=>"home"]],
]])
]);   
}

if($data == "negchtm" ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"
 ~ أضغـط علئ الاسم المناسب من الأسفل .
~ لـيتم نسخها لكَ فوراً .
  — — — — — — — — —
..`⌠𝐒𝐞𝐥𝐯𝐚𝐧𝐚⌡𓊑.`
..`⌠𝐓𝐨𝐛𝐚𝐤⌡𓊑.`
..`⌠𝐄𝐥𝐤𝐚𝐫⌡𓊑.`
..`⌠𝐌𝐚𝐲𝐚⌡𓊑.`
..`⌠𝐓𝐞𝐨𝐨⌡𓊑.`
..`⌠𝐌𝐞𝐚⌡𓊑.`
..`⌠𝐋𝐞𝐥𝐞⌡𓊑.`
 — — — — — — — — —
⌯ `˹𝙆𝙖𝙧𝙖˼ ♕︎.`
⌯ `˹𝙉𝙖𝙖𝙧˼ ♕︎.`
⌯ `˹𝙂𝙢𝙧˼ ♕︎.`
⌯ `˹𝘿𝙚𝙫˼ ♕︎.`
⌯` ˹𝙀𝙫𝙖˼ ♕︎.`
 — — — — — — — — —
:   `˹𝘾𝘼𝙍𝙊𝙇𝙄𝙉𝙀˼ 𓄧 .`
:  ` ˹𝘾𝙍𝙔𝙎𝙏𝘼𝙇˼ 𓄧 .`
:   `˹𝙇𝘼𝙐𝙍𝙀𝙉˼ 𓄧 .`
:   `˹𝙆𝘼𝙈𝙄𝙇𝘼˼ 𓄧 .`
:   `˹𝘿𝘼𝙉𝘼˼ 𓄧 .`
:   `˹𝙍𝙄𝙏𝘼˼ 𓄧 .`
 — — — — — — — — —
`- 𝙎 𝘼 𝙉 𝘿 𝙍 𝙄 𝙇 𝘼 : 🇺🇸Ꮠ`
`- 𝙍 𝘽 𝘼 𝙉 𝙕 𝙇 : 🇺🇸Ꮠ`
`- 𝙉 𝘼 𝙍 𝙏 𝙊 : 🇺🇸Ꮠ`
`- 𝙎 𝘼 𝙇 𝙇 𝙔 : 🇺🇸Ꮠ`
`- 𝙅 𝙀 𝙍 𝙔 : 🇺🇸Ꮠ`
`- 𝙏 𝙊 𝙈 : 🇺🇸Ꮠ`
`- 𝘽 𝙀 𝙉 : 🇺🇸Ꮠ`
 — — — — — — — — 
`ᯓ - 𝙈𝙮 𝙀𝙢𝙥𝙞𝙧𝙚 ᯾︎༆︎”`
`ᯓ - 𝙏𝙝𝙚 𝙆𝙞𝙣𝙜  ᯾︎༆︎”`
`ᯓ - 𝙏𝙝𝙚 𝙌𝙪𝙚𝙚𝙣 ᯾︎༆︎”`
`ᯓ - 𝙋𝙧𝙞𝙣𝙘𝙚 ᯾︎༆︎”`
— — — — — — — — —
`:   ˹𝘾𝘼𝙍𝙊𝙇𝙄𝙉𝙀˼ 𓄧 .`
`:   ˹𝘾𝙍𝙔𝙎𝙏𝘼𝙇˼ 𓄧 .`
`:   ˹𝙇𝘼𝙐𝙍𝙀𝙉˼ 𓄧 .`
`:   ˹𝙆𝘼𝙈𝙄𝙇𝘼˼ 𓄧 .`
`:   ˹𝘿𝘼𝙉𝘼˼ 𓄧 .`
`:   ˹𝘿𝘼𝙉𝘼˼ 𓄧 .`
`:   ˹𝙍𝙄𝙏𝘼˼ 𓄧 .`
— — — — — — — — —
`◝ 𓆩𝘙𝘢𝘜𝘯𝘋𓆪 ◜ .`
`◝ 𓆩𝘉𝘰𝘕𝘬𝘌𓆪 ◜ .`
`◝ 𓆩𝘍𝘰𝘟𓆪 ◜ .`
`◝ 𓆩𝘉𝘰𝘉𓆪 ◜ .`
`◝ 𓆩𝘌𝘷𝘌𝘯𓆪 ◜ .`
`◝ 𓆩𝘝𝘰𝘋𝘬𝘈𓆪 ◜ .`
",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'ألعوده الى القائمة الرئيسيه ↪' ,'callback_data'=>"home"]],]])]);}

if($data == "pubgs" ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"
~ أضغـط علئ الاسم المناسب من الأسفل .
~ لـيتم نسخها لكَ فوراً .
  — — — — — — — — —
`بـحـه丨`
`مجرمه丨`
`ڪبير丨`
`ڪبيرﮪ丨`
`¯زوزو¯`
`¯راما¯`
`¯الحجي¯`
`¯ملهہ¯`
`ملڪهہ十`
`سڪرٲنه〆`
`么丨ثولهہ`
`ڪآرثهۂ๛`
`〖نون〗ジ`
`〖تاره〗ジ`
`〖سمآ〗ジ`
`〖ايو〗ジ`
`نستلهۂ٭`
`٭توڪۿۂ٭`
`々「نور」卍`
`خبله؟M7丨`
`٭ملوڪه٭`
`〆『ملڪه』`
`55๛ بطـه`
`L1・مخبله`
`L1・مخبـل`

`べكـَجبべ`
`べصـَـاصべ`
`べشَطـةべ`
`べعنَبةべ`

`べثـَلجべ`
`べبـَردべ`
`べحُـرべ`
`べشَـمسべ`

`. مايگلび`
`. گوبراび`
`. بلاديび`
`. جـوگرび`
`. اجلدگび`
`. سگرابび`
`. دعـاسび`

`스ستـَوب`
`스بريَگہ`
`스مَـرو`
`스زنـَو`
`스بـَوتة`
— — — — — — — — —
",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'ألعوده الى القائمة الرئيسيه ↪' ,'callback_data'=>"home"]],]])]);}

if($data == "namei" ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"
اسماء عائلة ڪيوت.
— — — — — — — — —
`• ˹𝙈𝙮 𝙈𝙤𝙢˼ 💛.`
`• ˹𝙈𝙮 𝘿𝙖𝙙˼ 💛.`
`• ˹𝙈𝙮 𝙎𝙞𝙨𝙩𝙚𝙧˼ 💛.`
`• ˹𝙈𝙮 𝘽𝙧𝙤𝙩𝙝𝙚𝙧˼ 💛.`
— — — — — — — — —
  اسماء عشاق ڪيوت 
— — — — — — — — —
`• ˹𝙈𝙮 𝘾𝙪𝙩𝙚˼  💞`
`• ˹𝙈𝙮 𝙇𝙞𝙩𝙩𝙡𝙚˼  💞.`
`• ˹𝙈𝙮 𝘾𝙤𝙢𝙛𝙤𝙧𝙩˼  💞.`
`• ˹𝙈𝙮 𝘽𝙧𝙚𝙖𝙩𝙝˼  💞.`
`• ˹𝙈𝙮 𝘽𝙚𝙡𝙤𝙫𝙚𝙙˼  💞.`
`• ˹𝙈𝙮 𝙃𝙚𝙖𝙧𝙩˼  💞.`
`• ˹𝙈𝙮 𝙒𝙤𝙧𝙡𝙙˼  💞.`
`• ˹𝙈𝙮 𝙇𝙞𝙛𝙚˼  💞`
— — — — — — — — —
اسماء اصدقاء ڪيوت
— — — — — — — — —
`• ˹𝙈𝙮 𝙂𝙞𝙧𝙡𝙛𝙧𝙞𝙚𝙣𝙙˼ 🧸.`
`• ˹𝙈𝙮 𝙁𝙧𝙞𝙚𝙣𝙙˼ 🧸.`
`• ˹𝙈𝙮 𝙀𝙮𝙚𝙨˼ 🧸.`
— — — — — — — — —
اضغط على اي أسم ليتم نسخة .
— — — — — — — — —
",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'ألعوده الى القائمة الرئيسيه ↪' ,'callback_data'=>"home"]],]])]);}

if($data == "wsofat" ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"
 ~ أضغـط علئ ألوصف المناسب من الأسفل .
~ لـيتم نسخهُ لكَ فوراً .
  — — — — — — — — —
وصوفات ڪروبات
— — — — — — — — —
`† ڪروب -   - ألرسِـمي 💘.
† بدون مشاڪل وعرڪات 💘.
† تهمنة اللمه الحلوۿ ، ميهمنا العدد 💘.
† بدون ڪانسرية ، أربط فيشه ويه ألكل 💘.
𝙈𝙔 : @  💘.
𝙇𝙄𝙉𝙆 :  `
--------------------------------------
`† ڪروب -   - ألرسِـمي ♥.
† حڪ الضحك والونسا ♥.
† نتشرف بألكل ، والكل علراسنه ♥.
† تسوي مشاڪل ، اطلع برة ♥.
𝙇𝙄𝙉𝙆 :  `
--------------------------------------
`† ڪروب -   - ألرسِـمي 🧸.
† حڪ ألحاتات والحاتين 🧸.
† بدون ڪانسرية ، خليك تمبلر 🧸.
† تزحـف تنطرد  🧸.
𝙇𝙄𝙉𝙆 :  `
— — — — — — — — —
وصوفات قنوات 
— — — — — — — — —
`- قناة حڪك الأسود 🖤.
- لـ فتاة بعمر ألـ  🖤.
- وأن الاسود لَـ لون عضيم 🖤.
𝙈𝙔 : @  🖤.`
--------------------------------------
`- قناة حڪك ألتُمبلر  🍬.
- لـ شاب بعمر ألـ  🍬..
𝙈𝙔 : @  🍬.`
--------------------------------------
`- قناة حڪك ألحب  💞.
- لـ فتاة بعمر ألـ   💞.
- أجو بعدج نهر ممدود ، بس ضليت عطشانچ 💞.
𝙈𝙔 : @  💞.`
--------------------------------------
`- قناة حڪك ألاقتباسات 💞.
- لـ شاب بعمر ألـ   💞.
- أذيتني بـ گد ماچنت خايف عليك وحابك 💞.
𝙈𝙔 : @  💞.`
",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'ألعوده الى القائمة الرئيسيه ↪' ,'callback_data'=>"home"]],]])]);}

