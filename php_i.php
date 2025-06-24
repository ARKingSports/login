<?php 

# ممنوع تغير الحقوق عند نشر الملف  #
#ch : @php_i #
# Dev :  @dev_i or @lllill  #

ob_start();
$API_KEY = "7674023219:AAErODBgVZvJKK4BsmHixunfAIfKhUnEang"; 

define('API_KEY',$API_KEY);
function php_i($method,$datas=[]){
$url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
$res = curl_exec($ch);

if(curl_error($ch)){
var_dump(curl_error($ch));
}else{
return json_decode($res);}}
## هدوووء   # @php_i  # @dev_i  # @lllill ##
$update = json_decode(file_get_contents('php://input'));
$message = $update->message; 
$chat_id = $message->chat->id;
$text = $message->text;
$chatid = $update->callback_query->message->chat->id;
$data = $update->callback_query->data;
$message_id = $update->callback_query->message->message_id;
$public = file_get_contents("data/".$chat_id."/c.txt");
mkdir("data/$chat_id");

$php_i = 2059620983;
$idd  = $message->from->id; 
 ##########سوالف مطور ##########
 $cha= "alejandro";
if($text){$from_id = $message->from->id;
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$cha&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
php_i('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"• عـذراََ ! 🤚🏿

• يجب عليك الاشتراك في قناة اولا➕
• لـ استخدام البوت 🃏

• القناة 🥤:- 

ثم ارسل /start 🌈",
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'اضغط هنا للاشتراك 💮','url'=>'t.me/i_lo_v_e']],]])]);return false;}}
## هدوووء   # @php_i  # @dev_i  # @lllill ##
$botn = "ii_kbot";
$php = 2059620983;
$id   = $message->from->id; 
$u = explode("\n",file_get_contents("data/$botn.txt"));
$c = count($u)-1;
if ($update && !in_array($chat_id, $u)) {
    file_put_contents("data/$botn.txt", $chat_id."\n",FILE_APPEND);
 }
 ## هدوووء   # @php_i  # @dev_i  # @lllill ##
 if($chat_id == $php){
if ($text == "الاوامر" ){
    php_i('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    مرحبا بك في قائمة المطور 🎌",
         'reply_markup'=>json_encode([
 'resize_keyboard'=>true,
 'keyboard'=>[
 [['text'=>"الاعضاء 🙍🏻‍♂️"],['text'=>"اذاعة ✔️"]],
]])]);}}
if ($text == 'الاعضاء 🙍🏻‍♂️' and $id == $php) {
    php_i('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"اعضاء البوت 🤷🏿‍♂️ :-  $c"
    ]);
  }
$mode = file_get_contents("data/2$botn.txt");
if ($text == 'اذاعة ✔️' and $id == $php) {
    file_put_contents("data/2$botn.txt","yas");
    php_i('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"ارسل رسالتك الان 📩 وسيتم نشرها لـ $c مشترك", 
             'reply_markup'=>json_encode([
 'resize_keyboard'=>true,
 'keyboard'=>[
 [['text'=>"الغاء 🍷"]],]])]);}
  
if($text and $mode == "yas" and $id = $php and $text !="الغاء 🍷"){
    for ($i=0; $i < count($u); $i++) { 
        php_i('sendMessage',[
          'chat_id'=>$u[$i],
          'text'=>"$text", ]);       }
             php_i ('sendMessage',[
              'chat_id'=>$chat_id,
    'text'=>"• تم الارسال بنجاح   ✔️", 
             'reply_markup'=>json_encode([
 'resize_keyboard'=>true,
 'keyboard'=>[
 [['text'=>"الاعضاء 🙍🏻‍♂️"],['text'=>"اذاعة ✔️"]],
 ]])]);
 file_put_contents("data/2$botn.txt","no");}
 
