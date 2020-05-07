<?php
/**
 * Created by PhpStorm.
 * User: lmc
 * Date: 2020-05-07
 * Time: 15:19
 */
require 'geoip2.phar';
try {
    $reader = new GeoIp2\Database\Reader(__DIR__.'/GeoLite2-City.mmdb');
    $record = $reader->city('31.4.243.119');
    print_r($record);
} catch (Exception $e) {
    echo 'Could not open Phar: ', $e;
}