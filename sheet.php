<?php
require __DIR__ . '/vendor/autoload.php';

//Reading data from spreadsheet.

$client = new \Google_Client();
$client->setApplicationName('Google Sheets and PHP');
$client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
$client->setAccessType('offline');
$client->setAuthConfig(__DIR__ . '/credentials.json');

$service = new Google_Service_Sheets($client);

$spreadsheetId = "1qDy6SQdnobbAHUzrYa3xT-A1Xlvj-LwmUCuBFyDc5mU"; //It is present in your URL
$get_range = "Sheet!A1:D5";

$response = $service->spreadsheets_values->get($spreadsheetId, $get_range);
$values = $response->getValues();
?>

