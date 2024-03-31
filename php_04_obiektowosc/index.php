<?php
global $conf;
require_once dirname(__FILE__)."/config.php";

header("Location: ".$conf->app_url."/app/loan.php");
exit();
