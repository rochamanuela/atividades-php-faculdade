<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
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
        <a href="index.php" id="active">Gravar Dados dos Alunos</a>
        <a href="leitura.php">Apresentar Dados dos Alunos</a>
        <p class="contador">
            <span class="material-symbols-outlined">person</span>
            Visitantes: <?php echo $count; ?>
        </p>
    </nav>
    <div class="container">
        <h1>Controle de Rendimento Acadêmico</h1>
        <p style="font-size:13px">Insira os dados dos seus alunos no formulário abaixo para calcular o rendimento acadêmico.</p><br>
        <form action="media.php" method="post">
            <label>Nome</label>
            <input type="text" name="nome" placeholder="Ex.: Manuela Rocha" required>
            
            <label>Prontuário</label>
            <input type="text" name="prontuario" placeholder="Ex.: HT3025306" required>

            <label>Nota da prova</label>
            <input type="number" name="nota_prova" placeholder="0.00" min="0" max="10" step="0.01" required>
    
            <label>Nota do trabalho</label>
            <input type="number" name="nota_trabalho" placeholder="0.00" min="0" max="10" step="0.01" required><hr>
    
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>