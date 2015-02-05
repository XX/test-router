<?php namespace router;

class Request {
    
    public static function create() {
        return new Request();
    }
    
    public function execute() {
        echo 'Hello from request!';
    }
    
}
