<?php namespace router;

use router\Route;
use router\Response;

class Request {
    
    public static function create($uri = null) {
        if (empty($uri)) {
            $uri = static::getCurrentUri();
        }
        return new Request($uri);
    }
    
    public static function getCurrentUri() {
        if (!empty($_SERVER['PATH_INFO'])) {
            $uri = $_SERVER['PATH_INFO'];
        } else if (isset($_SERVER['REQUEST_URI'])) {
            $uri = rawurldecode(
                    parse_url(
                            $_SERVER['REQUEST_URI'],
                            PHP_URL_PATH
                    ));
        }
        return $uri;
    }

    private $uri;
    
    public function __construct($uri) {
        $this->uri = trim($uri, '/');
    }

    public function execute() {
        $params = null;
        $route = null;
        $routes = Route::allRoutes();
        
        foreach ($routes as $name => $route) {
            if ($params = $route->match($this->uri)) {
                break;
            }
        }
//        var_dump($params);
        if ($params) {
            $this->params = $params;
            $class = new \ReflectionClass('controller\\' . $params['controller'] . 'Controller');
            $response = Response::create();
            $controller = $class->newInstance($this, $response);
            $class->getMethod($params['action'] . 'Action')->invoke($controller);
            
            return $response;
        } else {
            return null;
        }
    }
    
}
