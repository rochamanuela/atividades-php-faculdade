<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="style.css">
    <title>Dados</title>
    <style>
        .material-symbols-outlined {
            font-variation-settings:
            'FILL' 1,
            'wght' 200,
            'GRAD' 0,
            'opsz' 24
        }

        .material-symbols-outlined {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <?php
        $arquivo = fopen("contador.txt", "r+");
        $leitura = fread($arquivo, 10);
        $count = (int) $leitura+1;
        fseek($arquivo, 0);
        fwrite($arquivo, $count);
        fclose($arquivo);
    ?>
    <nav class="navbar">
        <a href="index.php">Gravar Dados dos Alunos</a>
        <a href="leitura.php" id="active">Apresentar Dados dos Alunos</a>
        <p class="contador">
            <span class="material-symbols-outlined">person</span>
            Visitantes: <?php echo $count; ?>
        </p>
    </nav>
    <h1 style="margin: 60px 0 20px 0">Dados gravados até o momento</h1>
    <div class="leitura">
        <?php 
            $ponteiro = fopen("alunos.txt", "r");               
            $conteudo = fread($ponteiro, 10000);
            echo nl2br($conteudo);
            fclose($ponteiro);
        ?>
    </div>
</body>