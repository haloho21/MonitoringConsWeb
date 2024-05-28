<?php

function percentage($number){
    $percentage = round((float)$number * 100) . '%';
    return $percentage;
}