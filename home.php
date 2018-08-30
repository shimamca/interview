<?php
// set post fields
/*$post = [
    'name' => 'shima',
    'email' => 'shimamca@gmail.com',
    'mobile'   => 123456789,
];
$ch = curl_init('http://hiteshrohilla.com/interviewtask/index.php?action=register');

$post = [
    'user_id' => 8,
	
];
$ch = curl_init('http://hiteshrohilla.com/interviewtask/index.php?action=getFirstKey');
$post = [
	'user_id' => 8,
    'key1' => 1010101111,
];
$ch = curl_init('http://hiteshrohilla.com/interviewtask/index.php?action=getSecondKey');
*/
$post = [
	'user_id' => 8,
    'xorVal' => 1110000100,
];
$ch = curl_init('http://hiteshrohilla.com/interviewtask/index.php?action=saveXor');


curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
$response = curl_exec($ch);
curl_close($ch);
var_dump($response);
?>