<?php
//incluimos no arquivo a interface,a Class Pai e a Class Filha
    include_once("expiravel.php");
    include_once("produto.php");
    include_once("assinatura.php");
//Instanciamos a class Assinatura com a palavra reservada New
    $Assinatura = new Assinatura();
//Utilizamos o setCodigo/setNome e setPreco que está herdado da class produto
//E setDataExpiracao que é da class Assinatura
    $Assinatura->setCodigo(123);
    $Assinatura->setNome("Assinatura MVP");
    $Assinatura->setPreco(69.99);
    $Assinatura->setDataExpiracao("2021-08-20");
//Em seguida imprimimos em tela o método publico getTempoRestante
    echo "Dias restantes da assinatura: {$Assinatura->getTempoRestante()->days} ";