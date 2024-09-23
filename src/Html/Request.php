<?php

namespace App\Html;

// use App\Pdf\Pdf;
use App\Html\PageCounties;
use App\RestApiClient\Client;
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

class Request
{


    static function handle()
    {
        switch ($_SERVER["REQUEST_METHOD"]) {
            case "POST":
                self::postRequest();
                break;
            // case "PUT":
            //     self::putRequest();
            //     break;
            // case "HEAD":
            //     self::headRequest();

            //így getre és maradékra is get lesz
            case "GET":
            default:
                self::getRequest();
                break;
        }
    }

    private static function getRequest()
    {
        // $request = $_REQUEST; //mindkettő, put is és get is
        // if (isset($request['page'])) {
        //     $page = $request['page'];
        //     switch ($page) {
        //         case 'counties':
        PageCounties::table(self::getCounties());
        //             break;
        //         case 'cities':
        //             echo 'Cities';
        //             break;
        //     }
        // }
        //header("Refresg:0);
    }

    private static function getCounties()
    {

        $client = new Client();
        $response = $client->get('counties');

        return $response['data'];
    }


    private static function postRequest()
    {
        $request = $_REQUEST;
        switch ($request) {
            case isset($request['btn-home']):
                break;
            case isset($request['btn-counties']):
                PageCounties::table(self::getCounties());
                break;

            case isset($request['btn-save-county']):
                $client = new Client();
                if (!empty($request['id'])) {
                    $data['id'] = $request['id'];
                }
                if (isset($request['name'])) {
                    $data['name'] = $request['name'];
                }
                $client->post('counties/county', $data);
                PageCounties::table(self::getCounties());
                break;

            case isset($request['btn-del-county']):
                $client = new Client();
                // $response = $client->delete('counties', $request['btn-del-county']);
                PageCounties::table(self::getCounties());
                break;

            case isset($request['btn-search']):
                $client = new Client();
                $response = $client->post('counties/search', ['needle' => $request['needle']]);
                $entities = [];
                if (isset($response['data'])) {
                    $entities = $response['data'];
                }
                PageCounties::table($entities);
                break;
            case isset($request['btn-pdf']):
                // self::makeCountiesPdf('D', 'counties.pdf');
                break;
        }
    }


    // private static function makeCountiesPdf($)

}