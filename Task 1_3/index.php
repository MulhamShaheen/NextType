<?php


$array = [
    [
        'sort' => '10',
        'name' => 'Adam'
    ],
    [
        'sort' => '300',
        'name' => 'Jane'
    ],
    [
        'sort' => '20',
        'name' => 'Mike'
    ],
    [
        'sort' => '10',
        'name' => 'Adam'
    ],
    [
        'sort' => '40',
        'name' => 'Stive'
    ],
    [
        'sort' => '300',
        'name' => 'Jane'
    ],
];

function myBubbleSort(&$array){

    for($i = 0; $i < sizeof($array) - 1; $i++ ){
        for($j = $i; $j >= 0; $j-- ){
            if($array[$j]['sort'] > $array[$j+1]['sort']){
                $temp = $array[$j];
                $array[$j] = $array[$j+1];
                $array[$j+1] = $temp;
            }
        }
    }

}

myBubbleSort($array);

