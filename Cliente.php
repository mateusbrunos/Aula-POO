<?php

require_once './Interfaces/ClienteInterface.php';

class Cliente implements ClienteInterface
{
    public $nome,$cpf,$endereco,$fone = array();
    
    public function __construct($nome, $cpf, $endereco, $fone) 
    {
        $this->nome[] = $nome;
        $this->cpf[] = $cpf;
        $this->endereco[] = $endereco;
        $this->fone[] = $fone;
    }
    
    public function getNome() 
    {
        return $this->nome[];
    }
   public function getCpf() 
    {
       return $this->cpf[];
    }

   public function getEndereco() 
    {
       return $this->endereco[];
    }

   public function getFone() 
    {
       return $this->fone[];
    }


    
   
}
