<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Gráfico</title>
</head>
<body>
    <div class="result">
        <h1>Visualização gráfica dos gastos</h1>
        <?php
            $jan=$_POST["jan"];
            $fev=$_POST["fev"]; 
            $mar=$_POST["mar"];
            $abr=$_POST["abr"]; 
            $mai=$_POST["mai"];
            $jun=$_POST["jun"];
            echo "<center>";
            echo "<img src='http://chart.apis.google.com/chart?chs=600x300&cht=p3&chco=3B66AB|477BD0|5491F5|98BDF9|BBD3FB|DDE9FD&chd=t:$jan,$fev,$mar,$abr,$mai,$jun&chdl=Janeiro|Fevereiro|Março|Abril|Maio|Junho&chl=$jan|$fev|$mar|$abr|$mai|$jun'>";
        ?>
        <center>
            <button>
                <a href="index.php">INSERIR NOVOS VALORES</a>
            </button>
        </center>
    </div>
</body>
</html>