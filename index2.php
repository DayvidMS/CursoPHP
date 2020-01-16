<?php

    use ItemVenda\ItemVenda;
    use Venda\Venda;
    use VendaException\VendaException;
  
    require_once "Venda.php";
    require_once "itemVenda.php";
    require_once "VendaException.php";

//O try faz uma previsão de um possivel erro
    try{    
        $camisa = new ItemVenda();
        $camisa->setDescricao("Camisa Polo");
        $camisa->setPreco(12.0);

        $bone = new ItemVenda();
        $bone-> setDescricao("Boné Infantil");
        $bone-> setPreco(11.0);

        $venda = new Venda();
        $venda->adicionar($camisa);
        $venda->adicionar($bone);

        print "total da venda: ". $venda->getTotal;
    }
//Essa Exceção não é Nativa do PHP como as outras.
    catch (VendaException $e){
        echo "VendaException: " . $e->getMessage() . " - Código: " . $e->getCodigo();
    }
//O catch recebe como a mensagem deve ser mostrada
//A variavel $e vai receber o erro simplificado.
//A variavel $e normalmente é usado para tratar a exceção
 /*   catch (InvalidArgumentException $e){
        echo "Um erro aconteceu " . $e->getMessage();
    }*/
//lembrando que para tratar varias exceções basta colocar um CATCH após o outro
 //   catch (LogicException $e){
  //      echo "Erro: " . $e->getMessage;
   // }
//esse ultimo CATCH tem que ser argumentado na classe Venda
//LogicException é mais generico, o InvalidArgumentException herda do LogicException
//existem varios tipos de excessões sendo que podemos tratar de varias formas
//se trocarmos os dois metodos de lugar, ele vai ser tratado pelo LogicException
//Por isso a importancia de colocar as exceções mais "importantes" primeiro.

//Muita ATENÇÃO NO TRY CATCH
    finally {
        echo "<br/> Processamento encerrado";
    }