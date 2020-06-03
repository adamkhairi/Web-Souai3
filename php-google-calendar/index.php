<?php
require "../connexion.php";
$row = $_POST['ids'];
$mails = $_POST['emails'];
$sql = "SELECT e.message, e.theDate, e.hours, c.nomcours FROM theevanets e  INNER JOIN cours c ON e.coursID = c.idcours WHERE e.eventID = " . $row . "";
$run = mysqli_query($conn, $sql);
$arr = mysqli_fetch_assoc($run);

require_once __DIR__ . '/vendor/autoload.php';

session_start();

$client = new Google_Client();
$client->setAuthConfig('credentials.json');
$client->addScope(Google_Service_Calendar::CALENDAR);
//$client->setScopes(Google_Service_Calendar::CALENDAR);
$client->setAccessType('offline');
$client->setPrompt('select_account consent');

if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
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

//  if (count($results->getItems()) == 0) {
//    print "No upcoming events found.\n";
//  } else {
//    print "Upcoming events:\n";
//    foreach ($results->getItems() as $event) {
//      $start = $event->start->dateTime;
//      if (empty($start)) {
//        $start = $event->start->date;
//      }
//      printf("%s (%s)\n", $event->getSummary(), $start);
//    }
//  }

    $events = $results->getItems();
// Refer to the PHP quickstart on how to setup the environment:
// https://developers.google.com/calendar/quickstart/php
// Change the scope to Google_Service_Calendar::CALENDAR and delete any stored
// credentials.
    $event = new Google_Service_Calendar_Event(array(
        'summary' => $arr['nomcours'],
        'location' => 'At Home',
        'description' => $arr['message'],
        'start' => array(
            'dateTime' => $arr['theDate'] . 'T' . $arr['hours'] . ':00',
            'timeZone' => 'Africa/Casablanca',
        ),
        'end' => array(
            'dateTime' => $arr['theDate'] . 'T' . $arr['hours'] . ':00',
            'timeZone' => 'Africa/Casablanca',
        ),
        'recurrence' => array(
            'RULE:FREQ=DAILY;COUNT=1'
        ),
        'conferenceProperties' => array(
            'allowedConferenceSolutionTypes' => 'eventHangout'
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
    header('location: Teacher.php');


} else {
    $redirect_uri = 'http://' . $_SERVER['HTTP_HOST'] . '/php-google-calendar/oauth2callback.php';
    header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
}