<?php namespace controller;

abstract class AbstractController {
    
    protected $request;
    protected $response;
    
    public function __construct($request, $response) {
        $this->request = $request;
        $this->response = $response;
    }
    
}
