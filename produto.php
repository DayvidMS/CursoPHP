<?php

    class Produto {
        //Esses são atributos privados
        private $codigo;
        private $nome;
        private $preco;

//Apartir daqui temos dois metodos, O metodo Get e Set

//O metodo GET retorna o valor que cada um encapsula
        public function getCodigo(){
            return $this->codigo;
        }
//O metodo SET atribui um valor a cada atributo
        public function setCodigo($codigo){
            $this->codigo = $codigo;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getPreco(){
            return $this->preco;
        }

        public function setPreco($preco){
            $this->preco = $preco;
        }
    }
?>