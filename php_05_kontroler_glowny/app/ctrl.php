<?php
global $conf;
require_once dirname(__FILE__)."/../config.php";

$action = $_REQUEST["action"] ?? null;

switch($action){
    default:
        include_once $conf->root_path."/app/loan/LoanCtrl.class.php";
        $ctrl = new LoanCtrl();
        $ctrl->generateView();
        break;
    case "loanCompute":
        include_once $conf->root_path."/app/loan/LoanCtrl.class.php";
        $ctrl = new LoanCtrl();
        $ctrl->process();
        break;
}