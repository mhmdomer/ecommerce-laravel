<?php

function productImage($path) {
    return $path && file_exists('storage/' . $path) ? asset('storage/' . $path) : asset('images/not-found.jpg');
}

function format($price) {
    return number_format($price, 2);
}