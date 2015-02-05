<?php namespace controller;

class UsersController extends AbstractController {
    
    public function indexAction() {
        $this->response->body('<h2>executed Users.index</h2>');
    }
    
    public function editAction() {
        $user = 'unknown';
        if (isset($this->request->params['id'])) {
            $user = $this->request->params['id'];
        }
        $this->response->body('<h2>executed Users.edit</h2><h2>edit: ' . $user . '</h2>');
    }
    
}
