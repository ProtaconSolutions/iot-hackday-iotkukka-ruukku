<?php
require_once 'firebaseLib.php';
// --- This is your Firebase URL
$url = 'https://iotkukka.firebaseio.com/';
// --- Use your token from Firebase here
$token = '3udTM40xOkdEhpJcrYb6nZlCNUl9qjTQX00kp3e0';
// --- Here is your parameter from the http GET
$arduino_data = array(
    'humidity' => $_GET['humidity'],
    'timestamp' => time(),
);
// --- $arduino_data_post = $_POST['name'];
// --- Set up your Firebase url structure here
$firebasePath = '/humidity';
/// --- Making calls
$fb = new fireBase($url, $token);
$response = $fb->push($firebasePath, $arduino_data);
sleep(2);