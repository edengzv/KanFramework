<?php

//use an autoloader
require 'libs/Bootstrap.php';
require 'libs/Database.php';
require 'libs/Controller.php';
require 'libs/Session.php';
require 'libs/Model.php';
require 'libs/View.php';


//config file
require 'config/database.php';
require 'config/path.php';

$app = new Bootstrap();
