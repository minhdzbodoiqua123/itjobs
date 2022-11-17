<?php
function formatDate($data){
    return   strftime("%d/%m/%Y",strtotime($data));
}
function format_price($priceFloat) {

    $symbol_thousand = '.';
    $decimal_place = 0;
    $price = number_format($priceFloat, $decimal_place, '', $symbol_thousand);
    return $price;
 }
// sendMail('lop7cttnq@gmail.com','minh','title','testemail');
