<?php

$API_KEY ="[API KEY AQUI]";
$url = 'https://fcm.googleapis.com/fcm/send';
$notification = [
	'title' => 'Title',
	'body' => 'body of the notification',
];
$fields = array (
	"to" =>
	'[DESTINATION]',
	'notification'=> $notification,
	'data'=> $notification,
	'vibrate'=>'1',
	'sound'=>'default',
);
$fields = json_encode($fields);
$headers = array(
	'Authorization: key=' . $API_KEY,
	'Content-Type: application/json'
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
$result = curl_exec($ch);
curl_close($ch);
echo $result;
?>