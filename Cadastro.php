<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
  

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class= "">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">

                    <div class="mp-3">
                        <a href="Home.html">HOME</a>
                    </div>
            
                <div class="card">
                    <div class="card-header bg-primary text-white text-center">
                        <h3>Cadastro de Usuário</h3>

                    </div>
                    <div class="card-body">
                        <form action="#" method="POST">

                            
                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome Completo</label>
                                <input type="text" class="form-control" id="nome" name="nome" required>
                            </div>

                           
                            <div class="mb-3">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>

                            <div class="mb-3">
                                <input type="radio" class="form-check-input" name="genero" value="M">
                                <label for="genero" class="form-check-label">Masculino</label>
                              </div>

                              <div class="mb-3">
                                <input type="radio" class="form-check-input" name="genero" value="F">
                                <label for="genero" class="form-check-label">Feminino</label>
                              </div>
                  
                              <div class="mb-3">
                                <input type="radio" class="form-check-input" name="genero" value="O">
                                <label for="genero" class="form-check-label">Outro</label>
                              </div>

                            <div class="mb-3">
                                <label for="senha" class="form-label">Senha</label>
                                <input type="password" class="form-control" id="senha" name="senha" required>
                            </div>

                            
                            <div class="mb-3">
                                <label for="confirma_senha" class="form-label">Confirmar Senha</label>
                                <input type="password" class="form-control" id="confirma_senha" name="confirma_senha" required>
                            </div>

                           
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Cadastrar</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <p>Já tem uma conta? <a href="Login.html">Faça login</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
