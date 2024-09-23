<?php

namespace App\RestApiClient;

use App\Interfaces\ClientInterface;
// use Exception;

class Client implements ClientInterface
{
    const API_URL = 'https://localhost:8000/';

    protected $url;

    function __construct($url = self::API_URL)
    {
        $this->url = $url;
    }

    public function getUrl()
    {
        return $this->url;
    }

    // public function createUrl

    function get($route, array $query = "")
    {
        $url = $this->getUrl() . $route;
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        $response = curl_exec($curl); //ezzel hívjuk meg a rest-api végpontját

        if (!$response) {
            trigger_error(curl_error($curl));
        }
        curl_close($curl);

        return json_decode($response, true);

    }

    function post($url, array $data = [])
    {
        $json = json_encode($data);
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($curl, CURLOPT_URL, $this->url . $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, ['Content-Type: application/json', 'Contet-Length: ' . strlen($json)]);
        curl_setopt($curl, CURLOPT_POST, TRUE);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $json);
        $response = curl_exec($curl); //ezzel hívjuk meg a rest-api végpontját

        if (!$response) {
            trigger_error(curl_error($curl));
        }
        curl_close($curl);

        return json_decode($response, true);
    }






    //TODO: implement xd
    function delete($url, $id)
    {

    }

    function put($url, array $data = [])
    {

    }

    function update($url, array $data = [])
    {

    }

}