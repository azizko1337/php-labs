<?php

require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/loan/LoanForm.class.php';
require_once $conf->root_path.'/app/loan/LoanResult.class.php';

class LoanCtrl{
    private $msgs;
    private $form;
    private $result;

    public function __construct(){
        $this->msgs = new Messages();
        $this->form = new LoanForm();
        $this->result = new LoanResult();
    }

    public function getParams(){
        $this->form->amount = $_REQUEST["amount"] ?? null;
        $this->form->years = $_REQUEST["years"] ?? null;
        $this->form->percentage = $_REQUEST["percentage"] ?? null;
    }

    public function validate(): bool{
        if(!isset($this->form->amount) || !isset($this->form->years) || !isset($this->form->percentage)){
            return false;
        }

        if(empty($this->form->amount)){
            $this->msgs->addError("Nie podano wysokości kredytu.");
        }
        if(empty($this->form->years)){
            $this->msgs->addError("Nie podano długości kredytu.");
        }
        if(empty($this->form->percentage)){
            $this->msgs->addError("Nie podano oprocentowania kredytu.");
        }

        if($this->msgs->hasErrors()) return false;

        if(!is_numeric($this->form->amount)){
            $this->msgs->addError("Wysokość kredytu nie jest liczbą.");
        }
        if(!is_numeric($this->form->years)){
            $this->msgs->addError("Długość kredytu nie jest liczbą.");
        }
        if(!is_numeric($this->form->percentage)){
            $this->msgs->addError("Oprocentowanie kredytu nie jest liczbą.");
        }

        if($this->msgs->hasErrors()) return false;

        if(floatval($this->form->amount) <= 0){
            $this->msgs->addError("Wysokość kredytu musi być większa od 0.");
        }
        if(floatval($this->form->years) <= 0){
            $this->msgs->addError("Długość kredytu musi być większa od 0.");
        }
        if(floatval($this->form->percentage) <= 0){
            $this->msgs->addError("Oprocentowanie kredytu musi być większa od 0.");
        }

        return !$this->msgs->hasErrors();
    }

    public function process(){
        $this->getParams();

        if($this->validate()){
            $this->form->amount = floatval($this->form->amount);
            $this->form->years = floatval($this->form->years);
            $this->form->percentage = floatval($this->form->percentage);
            $this->msgs->addInfo("Parametry poprawne.");

            $this->result->monthlyInstallment = ($this->form->amount + $this->form->amount * $this->form->percentage / 100) / $this->form->years / 12;
            $this->msgs->addInfo("Wykonano obliczenia.");
        }

        $this->generateView();
    }

    public function generateView(){
        global $conf;

        $smarty = new Smarty();

        $smarty->assign("conf", $conf);

        $smarty->assign('page_title', 'Kalkulator kredytowy');
        $smarty->assign("page", "loan"); //podświetlenie odpowiedniego przycisku nawigacji w main.tpl

        $smarty->assign("msgs", $this->msgs);
        $smarty->assign("form", $this->form);
        $smarty->assign("res", $this->result);

        $smarty->display($conf->root_path."/app/loan/LoanView.tpl");
    }
}