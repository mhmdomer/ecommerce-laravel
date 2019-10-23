<?php

function productImage($path) {
    return $path && file_exists('storage/' . $path) ? asset('storage/' . $path) : asset('images/not-found.jpg');
}

function format($price) {
    return number_format($price, 2);
}

function str_limit($string, $limit) {
    return strlen($string) > $limit ? substr($string, 0, $limit) . ' ...' : $string;
}