<?php
namespace App\Interfaces;

interface ClientInterface
{
    //createUrl
    //exec
    //

    function post($url, array $data = []);

    function get($url, array $query = []);
    function delete($url, $id);

    //id-t is meg kell adni, egy rekord módosítása
    // function put($url, array $data = []);
    function update($url, array $data = []);
}