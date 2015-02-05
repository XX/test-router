<?php

use router\Route;

Route::set('default', '<controller>(/<action>(/<id>))');
//Route::set('test', 't/t/t');

$app = new Application();

return $app;