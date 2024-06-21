<?php
// Handling form data in PHP
if (isset($_POST['get_distance'])) {

    // data commnig from index.php form
    $origin = $_POST['origin'];
    $destination = $_POST['destination'];

    // secret key for google distance matrix api
    $apiKey = 'YOUR_API_KEY'; // replace with your own api key
    $url = "https://maps.googleapis.com/maps/api/distancematrix/json?destinations=$destination&origins=$origin&key=$apiKey";

    $postData = array(
        'param1' => 'value1',
        'param2' => 'value2'
    );

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Authorization: Bearer ' . $apiKey,
        'Content-Type: application/x-www-form-urlencoded'
    ));

    $response = curl_exec($ch);

    // error handling 
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }

    curl_close($ch);
    $data = json_decode($response, true);

    // storing data in variables as per google api response
    $origin =  $data['destination_addresses'][0];
    $destination =  $data['origin_addresses'][0];
    $distance =  $data['rows'][0]['elements'][0]['distance']['text'];
   

    // passing data to index.php by url  query string 
    header("location:index.php?origin=$origin&destination=$destination&distance=$distance");

}
