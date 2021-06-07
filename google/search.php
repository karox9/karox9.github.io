<?php
$miasta = file_get_contents("./cities.json"); #funkcja file_get_contents - zapisanie zawarto�ci pliku do zmiennej

if ($miasta == false)
{
    die('B��d otwarcia pliku');
}

$miastaJSON = json_decode($miasta, true); #funkcja json_decode - dekodowanie formatu JSON do postaci array() PHP

if($miastaJSON == null)
{
    die('B��d dekodowania');
}

$tablica = [];

foreach($miastaJSON as $value)
{
    if(stripos($value['name'], $_GET['name']) === False) #funkcja strpos - sprawdzenie wyst�pienia oraz pozycji tekstu w tek�cie (stringa w stringu)
    {
        continue;
    }

    if(count($tablica) === 10)
    {
        break;
    }
    $tablica[] = $value;
}

echo json_encode($tablica); #ekodowanie array PHP do postaci stringu zgodnego z formatem JSON
?>