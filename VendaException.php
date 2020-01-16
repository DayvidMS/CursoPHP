<?php
    
    namespace VendaException;

    class VendaException extends \LogicException{
        private $codigo;

//Esse é o construtor, que está de forma personalizada
//quando essa exceção é gerada, também seja gerado um codigo para ser usado na aplicação
        public function __construct($codigo = 0, $message,Exception $previous = null){
            $this->codigo = $codigo;
            parent::__construct($message, $codigo, $previous);
        }
        public function getCodigo(){
            return $this->codigo;
        }
        
    }
//essa VENDAEXCEPTION faz referência a LogicException, por causa do "extends"
//Quando essa excessão é extendida é preciso seguir um padrão
