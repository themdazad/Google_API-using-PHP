<?php

echo "hello";
// Handling form data in PHP
if (isset($_POST['get_distance'])) {

    $origin = $_POST['origin'];
    $destination = $_POST['destination'];
    echo "Origin: " . $origin . "<br>";


    
// $apiKey = 'AIzaSyCiNbEvScJ98juCvC1Lwcjlm1uhrVFuoVw';

// $url = "https://maps.googleapis.com/maps/api/distancematrix/json?destinations=$destination&origins=$origin&key=$apiKey";

// $postData = array(
//     'param1' => 'value1',
//     'param2' => 'value2'
// );

// $ch = curl_init();

// curl_setopt($ch, CURLOPT_URL, $url);
// curl_setopt($ch, CURLOPT_POST, true);
// curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch, CURLOPT_HTTPHEADER, array(
//     'Authorization: Bearer ' . $apiKey,
//     'Content-Type: application/x-www-form-urlencoded'
// ));

// $response = curl_exec($ch);

// if (curl_errno($ch)) {
//     echo 'Error:' . curl_error($ch);
// }

// curl_close($ch);

// echo "<pre>";
// $data = json_decode($response, true);


// destination address
// print_r("From: " . $data['destination_addresses'][0]);
// echo "<br>";
// print_r("To: " . $data['origin_addresses'][0]);
// echo "<br>";
// print_r("Distance: " . $data['rows'][0]['elements'][0]['distance']['text']);
    
}




?>
