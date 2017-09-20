<?php

include ('line-bot.php');

$channelSecret = '841486a93a017315b13d5bce4b657adc';
$access_token  = 'rRHE7SZwIcoSP/G29igg/qkctcxtYnJBoPlBYVwwzCQG1PL1S9qts/zTFJ21nddCVhq80kLTYXYRD2EDgRdRrR+LLdIaY99CVl6C0YiBFKkWfKt4YcW1myVifQ4RdG3WnK9Zq6bh4RiroaSzIchxNAdB04t89/1O/w1cDnyilFU=';

$bot = new BOT_API($channelSecret, $access_token);
	
if (!empty($bot->isEvents)) {
		
    $bot->replyMessageNew($bot->replyToken, json_encode($bot->message));

    if ($bot->isSuccess()) {
        echo 'Succeeded!';
        exit();
    }

    // Failed
    echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
    exit();

}
