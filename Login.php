
<!DOCTYPE html>

<html lang="pt-BR">

<head>

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- getbootstrap.com > include via CDN -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <title>Login</title>

</head>

<body class="bg-success">

  <div class="container">
    <div class="row">
      <div class="col">

      </div>

      <div class="col-5 border mt-5 bg-light p-5 text-center">
        <h1 class="display-3">Login</h1>
        <form action="Login.html" method="post">
          <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="text" class="form-control" name="email">
          </div>

          <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" max="14" name="senha" class="form-control">
          </div>

          <div class="mb-3">
          </div>

          <div class="mb-3">
          </div>
          <button type="submit" class="btn btn-success">Entrar</button>
          <button type="EsqueciSenha.php" class="btn btn-success">Esqueci a Senha</button>
          
        
        
          
          
        </form>
      </div>
      <div class="col"></div>
    </div>
  </div>
</body>

</html>