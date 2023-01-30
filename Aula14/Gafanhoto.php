<?php
require_once 'Pessoa.php';

class Gafanhoto extends Pessoa
{
    private string $login ;
    private int $toAssistindo;

    /**
     * @param string $login
     */
    public function __construct(string $nome, int $idade, string $sexo, string $login)
    {
        parent::__construct($nome,$idade,$sexo);
        $this->login = $login;
        $this->toAssistindo = 0;
    }

    public function viuMaisUm(){
        $this->toAssistindo ++;
    }

    public function getLogin(): string
    {
        return $this->login;
    }


    public function setLogin(string $login): void
    {
        $this->login = $login;
    }


//    public function isToAssistindo(): bool
    public function getToAssistindo(): bool
    {
        return $this->toAssistindo;
    }


    public function setToAssistindo(bool $toAssistindo): void
    {
        $this->toAssistindo = $toAssistindo;
    }
}