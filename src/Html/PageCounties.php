<?php

namespace App\Html;

use App\Html\AbstractPage;
class PageCounties extends AbstractPage
{
    static function list($entities)
    {
        self::table($entities);
    }
    static function tableHead()
    {
        include "countiesHeader.html";
    }


    // static function editor()
    // {
    //     echo '
    // szerkesztogombok';
    // }



    static function tableBody(array $entities)
    {
        echo '<tbody>';
        $i = 0;
        foreach ($entities as $entity) {
            $onClick = sprintf(
                'btnEditCountOClick($d, "$s")',
                $entity['id'],
                $entity['name']
            );

            // TODO: fix this


            //             echo "
//             <tr class='" . (++$i % 2 ? "odd" : "even") . "'>
//             <td>{$entity['id']}</td>
// <td>{$entity['name']}</td>
// <td class='flex float-right'>
//     <button type="button" id="btn-edit-county-{$entity['id']}" name="btn-edit-county" onclick="$onClick"
//         title="Módosít">Módosítás </button>
// </td>
// <form method="post" action="">
//     <button type="submit" id="btn-del-county-{$entity['id']}" name="btn-del-county" value="{$entity['id']}"
//         title="Töröl">
//         Törlés
//     </button>
// </form>"


        }
    }

    static function table(array $entities)
    {
        echo '<h1>Megyék</h1>';
        self::searchBar();
        echo '<table id="counties-table">';
        self::tableHead();
        self::tableBody($entities);
        echo "</table>";
    }


    static function searchBar()
    {
        echo 'serach serach search';
    }

    static function editor()
    {
        echo '
        <th>&nbsp;</th>
<th>
    <form name="county-editor" method="post" action="">
        <input type="hidden" id="id" name="id">
        <input type="search" id="name" name="name" placeholder="Megye" required>
        <button type="submit" id="btn-save-county" name="btn-save-county" title="Ment"></button>
        <!-- <button>cancel</button> -->
    </form>
</th>
        '
        ;
    }
}
