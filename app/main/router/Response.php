<?php namespace router;

class Response {
    
    private $content;
    
    public static function create() {
        return new Response();
    }
    
    public function body($content = null) {
        if (!is_null($content)) {
            $this->content = $content;
        }
        return $this->content;
    }
}
