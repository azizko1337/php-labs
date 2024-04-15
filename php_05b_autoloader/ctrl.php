<?php
require_once "init.php";

use app\controllers\LoanCtrl;

switch($action){
    default:
        $ctrl = new LoanCtrl();
        $ctrl->generateView();
        break;
    case "loanCompute":
        $ctrl = new LoanCtrl();
        $ctrl->process();
        break;
}