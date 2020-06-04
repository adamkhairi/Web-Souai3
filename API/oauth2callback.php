<?php
require_once __DIR__.'/vendor/autoload.php';

session_start();

// $_SESSION['mail'] = $_SESSION['mail'];
// print_r($_GET['id']);
// die();

// $id = $_GET['id'];

// $_SESSION['id'] = $id;


$client = new Google_Client();
$client->setAuthConfigFile('client_id.json');
$client->setRedirectUri('http://localhost/Web-Souai3/API/oauth2callback.php');
$client->addScope(Google_Service_Calendar::CALENDAR);

if (!isset($_GET['code'])) {
  $auth_url = $client->createAuthUrl();
  header('Location: ' . filter_var($auth_url, FILTER_SANITIZE_URL));
} else {  
  $client->authenticate($_GET['code']);
  $_SESSION['access_token'] = $client->getAccessToken();
  $redirect_uri = 'http://localhost/Web-Souai3/API/index.php';
  header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
}