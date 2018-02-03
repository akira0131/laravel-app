<?php

require_once dirname(__FILE__) . '/config.php';
require_once BASE_DIR . '/../autoload.php';

$objUserModel = new MyApp\model\UserModel;
var_dump($objUserModel);
