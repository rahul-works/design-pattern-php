<?php

final class Product {
    private static $instance;
    public $mix;

    public static function getInstance() {
        if (!self::$instance instanceof self) {
            self :: $instance = new Self();
        }
        return self :: $instance;
    }

    private function __construct() {

    }

    private function __clone() {

    }
}

$firstProduct = Product :: getInstance();
$secondProduct = Product :: getInstance();

$firstProduct->mix = 'test';
$secondProduct->mix = 'example';

print_r($firstProduct->mix);
print_r($secondProduct->mix);