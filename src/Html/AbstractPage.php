<?php
namespace App\HTML;

use App\Interfaces\PageInterface;

abstract class AbstractPage implements PageInterface
{
    static function head()
    {
        echo '<!DOCTYPE html>
        <html lang="hu">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Varosok</title>
        </head>';
    }
    static function nav()
    {
        echo '<nav>
            <form name="nav" method="post" action="index.php">
                <button type="submit" name="btn-counties">Megyék</button>
            </form>
        </nav>';
    }
    static function footer()
    {
        echo '<footer>
 
        </footer>
    </html>';
    }
    abstract static function tableHead();
    abstract static function tableBody(array $entyties);
    abstract static function table(array $entyties);
    // abstract static function editor();
}