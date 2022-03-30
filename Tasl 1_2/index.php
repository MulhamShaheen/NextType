<?php

function getItemsFromDate($date)
{
    $filename = __DIR__ . "/Tasl 1_2/data.json";
    $result = [];
    if (file_exists($filename))
        $data = json_decode (file_get_contents ($filename), true);

    foreach ($data as $item){
        if($item['created'] == $date)
            $result[] = $item;
    }


    return $result;
}

echo "<pre>";
print_r( getItemsFromDate("20.01.2020 10:00:00") );
echo "</pre>";

