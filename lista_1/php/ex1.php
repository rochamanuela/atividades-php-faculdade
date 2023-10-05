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
        <a href="../html/ex1.html" id="active">Exercício 01</a>
        <a href="../html/ex2.html">Exercício 02</a>
        <a href="../html/ex3.html">Exercício 03</a>
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
        $nome = $_POST['nome'];
        $n1 = $_POST['nota1'];
        $n2 = $_POST['nota2'];
        $n3 = $_POST['nota3'];

        $media = ($n1 + $n2 + $n3) / 3;

        if ($media>=7){
            echo "<p><b>Resultado:</b> Aluno(a) $nome foi aprovado(a)<br>";
            echo "<b>Média:</b> $media</p>";
        }
        else{
            echo "<p><b>Resultado:</b> Aluno(a) $nome foi reprovado(a)<br>";
            echo "<b>Média:</b> $media</p>";
        }
        ?>
         <a href="../html/ex1.html"><button>OK</button></a>
    </div>
</body>
</html>
