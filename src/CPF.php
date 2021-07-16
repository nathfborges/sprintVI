<?php

class CPF
{
    private string $CPF;

    public function __construct(string $CPF)
    {
        $this->cpf = $CPF;
        $this->ValidaçãoCPF($CPF);
    }

    public function recuperarCPF() : string
    {
        return $this->cpf;
    }

    public function ValidaçãoCPF($CPF)
    {
        if (strlen($CPF) != 11){
            echo "O CPF $CPF não pode ser cadastrado. Certifique-se que só tenha números." . PHP_EOL;
            exit();
        }

    }

}

?>