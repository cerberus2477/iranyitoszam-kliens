<?php
include './vendor/autoload.php';

use App\Html\AbstractPage;
use App\Html\PageCounties;
use App\Html\Request;

PageCounties::head();
PageCounties::nav();
// Request::handle();
PageCounties::footer();


// "files": [
//     "tfpdf/tfpdf.php"
// ]



// AbstractPage
// abstract static function tableHead();

// abstract static function tableBody(array $entities);

// abstract static function table(array $entities);

//editor
//searchbar