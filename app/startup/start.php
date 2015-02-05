<?php

use router\Route;

Route::set('default', '(<controller>(/<action>(/<id>)))', [
    'controller' => 'Index',
    'action' => 'index'
]);
//Route::set('test', 't/t/t');

$app = new Application();

return $app;