<?php namespace controller;

class HelloController extends AbstractController {
    
    public function indexAction() {
        $this->response->body('<h2>executed Hello.index</h2>');
    }
    
    public function sayAction() {
        $this->response->body('<h2>What?</h2>');
    }

}
