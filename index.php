<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de inscrição</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <form action="test.php" method="post" class="form-container">
        <div id="container">
            <div>
                <label for="nome">Nome</label>
                <input type="text" placeholder="Digite o seu nome" name="nome" id="nome">
            </div>
    
            <div>
                <label for="email">Email</label>
                <input type="email" placeholder="Digite o seu email" name="email" id="email">
            </div>
    
            <div>
                <label for="password">Password</label>
                <input type="password" placeholder="Digite a sua palavra passe" name="password" id="password">
            </div>
            
            <div id="button-center">
                <input type="submit" name="cadastrar" id="cadastrar" value="Cadastrar">
            </div>
    
            <div>
                <input type="hidden" name="form" value="form">
            </div>
        </div>
    </form>
</body>
</html>