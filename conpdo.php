<?php

    $pdo = new PDO('mysql:host=localhost;dbname=devmedia', 'root','1234');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'utf8'");

    try {
        $pdoStatement = $pdo->query("SELECT id, nome, preco FROM produto LIMIT 5");

        while($row = $pdoStatement->fetch(PDO::FETCH_ASSOC)){

            echo "<P>{$row['id']} {$row['nome']} {$row['preco']} </P>";
        }
    }  catch(Exception $e) {
        echo "erro: {$e->getMessage()}";
    }

//pra trabalhar com PDO é preciso criar um objeto PDO
//na linha 3 foi criado esse objeto com "$pdo = new PDO"
//o primeiro parametro do construtor ainda na linha 3 é a String de conexão com banco de Dados
//seguido do Host que é o local onde o mysql está instalado
//seguido do nome do banco de dados "dbname"
//logo após é a senha do usuario do banco "root" seguido pela senha "1234"

//na linha 4 definimos um atributo para o PDO, que informa que todos os erros gerados
//por ele, devem ser tratados como exceção,isso facilita no tratamento de erro

//na linha 5 informamos que o nosso BD está usando a quantificação utf-8, isso é importante
//pra evitarmos erros de codificação 

//dentro do bloco TRY realizamos uma consulta ao BD com as instruções:
//SELECT : id, nome,preco
//FROM : produto
//LIMIT : 5
//O metodo $pdo->query retorna o metodo do tipo $pdoStatement
//que por sua vez esse objeto é usado para retornar 1 a 1 os registros coletados
//do BD
//esses registros são armazenados no Array $row
//que em sequencia imprimimos com o "echo" na linha 12 os valores contidos nesse array
//utilizando o nome de cada coluna do banco de dados "id,nome,preco" para acessar o 
//valor dos registros

//se acontecer algum erro nesse processo, ele vai ser tratado no bloco catch