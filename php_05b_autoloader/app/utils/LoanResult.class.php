<?php
namespace app\utils;

class LoanResult{
    public $monthlyInstallment;

    public function getPretty(): float
    {
        return round($this->monthlyInstallment, 2);
    }
}