<?php

namespace App\Html;

use App\Interfaces\PageInterface;

abstract class AbstractPage implements PageInterface
{ //azért abstract mert nem implementálunk mindent

    static function head()
    {
        // echo '<!DOCTYPE html>
        // <html lang="hu">

        // <head>
        //     <meta charset="UTF-8">
        //     <meta http-equiv="X-UA-Compatible" content="IE=edge">
        //     <meta name="viewport" content="width=device-width, initial-scale=1.0">
        //     <title>Irányítószámok kliens</title>
        // </head>';

        include("header.html");
    }

    static function nav()
    {
// echo '<!DOCTYPE html>
        // <html lang="hu">

        // <head>
        //     <meta charset="UTF-8">
        //     <meta http-equiv="X-UA-Compatible" content="IE=edge">
        //     <meta name="viewport" content="width=device-width, initial-scale=1.0">
        //     <title>Irányítószámok kliens</title>
        // </head>';

        include("header.html");
    }
    }

    static function footer()
    {
        echo 'megyék 
    vároeok <button>

    </button>';
    }

    abstract static function tableHead();

    abstract static function tableBody($entities);

    // abstract static function table($entities);

}