<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- sem borde/ 
     <div class="conteiner p-4">
        <nav class="navbar" background-color:rgb 177, 238, 190 >
            <div class="container">
                <a href="Home.php" class="navbar-brand text-black">HOME</a>
                <a href="login.php" class="navbar-brand text-black">LOGIN</a>
            </div>
        </nav>
    </div>css-->
    <div class="container sem-borda">
        <div class="row justify-content-center mt-4">
            <div class="col-md-5">
                <div class="form">

                    <div class="card-header text-black text-center border-black">
                        <h3>Cadastro de Técnicos</h3>
                    </div>
                    <?php include 'formCadastro.php'; ?>
                    
                </div>

            </div>
        </div>
    </div>
    </div>