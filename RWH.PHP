<?php
define('API_KEY','383810334:AAEFbF4_lAG1WB3TiDrvOsVpBimq53XxI84');
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,http_build_query($datas));
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}

$update = json_decode(file_get_contents('php://input'));
$chat_id = $update->message->chat->id;
$text = $update->message->text;
$message_id = $update->message->message_id;


function SendMessage($ChatId, $TextMsg)
{
 bot('sendMessage',[
'chat_id'=>$ChatId,
'text'=>$TextMsg,
'parse_mode'=>"html"
]);
}
if($text == "/start"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"اهــلـا سـيـديـي 🗯🎖

فــي بـوت الـردود 🗣🔌

قــم بــتـرقـيـتـي مـشـرف لـاصـنـع تـفـاعـل فـي مـجـمـوعـتـك 🎆


BY: @RUESAPI ",
]);
}
if($text == "هلو"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"هـلـاوات☂",
 ]);
 }
 
if($text == "شلونك"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"الــحـمـدالـله☺",
 ]);
 }

if($text == "دي"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"امـشـيك بـيـهـا هـاـي بـنـعـال🌝🍌",
 ]);
 }

if($text == "اتحبني"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"اعــشـقـك يـرب الـكـعـبـة 😻",
 ]);
 }

if($text == "مها"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"هـاـي الـروح والـكـلـب 🙈😻",
 ]);
 }

if($text == "باي"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"ويـن خـلـيـنـة بـتـونـسـيـن 😻😹",
 ]);
 }
 
if($text == "بغداد"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"عـــشـق لـايـنـتـهــي 😻🌿",
 ]);
 }
 
if($text == "احبك"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"امـــوت عـلـيـك 😻😽",
 ]);
 }

if($text == "احبج"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"امــوت علـيـك حـيـاــتـي 😻🙊",
 ]);
 }

if($text == "شكرا"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"عــــفـواا 🌞🌿",
 ]);
 }
 
if($text == "تف"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"تــفــوو ع وجــهــك كــوااد 🌝🐜",
 ]);
 }

if($text == "بوت"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"كــول حــبـحـيـاتــي 🌝🌿",
 ]);
 }
 
if($text == "انجب"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"وكــــك انــجـبـيـت 😷🔪",
 
 ]);
 }

if($text == "منو صنعك"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"هــذا الهــيـبـة الـتـسـطـر 😻🔥
 
           ►▇ @P_H_P70 ▇◐►",
 ]);
 }

if($text == "اكفر"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"اكــفـر وشــوف ادحـــس الــعـيـر بـــكـسـمـك 🌞🔥",
 ]);
 }
 
if($text == "استغفر الله"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"بـــركـاتـك مــولـايــي 🌚🐗",
 ]);
 }

if($text == "رويس"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"هــذا الـضـلـع الـمـايـنـشـلـع فــديـتـه 😻😹",
 ]);
 }
 
if($text == "😳"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"هـــاا بــس لـاشــفـت خــالـتـك الـحـمـرة 🙀😹",
 ]);
 }
 
if($text == "🌚"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"اهــــوو اصــخـام الـجـدر تــفــوو ع هــيـج وجــه 🌚🔥",
 ]);
 }

if($text == "😻"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"فـــديـت الـــحـب 🙈😻",
 ]);
 }
 
if($text == "😿"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"اشــبـيـك حـــب نــااجــوك 😿😹",
 ]);
 }
 
if($text == "😹"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"دومـــهــا ابــنـصـخـل 😹😹",
 ]);
 }
 
if($text == "🌝"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"فـــديــت الــكـمـر وخـصـاويـه 😻😹",
 ]);
 }
 
if($text == "😽"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"لــتـبـوــس لـاابـلـشـحـاطـة ع حــلـكـك 😾😹",
 ]);
 }
 
 
if($text == "نعال"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"ع وجـــهــك بــنــشـحـااطــهاحــط عــيـرــي بــكــسـمـك اشــكـهــه 🌞🌿",
 ]);
 }
 
if($text == "اتخليني"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"بـــااع هــذاا مـــدود 🌞😹",
 ]);
 }
 
if($text == "هينة"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"تـــعـال لــك زبــالـة 🌝😹",
 ]);
 }
 
if($text == "زاحف"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"زاخـــف عــلـخـتـك مــثـلـاا كــســــمـك ع زبــي 🌞🌿",
 ]);
 }

if($text == "عير"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"ءوووف هـــذا الـعـشـق مـال كــس 😻🙊",
 ]);
 }

if($text == "الكس"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"ء وووف هـــذاا الــعـشـق مــال عــيـر 😻",
 ]);
 }
?>