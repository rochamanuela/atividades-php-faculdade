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
        <a href="../html/ex6.html" id="active">Exercício 06</a>
        <a href="../html/ex7.html">Exercício 07</a>
        <a href="../html/ex8.html">Exercício 08</a>
        <a href="../html/ex9.html">Exercício 09</a>
        <a href="../html/ex10.html">Exercício 10</a>
        <a href="../html/ex11.html">Exercício 11</a>
        <a href="../html/ex12.html">Exercício 12</a>
        <a href="../html/ex13.html">Exercício 13</a>
    </div>
    <div class="container-resposta">
    <h2>Resultado</h2>
        <?php
            $idade = $_POST['idade'];

            if ($idade < 0) {
                echo "<p>Entrada inválida!</p>";
            } else if ($idade > 0 && $idade < 16) {
                echo "<p>Classe eleitoral aos $idade anos: <b>Não-eleitor</b></p>";
            } else if ($idade >= 18 && $idade <= 65) {
                echo "<p>Classe eleitoral aos $idade anos: <b>Eleitor obrigatório</b></p>";
            } else {
                echo "<p>Classe eleitoral aos $idade anos: <b>Eleitor facultativo</b></p>";
            }
        ?>
        <a href="../html/ex6.html"><button>OK</button></a>
    </div>
</body>
</html>