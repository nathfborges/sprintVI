<?php

class Titular
{
    private string $nome;
    private CPF $cpf;

    public function __construct(CPF $cpf, string $nome)
    {
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->validaNomeTitular($nome);
    }

    public function recuperaCPF() : string
    {
        return $this->cpf->recuperarCPF();
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    private function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "O titular $nomeTitular não pôde ser cadastrado. Nome precisa ter pelo menos 5 caracteres" . PHP_EOL;
            exit();
        }
    }

    
}

?>