## هدوووء   # @php_i  # @dev_i  # @lllill ##
if ( $text =="الغاء 🍷" and $id == $php){
      file_put_contents("data/2$botn.txt","no");
   php_i ('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"• تـم الغاء الاذاعة ✔️", 
             'reply_markup'=>json_encode([
 'resize_keyboard'=>true,
 'keyboard'=>[
 [['text'=>"الاعضاء 🙍🏻‍♂️"],['text'=>"اذاعة ✔️"]],]])]);}

$php_i = "by @php_i\nname:-$text";
$st = "*• مـرحبا بك 🧔🏻
- فـي بوت عمل لوكو خاص بك ⭕\n
- لـ استخدام البوت اختار نوع الوكو من الاسفل ثم ارسل اسمك 🖇️\n
By :- @dev_i 🎌";

if($text == '/start'){
php_i('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"$st",
  'reply_markup'=>json_encode([
     "resize_keyboard"=>true,
            "one_time_keyboard"=>true,
'keyboard'=>[
  [['text'=>"لـوكو موسيقى 🎻"],['text'=>"لـوكو رياضي 🏀"]],
  [['text'=>"لـوكو سيارات 🏎️"],['text'=>"لـوكو DJ 🔊"]],
  [['text'=>"لـوكو منوع 2 🎌"],['text'=>"لـوكو منوع 🎌"]],
  [['text'=>"لوكو منوع 3 ☄️"],['text'=>"QR"]],

]])]);}  
## هدوووء   # @php_i  # @dev_i  # @lllill ##
$dev_a = 2059620983;
if($text=="/start" and $chat_id !== $dev_a){
php_i('forwardMessage',[
'chat_id'=>$dev_a,
'from_chat_id'=>$chat_id,
'message_id'=>$update->message->message_id,
]);
}

elseif($text == 'لـوكو رياضي 🏀'){
file_put_contents("data/$chat_id/c.txt", "1");
php_i('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"*ارسـل الاسم الان *",
 'parse_mode'=>"MarkDown",
 ]);
}
elseif($text == 'لـوكو موسيقى 🎻'){
file_put_contents("data/$chat_id/c.txt", "2");
php_i('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"*ارسـل الاسم الان *",
 'parse_mode'=>"MarkDown",
 ]);
}
elseif($text == 'لـوكو سيارات 🏎️'){
file_put_contents("data/$chat_id/c.txt", "3");
php_i('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"*ارسـل الاسم الان *",
 'parse_mode'=>"MarkDown",
 ]);
}
elseif($text == 'لـوكو DJ 🔊'){
file_put_contents("data/$chat_id/c.txt", "4");
php_i('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"*ارسـل الاسم الان *",
 'parse_mode'=>"MarkDown",
 ]);
}
elseif($text == 'لـوكو منوع 🎌'){
file_put_contents("data/$chat_id/c.txt", "5");
php_i('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"*ارسـل الاسم الان *",
 'parse_mode'=>"MarkDown",
 ]);
}
elseif($text == 'لـوكو منوع 2 🎌'){
file_put_contents("data/$chat_id/c.txt", "6");
php_i('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"*ارسـل الاسم الان *",
 'parse_mode'=>"MarkDown",
 ]);
}
## هدوووء   # @php_i  # @dev_i  # @lllill ##
elseif($text == 'لوكو منوع 3 ☄️'){
file_put_contents("data/$chat_id/c.txt", "7");
php_i('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"*ارسـل الاسم الان *",
 'parse_mode'=>"MarkDown",
 ]);
}
elseif($text == 'QR'){
file_put_contents("data/$chat_id/c.txt", "8");
php_i('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"*ارسـل الاسم الان *",
 'parse_mode'=>"MarkDown",
 ]);
}
## هدوووء   # @php_i  # @dev_i  # @lllill ##
elseif($public == '8'){
file_put_contents("data/$chat_id/php_i.txt", $text);php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"http://qr-code.ir/api/qr-code?s=5&e=M&t=P&d=$text ",
'caption'=>"$php_i",
]);php_i('sendMessage',[  'chat_id'=>$chat_id,  'text'=>"•تـم انتهاء تصميم لـوكو 🌈

- يمكنك اختيار لوكو اخر من القائمة ادناه 👇🏿",
]);unlink("data/$chat_id/c.txt");}


