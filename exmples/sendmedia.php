<?php
// BlueStone V1.2
if(!file_exists('BlueStone.php')){
    copy("https://DinoSoft.ir/BlueStone.php","BlueStone.php");
}
include 'BlueStone.php';


//=======================
$BlueStone->Start("BOT_TOKEN");
//=======================

if($TextMessage =="photo"){
    $BlueStone->BSM('sendphoto',[
        'chat_id'=>$Chatid,
        'photo'=>"https://t.me/BlueStoneProto", // Url
        'caption'=>"BlueStone Proto!",
    ]);
}
if($TextMessage =="video"){
    $BlueStone->BSM('sendvideo',[
        'chat_id'=>$Chatid,
        'video'=>"https://upmusics.com/wp-content/uploads/2020/06/101137112_176360520481822_7240533757950682679_n.mp4", // Url
        'caption'=>"BlueStone Proto! | Negar - Reza Bahram",
    ]);
}
if($TextMessage =="music"){
    $BlueStone->BSM('sendaudio',[
        'chat_id'=>$Chatid,
        'audio'=>"https://irsv.upmusics.com/99/Reza%20Bahram%20%7C%20Negar%20(320).mp3", // Url
        'caption'=>"BlueStone Proto! | Negar - Reza Bahram",
    ]);
}