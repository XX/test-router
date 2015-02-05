<?php namespace controller;

class HelloController extends AbstractController {
    
    public function indexAction() {
        $this->response->body('<h2>executed Hello.index</h2>');
    }
    
    public function sayAction() {
        $target = 'What?';
        if (isset($this->request->params['id'])) {
            $target = '<h2>' . $this->request->params['id'] . '</h2>';
        }
        $this->response->body('<h2>executed Hello.index</h2><h2>' . $target . '</h2>');
    }

}
