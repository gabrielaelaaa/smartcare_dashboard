<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if(!function_exists('get_hash')) {
    function get_hash($plainPassword) {
        $option = [
            'cost' => 5,
        ];
        return password_hash($plainPassword, PASSWORD_DEFAULT, $option);
    }
}

if(!function_exists('hash_verified')) {
    function hash_verified($plainPassword, $hashPassword) {
        return password_verify($plainPassword, $hashPassword) ? true : false;
    }
}