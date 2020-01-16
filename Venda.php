<?php

    namespace Venda;

    use VendaException\VendaException;

    class Venda {
        private $itens = [];
    /*Aqui eu digo que o meu ItemVenda não pode ser nulo, e trato ele com o
Throw new , dizendo sobre a exceção,
Então caso haja um objeto nulo na nossa lista de Arrays "private $itens = []"
e Quando a função getTotal, percorrer a lista e processasse uma soma, o getPreço não 
existiria por ser um item nulo, ocasionando um erro de sistema.
tratado abaixo com o IF {Throw new}
*/    
        public function adicionar($ItemVenda){
            if($ItemVenda == null){
//essa exceção personalizada herda do LogicException
//nesse VendaException agora, colocamos um codigo, que pode ser qualquer outro
//exemplo o 404 - not found
                throw new VendaException(500,"Item não pode ser nulo");
           //    throw new \InvalidArgumentException("Item não pode ser nulo");
            } 
            array_push($this->itens, $ItemVenda);
        }

        public function getTotal(){
            $total = 0;

        /*   if(!count($this->itens)){
                throw new \LogicException("Quantidade de itens inválida.");
            }*/

            foreach ($this->itens as $item){
                $total += $item->getPreco();
            }
            return $total;
        }
    }