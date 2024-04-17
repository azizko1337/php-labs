<?php
namespace core;

class Messages{
    private $errors = array();
    private $infos = array();

    public function addError($message){
        $this->errors[] = $message;
    }

    public function addInfo($message){
        $this->infos[] = $message;
    }

    public function getErrors(): array
    {
        return $this->errors;
    }
    public function getInfos(): array
    {
        return $this->infos;
    }

    public function isEmpty(): bool
    {
        return count($this->infos) == 0 && count($this->errors) == 0;
    }
    public function hasErrors(): bool
    {
        return count($this->errors)>0;
    }
    public function hasInfos(): bool
    {
        return count($this->infos)>0;
    }

    public function clear(){
        $this->errors = array();
        $this->infos = array();
    }
}