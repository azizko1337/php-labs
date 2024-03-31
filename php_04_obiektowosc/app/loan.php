<?php

global $conf;
require_once dirname(__FILE__)."/../config.php";

require_once $conf->root_path."/app/LoanCtrl.class.php";

$ctrl = new LoanCtrl();
$ctrl->process();