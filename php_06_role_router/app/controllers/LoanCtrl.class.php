<?php
namespace app\controllers;

use app\forms\LoanForm;
use app\utils\LoanResult;

class LoanCtrl{
    private $form;
    private $result;

    public function __construct(){
        $this->form = new LoanForm();
        $this->result = new LoanResult();
    }

    public function getParams(){
        $this->form->amount = getFromRequest("amount");
        $this->form->years = getFromRequest("years");
        $this->form->percentage = getFromRequest("percentage");
    }

    public function validate(): bool{
        if(!isset($this->form->amount) || !isset($this->form->years) || !isset($this->form->percentage)){
            return false;
        }

        if(empty($this->form->amount)){
            getMessages()->addError("Nie podano wysokości kredytu.");
        }
        if(empty($this->form->years)){
            getMessages()->addError("Nie podano długości kredytu.");
        }
        if(empty($this->form->percentage)){
            getMessages()->addError("Nie podano oprocentowania kredytu.");
        }

        if(getMessages()->hasErrors()) return false;

        if(!is_numeric($this->form->amount)){
            getMessages()->addError("Wysokość kredytu nie jest liczbą.");
        }
        if(!is_numeric($this->form->years)){
            getMessages()->addError("Długość kredytu nie jest liczbą.");
        }
        if(!is_numeric($this->form->percentage)){
            getMessages()->addError("Oprocentowanie kredytu nie jest liczbą.");
        }

        if(getMessages()->hasErrors()) return false;

        if(floatval($this->form->amount) <= 0){
            getMessages()->addError("Wysokość kredytu musi być większa od 0.");
        }
        if(floatval($this->form->years) <= 0){
            getMessages()->addError("Długość kredytu musi być większa od 0.");
        }
        if(floatval($this->form->percentage) <= 0){
            getMessages()->addError("Oprocentowanie kredytu musi być większa od 0.");
        }

        return !getMessages()->hasErrors();
    }

    public function loanCompute(){
        $this->getParams();

        if($this->validate()){
            $this->form->amount = floatval($this->form->amount);
            $this->form->years = floatval($this->form->years);
            $this->form->percentage = floatval($this->form->percentage);
            getMessages()->addInfo("Parametry poprawne.");

            if($this->form->amount > 100000 && !inRole("admin")){
                getMessages()->addError("Kredyty powyżej 100000 może obsługiwać tylko admin.");
            }else{
                $this->result->monthlyInstallment = ($this->form->amount + $this->form->amount * $this->form->percentage / 100) / $this->form->years / 12;
                getMessages()->addInfo("Wykonano obliczenia.");
            }
        }

        $this->loanShow();
    }

    public function loanShow(){
        getSmarty()->assign('page_title', 'Kalkulator kredytowy');
        getSmarty()->assign("page", "loan"); //podświetlenie odpowiedniego przycisku nawigacji w main.tpl

        getSmarty()->assign("form", $this->form);
        getSmarty()->assign("res", $this->result);

        getSmarty()->display("LoanView.tpl");
    }
}