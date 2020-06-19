
<!-- Página de login -->
<?php include('login.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
   
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
            <h2>Sistema para agendamento</h2>
</div>
        <div id="form-login">

            <form action="#" method="post">
                <h2>Login</h2>
                <fieldset>
                    <div class="field">
                        <label for="name">Usuário</label>
                        <input type="text" name="login">
                    </div>

                    <div class="field">
                        <label for="name">Senha</label>
                        <input type="text" name="senha">
                    </div>

                </fieldset>
                <input type="submit" name="botao" value="Entrar">
            </form>
        </div>



    </body>
</html>