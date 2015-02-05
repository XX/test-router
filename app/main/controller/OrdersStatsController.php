<?php namespace controller;

class OrdersStatsController extends AbstractController {
    
    private $infos = [
        '1' => 'first',
        '2' => 'second',
    ];
    
    public function indexAction() {
        $this->response->body('<h2>executed OrdersStats.index</h2>');
    }
    
    public function infoAction() {
        $target = 'zero';
        if (isset($this->request->params['id'])) {
            $id = $this->request->params['id'];
            if (is_numeric($id) && $id > 0 && $id <= count($this->infos)) {
                $target = $this->infos[$id];
            }
        }
        $this->response->body('<h2>executed OrdersStats.info</h2><h2>' . $target . '</h2>');
    }

}
