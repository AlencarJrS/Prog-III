<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php include ('php.php')  ?>

    <link rel="stylesheet" href="../lâmina afiada/main.css">
    <link rel="stylesheet" href="../lâmina afiada/form.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lâmina Afiada</title>

</head>
<body>
     
    <div id="home">
        <header>
        <h1>Barbearia Lâmina Afiada</h1>
        <img src="../lâmina afiada/assets/logo.jpg" alt="">
    
        </header>
    </div>



<div id="formulario" >
    <form action="php.php" method="post" name="info_cliente">
        <h2>Agendamento de horário</h2>
            
        <fieldset>
                <legend><h2>Dados do Cliente</h2></legend>

                <div class="field">
                    <label for="name">Nome do Cliente :</label>
                    <input type="text" name="nome">
                </div>
                <div class="field">
                    <label for="name">CPF :</label>
                    <input type="number" name="cpf">
                </div>
                <div class="field">
                    <label for="name">E-mail :</label>
                    <input type="text" name="email">
                </div>
                
                <div class="field">
                    <label for="name">Telefone :</label>
                    <input type="number" name="telefone">
                </div>
                <div class="field">
                    <label for="name">Procedimento </label>
                    <p>Cabelo</p>
                    <input type="checkbox" name="barba" value="1">
                    <p>Barba</p>
                    <input type="checkbox" name="cabelo" value="1">
                </div>

                <div class="field">
                    <label for="name">Data e Horário</label>
                    <input type="date" name="data">
                    <input type="time" min="09:00" name="time">
                </div>


                

        </fieldset>
        <input type="submit" value="Gravar" name="botao">
        
    </form>
</div>

</body>
</html>