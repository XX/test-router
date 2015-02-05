<?php

use router\Request;

class Application {
    
    public function run() {
        echo Request::create()
                ->execute()
                ->body();
    }
    
}
