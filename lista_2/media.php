<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="style.css">
    <title>Mensagem</title>
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
        <a href="leitura.php">Apresentar Dados dos Alunos</a>
        <p class="contador">
            <span class="material-symbols-outlined">person</span>
            Visitantes: <?php echo $count; ?>
        </p>
    </nav>
    <?php
        $nome = $_POST['nome'];
        $prontuario = $_POST['prontuario'];
        $nota_prova = $_POST['nota_prova'];
        $nota_trabalho = $_POST['nota_trabalho'];
        
        $media = ($nota_prova + $nota_trabalho) / 2;
        
        $ponteiro = fopen("C:/xampp/htdocs/lista_2/alunos.txt", "a");
        
        fwrite($ponteiro, "<b>Nome:</b> ".$nome."\r\n");
        fwrite($ponteiro, "<b>Prontuário:</b> ".$prontuario."\r\n");
        fwrite($ponteiro, "<b>Nota da Prova:</b> ".$nota_prova."\r\n");
        fwrite($ponteiro, "<b>Nota do Trabalho:</b> ".$nota_trabalho."\r\n");
        fwrite($ponteiro, "<b>Média:</b> ".$media."\r\n");

        if ($media>=6){ fwrite($ponteiro, "<b>Situação:</b> Aprovado(a)"."\r\n"); }
        else{ fwrite($ponteiro, "<b>Situação:</b> Reprovado(a)"."\r\n"); }

        fwrite($ponteiro, "\r\n");
        fclose($ponteiro);
    ?>
    <div class="container">
        <h1>Dados gravados com sucesso!</h1>
        <p>Para gravar novos dados, use o menu superior.</p>
    </div>
</body>
</html>
