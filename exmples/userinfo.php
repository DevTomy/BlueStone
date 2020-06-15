<?php
// BlueStone V1.2
if(!file_exists('BlueStone.php')){
    copy("https://DinoSoft.ir/BlueStone.php","BlueStone.php");
}
include 'BlueStone.php';


//=======================
$BlueStone->Start("BOT_TOKEN");

if(isset($TextMessage)){
    $BlueStone->BSM('sendmessage',[
        'chat_id'=>$Chatid,
        'text'=>"$UserName \nId: $Chatid \nFirst: ".$update->message->from->first_name." \nLast: ".$update->message->from->last_name
        ]); // SendMessage
}