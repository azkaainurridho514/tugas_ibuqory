<?php

function currency_conversion($number){ 
    $result =  number_format($number,0, ',' , '.'); 
    return $result; 
}