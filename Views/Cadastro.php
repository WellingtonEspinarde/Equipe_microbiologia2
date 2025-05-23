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


                    <div class="card-body formulario-padrao">
                        <form action="#" method="POST">

                            <div class="mb-3">
                                <label for="rgm" class="form-label">RGM</label>
                                <input type="text" class="form-control" id="rgm" name="rgm" required>
                            </div>

                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome Completo</label>
                                <input type="text" class="form-control" id="nome" name="nome" required>
                            </div>

                           
                            <div class="mb-3">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>

                            <div class="mb-3">
                                <label for="senha" class="form-label">Senha</label>
                                <input type="password" class="form-control" id="senha" name="senha" required>
                            </div>

                            
                            <div class="mb-3">
                                <label for="confirma_senha" class="form-label">Confirmar Senha</label>
                                <input type="password" class="form-control" id="confirma_senha" name="confirma_senha" required>
                            </div>

                              <div class="mb-3">
                                <input type="radio" class="form-check-input" name="Func" value="ALUN">
                                <label for="ALUNO" class="form-check-label">Discente</label>
                              </div>

                              <div class="mb-3">
                                <input type="radio" class="form-check-input" name="Func" value="PROF">
                                <label for="PROFESOR" class="form-check-label">Docente</label>
                              </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Cadastrar</button>
                            </div>
        
                        </form>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
