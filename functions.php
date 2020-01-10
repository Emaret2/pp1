<?php
function printArr($array) {
    foreach($array as $item){
        echo "$item <br>";
    }
}

function printAscArr($array) {
    foreach($array as $item => $value){
        echo "$item => $value<br>";
    }
}

function largest($array) {

        $largest = $array[0];
        foreach($array as $item){
            if($item > $largest){
                $largest = $item;
            }
        }
        return $largest;

}

function removeDups($array) {
    $newArray = [];
    foreach($array as $item){
        if(!array_search($item, $newArray)){

            array_push($newArray, $item);
        }
    }

    return $newArray;
}

function distribution($array) {
    sort($array);
    $newArray = [];
    foreach($array as $item){
        if(array_search($item, $newArray)){
            $newArray = array_merge($newArray, array($item => 1));
        } else {
            $number = $newArray[$item];
            $newArray[$item] = $number + 1;
        }
    }

    return $newArray;
}