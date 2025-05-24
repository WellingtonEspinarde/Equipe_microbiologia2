<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Login</title>
</head>

<body>

  <div class="container">
    <div class="row">
      <div class="col"></div>

      <div class="card-header text-black text-center border-black">
        <h1 class="display-3">Login</h1>
        <form action="Login.html" method="post">

          <div class="mb-3">
            <label for="inomecompleto" class="form-label">Nome Completo</label>
            <input type="text" class="form-control" id="inomecompleto" name="nomecompleto">
          </div>


          <div class="mb-3">
            <label for="isenha" class="form-label">Senha</label>
            <input type="password" class="form-control" max="11" id="isenha" name="senha">
          </div>

          <div class="d-grid">
            <button type="submit" class="btn btn-primary">Entrar</button>
          </div>

          <div class="card-footer text-center m-3">
            <p>Esqueceu a Senha? <a href="EsqueciSenha.php">Recuperar a Conta</a></p>
          </div>

        </form>
      </div>

      <div class="col"></div>
    </div>
  </div>
</body>

</html>