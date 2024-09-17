<?php

namespace App\Interfaces;

interface PageInterface
{
    static function head();
    static function nav();
    static function footer();

}