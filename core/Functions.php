<?php
$current_url = sprintf(
    '%s://%s/%s',
    isset($_SERVER['HTTPS']) ? 'https' : 'http',
    $_SERVER['HTTP_HOST'],
    $_SERVER['REQUEST_URI']
);

function current_url() {
    $current_url = sprintf(
        '%s://%s/%s',
        isset($_SERVER['HTTPS']) ? 'https' : 'http',
        $_SERVER['HTTP_HOST'],
        $_SERVER['REQUEST_URI']
    );
    return $current_url;

}

function formatDate($data){
    return   strftime("%d/%m/%Y",strtotime($data));
}
function format_price($priceFloat) {

    $symbol_thousand = ',';
    $decimal_place = 0;
    $price = number_format($priceFloat, $decimal_place, '', $symbol_thousand);
    return $price;
 }
 function getParamFromUrl($url, $paramName){
    parse_str(parse_url($url, PHP_URL_QUERY), $op); // Fetch query parameters from a string and convert to an associative array
    return array_key_exists($paramName, $op) ? $op[$paramName] : "Not Found"; // Check if the key exists in this array
  }
// sendMail('lop7cttnq@gmail.com','minh','title','testemail');
