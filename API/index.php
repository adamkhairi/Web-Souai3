<?php
// require_once __DIR__.'./vendor/autoload.php';
// require ('vendor\autoload.php');
require_once './vendor/autoload.php';

session_start();

$client = new Google_Client();
$client->setAuthConfig('./client_id.json');
$client->addScope(Google_Service_Calendar::CALENDAR);

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

  // if (count($results->getItems()) == 0) {
  //   print "No upcoming events found.\n";
  // } else {
  //   print "Upcoming events:\n";
  //   foreach ($results->getItems() as $event) {
  //     $start = $event->start->dateTime;
  //     if (empty($start)) {
  //       $start = $event->start->date;
  //     }
  //     printf("%s (%s)\n", $event->getSummary(), $start);
  //   }
  // }

  
  $events = $results->getItems();
  // Refer to the PHP quickstart on how to setup the environment:
  // https://developers.google.com/calendar/quickstart/php
  // Change the scope to Google_Service_Calendar::CALENDAR and delete any stored
  // credentials.
// Refer to the PHP quickstart on how to setup the environment:
// https://developers.google.com/calendar/quickstart/php
// Change the scope to Google_Service_Calendar::CALENDAR and delete any stored
// credentials.

$event = new Google_Service_Calendar_Event(array(
  'summary' => 'Google I/O 2015',
  'location' => '800 Howard St., San Francisco, CA 94103',
  'description' => 'A chance to hear more about Google\'s developer products.',
  'start' => array(
    'dateTime' => '2020-06-15T09:00:00-07:00',
    'timeZone' => 'America/Los_Angeles',
  ),
  'end' => array(
    'dateTime' => '2020-06-15T17:00:00-07:00',
    'timeZone' => 'America/Los_Angeles',
  ),
  'recurrence' => array(
    'RRULE:FREQ=DAILY;COUNT=1'
  ),
  'attendees' => array(
    array('email' => 'lpage@example.com'),
    array('email' => 'sbrin@example.com'),
  ),
  'reminders' => array(
    'useDefault' => FALSE,
    'overrides' => array(
      array('method' => 'email', 'minutes' => 24 * 60),
      array('method' => 'popup', 'minutes' => 10),
    ),
  ),
));

$calendarId = 'primary';
$event = $service->events->insert($calendarId, $event);
printf('Event created: %s\n', $event->htmlLink);


} else {
  $redirect_uri = 'http://localhost/php-google-calendar/oauth2callback.php';
  header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
}