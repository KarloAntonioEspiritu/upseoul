<?php
require __DIR__ . '/vendor/autoload.php';

//Reading data from spreadsheet.

$client = new \Google_Client();
$client->setApplicationName('Google Sheets and PHP');
$client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
$client->setAccessType('offline');
$client->setAuthConfig(__DIR__ . '/credentials.json');

$service = new Google_Service_Sheets($client);

$spreadsheetId = "1fLf_YO1P-oIRiEYk3qHk_3_8lBFW2ZqOhPZTTTDHUO0"; //It is present in your URL
$range = "Sheet1";
// $get_range = "Sheet!A1:D5";

$params = [
	'valueInputOption' => 'RAW'
];

$insert = [
	'insertDataOptions' => 'INSERT_ROWS'
];

$values = [
	['testing' , 'yowyowyow'],
];

$body = new Google_Service_Sheets_ValueRange([
	'values' => $values
]);

$result = $service->spreadsheets_values->append(
	$spreadsheetId, 
	$range,
	$body,
	$params 
);

if($result->updates->updateRows == 1){
	echo "Success";
}
else{
	echo "Fail";
}

// $response = $service->spreadsheets_values->get($spreadsheetId, $get_range);
// $values = $response->getValues();
?>

