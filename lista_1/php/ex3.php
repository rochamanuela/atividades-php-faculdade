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
        <a href="../html/ex3.html" id="active">Exercício 03</a>
        <a href="../html/ex4.html">Exercício 04</a>
        <a href="../html/ex5.html">Exercício 05</a>
        <a href="../html/ex6.html">Exercício 06</a>
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
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];

        if ($n1 == $n2) {
            echo "<p>Os números inseridos são iguais</p>";
        }
        else if ($n1 > $n2) {
            echo "<p>$n1 é maior que $n2</p>";
        }
        else if ($n2 > $n1) {
            echo "<p>$n2 é maior que $n1</p>";
        }
    ?>
    <a href="../html/ex3.html"><button>OK</button></a>
    </div>
</body>
</html>