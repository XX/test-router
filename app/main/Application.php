<?php

use router\Request;

class Application {
    
    public function run() {
        Request::create()
                ->execute();/*
                ->send_headers()
                ->body();*/
    }
    
}
