<?php
//criamos uma nova classe Assinatura e extendemos ou seja
//Herdamos da classe produto com a palavra reservada extends
//ainda implementamos uma interface com a palavra reservada Implements
//Verificar no arquivo expiravel.php
class Assinatura extends Produto Implements Expiravel {

    private $dataExpiracao;

    public function getDataExpiracao(){
        return $this->dataExpiracao;
    }

    public function setDataExpiracao($dataExpiracao){
        $this->dataExpiracao = new \DateTime($dataExpiracao);
    }

    public function getTempoRestante(){
        return $this->dataExpiracao->diff(new \DateTime());
    }

}