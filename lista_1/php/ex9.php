<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Resultado</title>
</head>
<body>
    <div class="navbar">
        <a href="../html/ex1.html">Exercício 01</a>
        <a href="../html/ex2.html">Exercício 02</a>
        <a href="../html/ex3.html">Exercício 03</a>
        <a href="../html/ex4.html">Exercício 04</a>
        <a href="../html/ex5.html">Exercício 05</a>
        <a href="../html/ex6.html">Exercício 06</a>
        <a href="../html/ex7.html">Exercício 07</a>
        <a href="../html/ex8.html">Exercício 08</a>
        <a href="../html/ex9.html" id="active">Exercício 09</a>
        <a href="../html/ex10.html">Exercício 10</a>
        <a href="../html/ex11.html">Exercício 11</a>
        <a href="../html/ex12.html">Exercício 12</a>
        <a href="../html/ex13.html">Exercício 13</a>
    </div>
    <div class="container-resposta">
    <h2>Resultado</h2>
        <?php
            $cargo = $_POST['cargo'];
            $salario = $_POST['salario'];

            $novo_salario = 0;

            switch($cargo){
                case 101:
                    $novo_salario = $salario + ($salario * 0.1);
                    break;
                case 102:
                    $novo_salario = $salario + ($salario * 0.2);
                    break;
                case 103:
                    $novo_salario = $salario + ($salario * 0.3);
                    break;
                default:
                    $novo_salario = $salario + ($salario * 0.4);
                    break;
            }

            $diferenca_salarial = $novo_salario - $salario;

            echo "<p>Salário antigo: R$ $salario</p>";
            echo "<p>Salário atual: R$ $novo_salario </p>";
            echo "<p>Aumento salarial de: R$ $diferenca_salarial</p>";
        ?>
        <a href="../html/ex9.html"><button>OK</button></a>
    </div>
</body>
</html>