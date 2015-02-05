<?php namespace router;

use Exception;

class Route {
    
    private static $routes = [];
    
    public static function set($name, $uri, $defaults = NULL) {
        static::$routes[$name] = new Route($uri, $defaults);
    }
    
    public static function get($name) {
        if (!isset(static::$routes[$name])) {
            throw new Exception("The router '$name' does not exist");
        }
        return static::$routes[$name];
    }
    
    public function __construct($uri, $defaults = NULL) {
        $this->uri = $uri;
        $this->defaults = $defaults;
    }
    
}
