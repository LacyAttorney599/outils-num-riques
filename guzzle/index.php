<?php
    require('vendor/autoload.php');

    $client = new \GuzzleHttp\Client();
    $response = $client->request('GET', 'https://api.github.com/repos/guzzle/guzzle%27');



    $response = $response->getBody();
    $responseAsArray = json_decode($response);

    var_dump($responseAsArray);

?>