<?php

namespace App\Html;

use App\Html\AbstractPage;
class PageCounties implements AbstractPage
{

    static function editor()
    {
        echo '
    szerkesztogombok';
    }

    static function tableHead()
    {
        echo 'Megnevezés
        rejtett szerkesztőfelület';
    }

    static function table()
    {
        echo 'table kitevése';
    }

    static function tableBody(array $entities)
    {
        echo 'loopin throug shit';
    }

    static function list($entities)
    {
        echo 'table kitevése';
    }

}
