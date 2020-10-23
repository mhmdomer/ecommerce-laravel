<?php

function productImage($path) {
    /*
    TODO reomve this in production, this is just for heroku demo app to work.
    */
    $found = file_exists('images/' . $path);
    if($found) {
        return asset('images/' . $path);
    }
    // TODO leave this line in production.
    return $path && file_exists('storage/' . $path) ? asset('storage/' . $path) : asset('images/not-found.jpg');
}

function format($price) {
    return number_format($price, 2);
}

function str_limit($string, $limit) {
    return strlen($string) > $limit ? substr($string, 0, $limit) . ' ...' : $string;
}

function getStockLevel($quantity) {
    if($quantity > setting('site.stock_threshold')) {
        return 'In Stock';
    } else if($quantity <= setting('site.stock_threshold') && $quantity > 0) {
        return 'Low Stock';
    } else {
        return 'Out Of Stock';
    }
}
