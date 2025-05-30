
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Esqueci minha senha</title>
</head>

<body>

  <div class="container">
    <div class="row">
      <div class="col mb-3"></div>
      <div class="card-header text-black text-center border-black">
        <h1 class="display-3">Recuperar Conta</h1>
        <form action="EsqueciSenha.html" method="post">
          <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="text" class="form-control" name="email">
          </div>

          <div class="mb-3">
            <label for="senha" class="form-label">Nova senha</label>
            <input type="password" max="14" name="senha" class="form-control">
          </div>

          <div class="mb-3">
            <label for="novaSenha" class="form-label">Confirme a nova senha</label>
            <input type="password" max="14" name="novaSenha" class="form-control">
          </div>

          <div class="mb-3">
          </div>

          <div class="mb-3">
          </div>

          <div class="d-grid">
            <button type="submit" class="btn btn-primary">Confirmar</button>
            
        </div>

        </form>
      </div>
      <div class="col"></div>
    </div>
  </div>
</body>

</html>