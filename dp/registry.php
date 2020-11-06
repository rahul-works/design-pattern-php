<?php 
class Package {
    protected static $data = array();
    public static function set($key, $value) {
        self :: $data[$key] = $value;
    }
    public static function get($key) {
        return isset(self::$data[$key])? self::$data[$key]:null;
    }
    final public static function removeObject($key) {
        if(array_key_exists($key, self::$data)) {
            unset(self::$data[$key]);
        }
    }
}
Package::set('name', 'Package Name');
print_r(Package::get('name'));
// 'Package Name'

// php -> composer.phar (hypothetical)
// 
// node-module package.json -> nodejs npm install <package  name>
// npm install package.json