elseif($public == '1'){
file_put_contents("data/$chat_id/php_i.txt", $text);
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/4b4b23e4-f3d3-42b1-9c5d-615ac62ef5ac/logo?v=4&text=$text",
'caption'=>"@php_i 
 name :- $text ",
]);
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/08e30364-b0cf-48df-80f2-964bfe5547e4/logo?v=4&text=$text",
'caption'=>"@php_i 
 name :- $text ",
]);
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/2aeefb25-2d78-4058-8cc7-74e2b4083e50/logo?v=4&text=$text",
'caption'=>"@php_i 
 name :- $text ",
]);
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/fc3c8bc5-a48c-47f0-b034-b258b3abce68/logo?v=4&text=$text",
'caption'=>"@php_i 
 name :- $text ",
]); 
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/79ff2b19-667e-43c4-9164-332330dc6f1b/logo?v=4&text=$text",
'caption'=>"@php_i 
 name :- $text ",
]);
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/e33c12b4-1128-4129-b31f-2c31cb0878c7/logo?v=4&text=$text",
'caption'=>"@php_i 
 name :- $text ",
]);
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/bd00f834-d5f9-475a-ad48-0c6126f077c6/logo?v=4&text=$text",
'caption'=>"@php_i 
 name :- $text ",
]);
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/1b1869b4-e487-474b-b0e3-7f3bf8194194/logo?v=4&text=$text",
'caption'=>"@php_i 
 name :- $text ",
]);
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/48125ab7-a743-4f54-8da8-b2c6230e710f/logo?v=4&text=$text",
'caption'=>"@php_i 
 name :- $text ",
]);
php_i('sendMessage',[  'chat_id'=>$chat_id,  'text'=>"•تـم انتهاء تصميم لـوكو 🌈

- يمكنك اختيار لوكو اخر من القائمة ادناه 👇🏿",
]);unlink("data/$chat_id/c.txt");}

elseif($public == '7'){
file_put_contents("data/$chat_id/php_i.txt");
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/d1d5e766-8cd8-424f-aa4d-fbc07908a8d2/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/99e9e246-fca4-4fbb-a7b2-a2ff497d85b3/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/fa5b9460-2773-4c4d-a3d6-1f733bc42dba/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);
## هدوووء   # @php_i  # @dev_i  # @lllill ##
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"http://dev_i.000webhostapp.com/api/api.php?type=356&text1=$ex[1]&text2=dhurgham ",
'caption'=>"$php_i ",
]);
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/8d70e3bd-71b3-46e0-9dc8-7dfe3389e7e5/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);
php_i('sendMessage',[  'chat_id'=>$chat_id,  'text'=>"•تـم انتهاء تصميم لـوكو 🌈

- يمكنك اختيار لوكو اخر من القائمة ادناه 👇🏿",
]);unlink("data/$chat_id/c.txt");}

