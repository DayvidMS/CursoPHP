<?php
    define('DB_HOST'        , "servertestefabio.database.windows.net");
    define('DB_USER'        , "Fabio");
    define('DB_PASSWORD'    , "Devmedia123");
    define('DB_NAME'        , "dbtestefabio");
    define('DB_DRIVER'      , "sqlsrv");

    require_once "conexao.php";

    try{
        $conexao = conexao::getConnection();
        $query   = $conexao->query("SELECT nome, preco, quantidade FROM produto");
        $produtos= $query->fetchAll();

    }catch(Exception $e){
        echo $e->getMessage();
        exit;
    }
?>
<table border=1>
    <tr>
        <td>Nome</td>
        <td>Preço</td>
        <td>Quantidade</td>
    </tr>
    <?php
        foreach($produtos as $produto){
    ?>
        <tr>
            <td><?php echo $produto['nome'];?></td>
            <td>R$ <?php echo $produto['preco']; ?> </td>
            <td> <?php echo $produto['quantidade']; ?> </td>
        </tr>
    <?php
        }
    ?>
</table>