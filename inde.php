<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <title>Volei</title>
</head>
<body>
    <main>
        <div class="campo1">
            <h2>Instruções</h2>
            <div class="campo2">
                <p>Essa aplicação tem como objetivo montar a escalação de times, de forma que quem já jogou, vá para o final da lista e possa gerar um equilibrio
                    e cada vez que um time sair vá montando os times de forma que todos joguem com todos.</p>
                <p>Os times podem ser formados por 4 ou 5 pessoas conforme seja mais apropriado para o usuário.</p>
                <form method="POST" action="jogadores.php">
                <label>Quantos jogadores serão em cada time?</label>
                <select>  
                    <option value="v4">4</option>
                    <option value="v5">5</option>
                </select>
                <label>Digite o nome dos jogadores aqui</label>
                <input type="text" name="jogador" >
                <input type="submit" value="Adicionar jogador">
                </form>
            </div>
        </div>
     <?php
        require_once "jogadores.php";

        echo $jogadores;
     ?>
    </main>
</body>
</html>