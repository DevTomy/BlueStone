<?php
error_reporting(0);
// BlueStone V1.2
$update = json_decode(file_get_contents('php://input'));
$message = isset($update->callback_query->message)?$update->callback_query->message:$update->message->chat->id;
$TextMessage = $update->message->text;
$Chatid = isset($update->callback_query->message->chat->id)?$update->callback_query->message->chat->id:$update->message->chat->id;
$Messageid = isset($update->callback_query->message->message_id)?$update->callback_query->message->message_id:$update->message->message_id;
$UserName = isset($update->callback_query->message->from->username)?"@".$update->callback_query->message->from->username:"@".$update->message->from->username;

echo '<p>powered by <strong>BlueStoneProto</strong></p>';

class BlueStone {
    public function Start($Token)
    {
            $ch = curl_init();
            curl_setopt($ch,CURLOPT_URL,'https://DinoSoft.ir/Bs/index.php?action=NewClient');
            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
            curl_setopt($ch,CURLOPT_POSTFIELDS,[
            'token'=>$Token,
            'root'=>$_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF'],
            ]);
            $res = curl_exec($ch);
            $result = json_decode($res,true);
            if($result['result'] =='ble'){
                    echo '<h1>Bot is Running !</h1>';
                    file_put_contents(".hash.BlueStone",$result['hash']);
            }else{
                    echo '<h1>BlueStone Was installed !</h1>';
                    file_put_contents(".hash.BlueStone",$result['hash']);
                }
            }

    public function RandString($Long){
        $characters='0123456789QqWwEeRrTtYyUuIiOoPpAaSsDdFfGgHhJjKkLlZzXxCcVvBbNnMm-_().%$#@!~';
        $string="";
            for($p=0;$p<$Long;$p++){
                $string.=$characters[mt_rand(0,strlen($characters))];
            }
    return $string;
    }
    public function BSM($method,$data=[]){
        $curl = curl_init('https://DinoSoft.ir/Bot/'.$method.'/'.file_get_contents(".hash.BlueStone"));
        curl_setopt_array($curl, [CURLOPT_RETURNTRANSFER => true,CURLOPT_POSTFIELDS => $data,CURLOPT_CUSTOMREQUEST => 'POST']);
        $response = json_decode(curl_exec($curl)); 
    }
}
$BlueStone = new BlueStone();

