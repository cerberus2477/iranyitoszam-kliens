<?php

namespace App\Html;

class PageCounties implements PageInterface{





static function head(){
echo '
<!doctype html>
....';
}

static function nav(){
echo 'megyék 
vároeok <button>

</button>';
}

static function footer(){
    echo 'megyék 
vároeok <button>

</button>';
}

abstract static function tableHead();

abstract static function tablebody();

abstract static function table();

AbstractPage

tablehead<?php
tablebody

searchbar

<table>

</table>

pdfbutton

}