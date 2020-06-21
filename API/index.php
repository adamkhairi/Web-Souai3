<?php
require "../connexion.php";
session_start();
if (isset($_SESSION['mails']) && isset($_SESSION['id'])) {
    $mails = $_SESSION['mails'];
    $sql = "SELECT e.message, e.theDate, e.hours, c.nomcours FROM theevanets e  INNER JOIN cours c ON e.coursID = c.idcours WHERE e.eventID = " . $_SESSION['id'] . "";
    $run = mysqli_query($conn, $sql);
    $arr = mysqli_fetch_assoc($run);
} else {
    $mails = $_GET['mail'];
    $id = $_GET['id'];
    print_r($mails);
    die();
    $sql = "SELECT e.message, e.theDate, e.hours, c.nomcours FROM theevanets e  INNER JOIN cours c ON e.coursID = c.idcours WHERE e.eventID = " . $id . "";
    $run = mysqli_query($conn, $sql);
    $arr = mysqli_fetch_assoc($run);
}
require_once './vendor/autoload.php';
$client = new Google_Client();
$client->setAuthConfig('./client_id.json');
$client->addScope(Google_Service_Calendar::CALENDAR);

if (isset($_SESSION['access_token'])) {
    $client->setAccessToken($_SESSION['access_token']);

    // Print the next 10 events on the user's calendar.
    $calendarId = 'primary';
    $optParams = array(
        'maxResults' => 10,
        'orderBy' => 'startTime',
        'singleEvents' => TRUE,
        'timeMin' => date('c'),
    );

    $service = new Google_Service_Calendar($client);
    $results = $service->events->listEvents($calendarId, $optParams);
    $events = $results->getItems();
    $event = new Google_Service_Calendar_Event(array(
        'summary' => $arr['nomcours'],
        'location' => 'At Home',
        'description' => $arr['message'],
        'start' => array(
            'dateTime' => $arr['theDate'] . 'T' . $arr['hours'] . ':00-00:00',
            'timeZone' => 'Africa/Casablanca',
        ),
        'end' => array(
            'dateTime' => $arr['theDate'] . 'T' . $arr['hours'] . ':00-01:00',
            'timeZone' => 'Africa/Casablanca',
        ),
        'recurrence' => array(
            'RRULE:FREQ=DAILY;COUNT=1'
        ),
        'reminders' => array(
            'useDefault' => FALSE,
            'overrides' => array(
                array('method' => 'email', 'minutes' => 24 * 60),
                array('method' => 'popup', 'minutes' => 10),
            ),
        ),
    ));
    $PrepaireArray = [];
    foreach ($mails as $mail) {

        $PrepaireArray[]['email'] = $mail;
    }
    $event['attendees'] = $PrepaireArray;

    $calendarId = 'primary';
    $event = $service->events->insert($calendarId, $event);

    // foreach ($mails as $mail) {
    //     $to_email = $mail;
    //     $subject = "Invitation Sway3";
    //     $body = "Bonjour,\n 
    //       Cour: " . $arr['nomcours'] . "\n
    //       La date: " . $arr['theDate'] . " à " . $arr['hours'] . " \n
    //       Vous trouverez ci-joint le lien de la séance sur google meet: " . $event->htmlLink . "
    //       \n Cordialement";
    //     $headers = "From: soutiensway3@gmail.com";
    //     mail($to_email, $subject, $body, $headers);
    // }
    header('location: ../Teacher.php?msg=mailSend');


} else {
    $_SESSION['id'] = $_GET['id'];
    $_SESSION['mails'] = $_GET['mail'];

    $redirect_uri = 'http://localhost/Web-Souai3/API/oauth2callback.php';
    header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));


}