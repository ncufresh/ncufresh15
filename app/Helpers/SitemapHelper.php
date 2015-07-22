<?php

namespace App\Helpers;

class SitemapHelper {
    private static $locations = array();

    public static function push($name, $url) {
        array_push(self::$locations, ['name' => $name, 'url' => url($url)]);
    }

    public static function getLocations() {
        return self::$locations;
    }
}
