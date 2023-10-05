<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Gráfico</title>
</head>
<body>
    <div class="child">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14706.762067794465!2d-47.2311636!3d-22.8509368!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c8bc16c66f0bed%3A0x1aee5c111efc6196!2sInstituto%20Federal%20de%20Educa%C3%A7%C3%A3o%2C%20Ci%C3%AAncia%20e%20Tecnologia%20de%20S%C3%A3o%20Paulo%2C%20Campus%20Hortol%C3%A2ndia!5e0!3m2!1spt-BR!2sbr!4v1694734438885!5m2!1spt-BR!2sbr" 
    width="500" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="child">
        <h1>Gastos Financeiros</h1>
        <p>Informe os gastos financeiros do 1° semestre de 2023</p>
        <form action="grafico.php" method="post" class="container-form">
            <div class="container">
            <div class="item">
                <label>Janeiro</label>
                <input type="number" name="jan" placeholder="0.00" step=0.01>
        
                <label>Abril</label>
                <input type="number" name="abr" placeholder="0.00" step=0.01>
            </div>
            <div class="item">
                <label>Fevereiro</label>
                <input type="number" name="fev" placeholder="0.00" step=0.01>
            
                <label>Maio</label>
                <input type="number" name="mai" placeholder="0.00" step=0.01>
            </div>
            <div class="item">
                <label>Março</label>
                <input type="number" name="mar" placeholder="0.00" step=0.01>
                
                <label>Junho</label>
                <input type="number" name="jun" placeholder="0.00" step=0.01>
            </div>
            </div>
            <input type="submit" value="CALCULAR GASTOS">
        </form>
    </div>
</body>