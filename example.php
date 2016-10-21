<?php

require_once 'google-api-php-client/src/apiClient.php';
require_once 'google-api-php-client/src/contrib/apiBigqueryService.php';

session_start();

$client = new apiClient();
// Visit https://developers.google.com/console to generate your
// oauth2_client_id, oauth2_client_secret, and to register your oauth2_redirect_uri.

$client->setClientId('cloud-assignment-nola.apps.googleusercontent.com');
$client->setClientSecret('XXXXXXXXXXXXXXXXXXX');
$client->setRedirectUri('http://www_your_domain.com/somescript.php');

// Your project id
$project_id = 'XXXXXXXXXXXXXXXXXXXX';

// Instantiate a new BigQuery Client 
$bigqueryService = new apiBigqueryService($client);

if (isset($_REQUEST['logout'])) {
  unset($_SESSION['access_token']);
}

if (isset($_SESSION['access_token'])) {
  $client->setAccessToken($_SESSION['access_token']);
} else {
  $client->setAccessToken($client->authenticate());
  $_SESSION['access_token'] = $client->getAccessToken();
}

if (isset($_GET['code'])) {
  $redirect = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
  header('Location: ' . filter_var($redirect, FILTER_SANITIZE_URL));
}
?>
<!doctype html>
<html>
<head>
  <title>BigQuery API Sample</title>
</head>
<body>
<div id='container'>
  <div id='top'><h1>BigQuery API Sample</h1></div>
  <div id='main'>
<?php
  $query = new QueryRequest();
  $query->setQuery('SELECT TOP( title, 10) as title, COUNT(*) as revision_count FROM [publicdata:samples.wikipedia] WHERE wp_namespace = 0;');

  $jobs = $bigqueryService->jobs;
  $response = $jobs->query($project_id, $query);

  // Do something with the BigQuery API $response data
  print_r($response);

?>
  </div>
</div>
</body>
</html>