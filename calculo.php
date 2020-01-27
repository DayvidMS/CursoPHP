<?php
$mensagem = "";

if($_POST){
$distancia = $_POST['distancia'];
$autonomia = $_POST['autonomia'];

    if(is_numeric($distancia) && is_numeric($autonomia)){
        if(($distancia>0) && ($autonomia>0)){

$valorGasolina = 4.80;
$valorAlcool = 3.80;
$valorDiesel = 3.90;
        

$calculoGasolina = ($distancia/$autonomia)*$valorGasolina;
$calculoGasolina = number_format($calculoGasolina, 2, ',','.');

$calculoAlcool = ($distancia/$autonomia)*$valorAlcool;
$calculoAlcool = number_format($calculoAlcool,2,',','.');

$calculoDiesel = ($distancia/$autonomia)*$valorDiesel;
$calculoDiesel = number_format($calculoDiesel, 2,',','.');
        
$mensagem.= "<div class='sucesso'>";
$mensagem.= "O valor total será de:";
$mensagem.= "<ul>";
$mensagem .= "<li>Gasolina: R$ ".$calculoGasolina."</li>";
$mensagem .= "<li>Alcool: R$".$calculoAlcool."</li>";
$mensagem .= "<li>Diesel: R$".$calculoDiesel."</li>";
$mensagem .= "</ul>";
$mensagem .= "</div>";
        }
else{
            $mensagem .= "<div class='erro'>";
            $mensagem .= "<p>O Valor da distancia e autonomia deve ser maior que zero!</p>";
            $mensagem .= "</div>";
        }
    }
    else{
        $mensagem .= "<div class='erro'>";
        $mensagem .= "O valor recebido não é numerico";
        $mensagem .= "</div>";
    }
}
else{
    $mensagem .= "<div class='erro'>";
    $mensagem .= "<p>Nenhum dado foi recebido pelo Formulario</p>";
    $mensagem .= "</div>";
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <title>Calculo de Consumo de combustivel</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <main>
        <div class="painel">
            <h2>Resultado do cálculo de consumo</h2>
            <div>
                <?php
                echo $mensagem
                ?>
                <a class="botao" href="index.php">Voltar</a>
            </div>
        </div>
    </main>
</body>
</html>