elseif($public == '5'){
 file_put_contents("data/$chat_id/php_i.txt", $text);
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/2a23b1f8-1793-46ee-993b-d6c83b8df0dd/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);
## هدوووء   # @php_i  # @dev_i  # @lllill ##
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/87ea7fe8-4e10-4819-8814-60d63ce8f9b8/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);
## هدوووء   # @php_i  # @dev_i  # @lllill ##
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/f8d2306a-8987-40a0-9de8-d448a6f2b048/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/5e47943d-4857-474d-b7ca-009652b9e52d/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/55829798-84dd-428f-871f-0a83955e2d49/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/ef89e50c-2d4e-42da-a6bb-90af099b66fa/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/ab03a446-9f79-4278-aebf-141d6baa5e79/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);
## هدوووء   # @php_i  # @dev_i  # @lllill ##
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/bf0b8391-41e4-4f60-ace9-a18a114306e1/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/cddaf4c3-5ab9-4957-9da0-437cd56d7a6c/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/297c288d-4c21-4f1d-958b-e617feaef9be/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);
## هدوووء   # @php_i  # @dev_i  # @lllill ##
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/1d774b95-f479-4380-a92b-51fe4c821129/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/72b97da3-2e87-4e4b-889d-04c8711e805d/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/0b55f069-103e-459b-bd33-6dbdfc7ca811/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/93857f38-1788-47e3-9560-0220b88ac94e/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/b1c634dd-aacc-4190-986c-7ace14ed3ec6/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/e18e8c65-b2aa-49e6-8a07-ef2464ff25ae/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);
## هدوووء   # @php_i  # @dev_i  # @lllill ##
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/e0e7aaf6-f3e6-457f-99ed-dc3487e29912/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/23eaaf26-a0f8-41f4-9ef5-468dc8b5bde3/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/45218131-8405-40a4-bb04-24d1710eff0d/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/b6d2d7ef-e4cb-44cd-9979-12068b09ec47/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);
## هدوووء   # @php_i  # @dev_i  # @lllill ##
php_i('sendMessage',[  'chat_id'=>$chat_id,  'text'=>"•تـم انتهاء تصميم لـوكو 🌈

- يمكنك اختيار لوكو اخر من القائمة ادناه 👇🏿",
]);unlink("data/$chat_id/c.txt");}
elseif($public == '2'){
 file_put_contents("data/$chat_id/php_i.txt", $text);
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/2368b276-9678-4611-8d9f-232f858ffc5a/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/95e81a44-d412-49cf-a492-bf9530c0bcf2/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/ea44541f-995f-4525-89d4-17739b855a2e/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/1bfbead8-fd97-43f7-8e10-020578e6c349/logo?v=4&text=$text",
'caption'=>"$php_i",
]);
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/85c09ff0-40bb-40c3-8c0c-802cc19a2297/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/2a97a62b-9851-42c0-96c8-8afe40f57e0a/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);
## هدوووء   # @php_i  # @dev_i  # @lllill ##
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/b43f1777-660c-482c-bacd-2e1642baf003/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);
## هدوووء   # @php_i  # @dev_i  # @lllill ##
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/11a70f98-24bf-41ff-8470-b9b096af31dd/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/ae3a80f0-5fd7-4fe6-bde8-a1ae017e33c1/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/f05edb5b-c016-4d31-955f-73a3e082e1epic1/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/fbff98fe-0132-4346-aa2b-af4488ebb4fd/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);
php_i('sendMessage',[  'chat_id'=>$chat_id,  'text'=>"•تـم انتهاء تصميم لـوكو 🌈

- يمكنك اختيار لوكو اخر من القائمة ادناه 👇🏿",
]);unlink("data/$chat_id/c.txt");}
elseif($public == '6'){
 file_put_contents("data/$chat_id/php_i.txt", $text);
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/4a2ea46d-5501-48a5-9d8d-8110f9420b85/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);
## هدوووء   # @php_i  # @dev_i  # @lllill ##
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/2de6d448-afc7-425a-b51f-903fb0bc9340/logo?v=4&text=$text",
'caption'=>"@php_i 
 name :- $text ",
]);
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/b54cb74a-f0c5-4071-934b-019257430e4b/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/a9a8ca01-e658-4339-917d-0010ddeaa0b6/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/163f89d3-60a5-40ac-9325-0299844d5d67/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);
## هدوووء   # @php_i  # @dev_i  # @lllill ##
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/983dc163-be5a-406d-848e-9cc4e2b60109/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"http://away-dev.000webhostapp.com/api/api.php?type=372&text1=$ex[1]&text2=dhurgham ",
'caption'=>"$php_i ",
]);
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/8d3db074-52eb-4888-8a35-f683ec1cef0f/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/9988e891-579c-47f5-bfaf-959c3a2d8e25/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/dff12af1-28d3-4645-aba0-b209b6ee8ed7/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/2085a114-720f-4f81-bfeb-778ea5ac2052/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);
## هدوووء   # @php_i  # @dev_i  # @lllill ##
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/45c72bf1-5935-4eee-a65e-e8dd850e37b8/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/a3defcce-fb2e-4a44-b654-4e3246141f94/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);
php_i('sendMessage',[  'chat_id'=>$chat_id,  'text'=>"•تـم انتهاء تصميم لـوكو 🌈

- يمكنك اختيار لوكو اخر من القائمة ادناه 👇🏿",
]);unlink("data/$chat_id/c.txt");}
elseif($public == '3'){
file_put_contents("data/$chat_id/php_i.txt");
 
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/b3236a76-dc4b-4605-a7a3-6649fb2da488/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);unlink("data/$chat_id/c.txt"); 
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/707a772e-87ac-4225-be00-5715df731443/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/be26c778-4cbd-4a14-b8b1-4b8b1fe07952/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);
## هدوووء   # @php_i  # @dev_i  # @lllill ##
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/4e78e518-91c8-40ea-bbc9-eba385c6d796/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/28ebcaf7-2371-43e9-8e1a-da980a834b1a/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/0a676c20-7b98-4bea-8652-dc0ad06f6c54/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/0d556a87-9ade-426a-b60a-e7575aa3edeb/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);
## هدوووء   # @php_i  # @dev_i  # @lllill ##
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/e05bef29-964a-4a57-b6c2-128266b9c2c3/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);
## هدوووء   # @php_i  # @dev_i  # @lllill ##
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/5223e7c6-3cc7-41b2-bb43-9ca4fc8b2d99/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/7d1a812d-9e8b-4451-a38c-d384ab1ed98e/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);
## هدوووء   # @php_i  # @dev_i  # @lllill ##
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/127564ac-8114-43ce-9686-2f6befb8b14a/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);
php_i('sendMessage',[  'chat_id'=>$chat_id,  'text'=>"•تـم انتهاء تصميم لـوكو 🌈

- يمكنك اختيار لوكو اخر من القائمة ادناه 👇🏿",
]);unlink("data/$chat_id/c.txt");}
elseif($public == '4'){
 file_put_contents("data/$chat_id/php_i.txt", $text);
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/9bd9f7b0-971d-460b-9f35-b30091cc32f6/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);
## هدوووء   # @php_i  # @dev_i  # @lllill ##
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/dde89710-82d1-4d2a-8752-42bebc9b9a05/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/7229c0d6-cc4f-4e47-87b2-3b01285f502d/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/ad38bcc8-b76b-483c-88cb-41af5218d9ac/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/3f607d24-e269-4fd0-8ad1-34d315a51558/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);
## هدوووء   # @php_i  # @dev_i  # @lllill ##
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/5275891b-6017-49a1-86cf-def79699e926/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/27a7162f-f00f-4d64-82aa-d77561298f14/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/ce7f825f-150c-46a0-842a-7235bc0442af/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);
## هدوووء   # @php_i  # @dev_i  # @lllill ##
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/7c8b9cd6-4636-4230-bd82-d083b414c141/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);
php_i('SendPhoto',[
'chat_id'=>$chat_id, 
     
'photo'=>"https://bcassetcdn.com/asset/logo/ea509e1b-89eb-457b-810b-2f3d42cc6841/logo?v=4&text=$text",
'caption'=>"$php_i ",
]);
php_i('sendMessage',[  'chat_id'=>$chat_id,  'text'=>"•تـم انتهاء تصميم لـوكو 🌈

- يمكنك اختيار لوكو اخر من القائمة ادناه 👇🏿",
]);unlink("data/$chat_id/c.txt");}
## هدوووء   # @php_i  # @dev_i  # @lllill ##