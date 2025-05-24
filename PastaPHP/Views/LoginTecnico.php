<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="style.css">
  <title>Login Técnico</title>
</head>


<body>

  <div class="container">
    <div class="row justify-content-center">
      <div class="card-header text-black text-center border-black">
        <h1 class="display-4 mb-4">Login</h1>
        <form action="ValidaTecnico.php" method="post">
          <div class="mb-3 text-start">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" name="email" id="email" required autocomplete="email">
          </div>

          <div class="mb-3 text-start">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" name="senha" id="senha" maxlength="14" class="form-control" required autocomplete="current-password">
          </div>

          <div class="d-grid">
            <button type="submit" class="btn btn-primary">Entrar</button>
          </div>

          <div class="card-footer text-center mt-4">
            <p>Esqueceu a Senha? <a href="EsqueciSenha.php">Recuperar a Conta</a></p>
          </div>
        </form>
      </div>
    </div>
  </div>

</body>

</html>
