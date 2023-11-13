<?php
    //Classe Cadastro
    class Cadastro
    {
        //Declaração de Variaveis
        private string $nome;
        private int $RG;
        private string $telefone;

        public function __construct($nome, $RG, $telefone)
        {
            $this->setNome($nome);
            $this->setRG($RG);
            $this->setEndereco($telefone);
        }//Fim do Construtor

        //Métodos consultores e de consulta

        public function getNome()
        {
            return $this->nome;
        }//Fim do Método

        public function getRG()
        {
            return $this->RG;
        }//Fim do Método

        public function getTelefone()
        {
            return $this->telefone;
        }//Fim do Método


        //Fim dos Gets
        //--------------------------

        public function setNome($nome)
        {
            $this->nome = $nome;
        }//Fim do Método

        public function setRG($RG)
        {
            $this->RG = $RG;
        }//Fim do Método

        public function setTelefone($telefone)
        {
            $this->endereco = $endereco;
        }//Fim do Método

        //Fim dos Sets
        //----------------------------
        
    }//Fim da Classe

//Fim do Projeto
?>