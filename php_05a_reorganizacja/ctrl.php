<?php
require_once "init.php";

$action = $_REQUEST["action"] ?? null;

switch($action){
    default:
        include_once "app/controllers/LoanCtrl.class.php";
        $ctrl = new LoanCtrl();
        $ctrl->generateView();
        break;
    case "loanCompute":
        include_once "app/controllers/LoanCtrl.class.php";
        $ctrl = new LoanCtrl();
        $ctrl->process();
        break;
}