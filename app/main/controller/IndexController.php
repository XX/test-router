<?php namespace controller;

class IndexController extends AbstractController {
    
    public function indexAction() {
        $this->response->body('<h2>Visit the following links</h2>'
                . '<a href="http://localhost:8800/hello">http://localhost:8800/hello</a><br />'
                . '<a href="http://localhost:8800/hello/say">http://localhost:8800/hello/say</a><br />'
                . '<a href="http://localhost:8800/hello/say/anonymous">http://localhost:8800/hello/say/anonymous</a><br />'
                . '<a href="http://localhost:8800/users:edit/12">http://localhost:8800/users:edit/12</a><br />'
                . '<a href="http://localhost:8800/orders_stats.info.1">http://localhost:8800/orders_stats.info.1</a><br />'
                . '<a href="http://localhost:8800/orders_stats.update.1?status=new">http://localhost:8800/orders_stats.update.1?status=new</a><br />'
                . '<a href="http://localhost:8800/orders_stats.info.1">http://localhost:8800/orders_stats.info.1</a><br />');
    }

}
