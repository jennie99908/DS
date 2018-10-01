<?php

// Change the working directory to this file.
chdir(__DIR__);
set_include_path (__DIR__);

if ($_SERVER['REQUEST_METHOD'] == 'POST'
&& stripos ($SERVER['CONTENT_TYPE'], 'application/json') !== fasle ) {
  $_Post = json_decode(file_get_contents('php://input'),true);
}
  require 'environment.php';

/** MODELS **/
require 'models/Work.php';
require 'models/Team.php';
