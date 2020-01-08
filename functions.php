<?php
function printArr($array) {
    foreach($array as $item){
        echo "$item <br>";
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