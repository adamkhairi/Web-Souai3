<?php
require_once __DIR__ . '/vendor/autoload.php';

session_start();

$client = new Google_Client();
$client->setAuthConfigFile('credentials.json');
$client->setRedirectUri('http://' . $_SERVER['HTTP_HOST'] . '/oauth2callback.php');
//$client->addScope(Google_Service_Calendar::CALENDAR);
$client->setScopes(Google_Service_Calendar::CALENDAR);
$client->setAccessType('offline');
$client->setPrompt('select_account consent');

if (!isset($_GET['code'])) {
    $auth_url = $client->createAuthUrl();
    header('Location: ' . filter_var($auth_url, FILTER_SANITIZE_URL));
} else {
    $client->authenticate($_GET['code']);
    $_SESSION['access_token'] = $client->getAccessToken();
//  $redirect_uri = 'http://' . $_SERVER['HTTP_HOST'] . '/';
    $redirect_uri = 'http://facebook.com/';
    header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
}