<?php namespace controller;

class HelloController extends AbstractController {
    
    public function indexAction() {
        $this->response->body('executed Hello.index');
    }

}
