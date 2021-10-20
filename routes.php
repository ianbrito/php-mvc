<?php

use App\Controllers\HomeController;
use Core\Route\Router;



Router::add('/', (new HomeController)->index());
