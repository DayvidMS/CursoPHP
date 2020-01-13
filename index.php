<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <title>Calculo de Consumo de combustivel</title>
</head>
<body>
    <main>
        <div class="painel">
            <h2>instruções</h2>
            <div class="conteudo-painel">
                <p>Esta aplicação tem como finalidade demonstrar os valores que
                serão gastos com combustivel durante uma viagem com base no consumo do seu veículo, e com a distância determinada por você!</p>
                <p>Os combustiveis disponíveis para este cáuculo são:</p>
                <ul>
                    <li><b>Álcool</b></li>
                    <li><b>Diesel</b></li>
                    <li><b>Gasolina</b></li>
                </ul>
            </div>
        </div>

        <div class="painel">
            <h2>Cálculo do Valor (R$) do consumo</h2>
            <div class="conteudo-painel">
                <form action="calculo.php" method="POST">
                    <label for="distancia">Distância em Kilômetros a ser percorrida</label>
                    <input type="number" class="campoTexto" name="distancia" required/>
                    <label for="autonomia">Consumo de combustível (Km/l)</label>
                    <input type="number" class="campoTexto" name="autonomia" required>

                    <button class="botao" type="submit">Calcular</button> 
                </form>
            </div>

        </div>
</body>
</html>