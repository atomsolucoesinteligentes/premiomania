<?php

require_once(dirname(dirname(__FILE__)) . "/vendor/autoload.php");

use Odin\utils\Config;
use Odin\routes\Routes;

Config::init("premiomania/src");
Routes::init();

Routes::viewsFolder(Config::get("path_views"));
Routes::setHF("header.php", "footer.php");

Routes::get("/", "App\http\controllers\Login:form")->name("login");

Routes::run();
