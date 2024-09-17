<?php

namespace App\Interfaces;

interface PageInterface
{
    static function head();
    static function nav();
    static function footer();

    static function tableHead();

    static function tableBody(array $entities); //csak azért hogy átadja a tablenek

    static function table(array $entities);

    //searchbar
}