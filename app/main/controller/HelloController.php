<?php namespace controller;

class HelloController extends AbstractController {
    
    public function indexAction() {
        $this->response->body('<h2>executed Hello.index</h2>');
    }
    
    public function sayAction() {
        $target = 'What?';
        if (isset($this->request->params['id'])) {
            $target = $this->request->params['id'];
        }
        $this->response->body('<h2>executed Hello.say</h2><h2>' . $target . '</h2>');
    }

}
