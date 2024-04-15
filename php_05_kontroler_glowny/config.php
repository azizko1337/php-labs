<?php

require_once dirname(__FILE__)."/Config.class.php";
$conf = new Config();

$conf->root_path = dirname(__FILE__);
$conf->server_name = "localhost:80";
$conf->server_url = "http://".$conf->server_name;
$conf->app_root = "/php_05_kontroler_glowny";
$conf->app_url = $conf->server_url . $conf->app_root;
$conf->action_root = $conf->app_root."/app/ctrl.php?action=";
$conf->action_url = $conf->server_url.$conf->action_root;