<?php

// example: https://github.com/onlinetuts/line-bot-api/blob/master/php/example/chapter-01.php

include ('line-bot-api/php/line-bot.php');

$channelSecret = 'fdd3e65ab71056263a56b6fe3edb3b51';
$access_token  = '9zbW0SvzAKBG49EaSu5o16HsL/4wmWsXTv/jXd/Z8HDjs/Ox1l2forTeK7Y9FdukraX7n30uJ/mVDxxX9wglJVorxa3UgSiPE93f5Q1UbEZHBYl6gNrwRlLfFhh2DXjyGLeNK54IJXhvgK67uLXe4wdB04t89/1O/w1cDnyilFU=';

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