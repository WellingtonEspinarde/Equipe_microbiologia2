<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Painel do Técnico</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: rgb(177, 238, 190);">

  <div class="container py-5">
    <div class="text-center mb-5">
      <h1 class="display-4">Painel do Técnico</h1>
      <p class="lead">Selecione uma das opções abaixo:</p>
    </div>

    <div class="row justify-content-center g-4">
      <!-- Card 1 -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body text-center">
            <h5 class="card-title">Cadastrar Paciente</h5>
            <p class="card-text">Adicione um novo paciente ao sistema.</p>
            <a href="cadastrar_paciente.php" class="btn btn-primary w-100">Acessar</a>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body text-center">
            <h5 class="card-title">Cadastrar Exame</h5>
            <p class="card-text">Registre um novo exame realizado.</p>
            <a href="cadastrar_exame.php" class="btn btn-success w-100">Acessar</a>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body text-center">
            <h5 class="card-title">Ver Exames</h5>
            <p class="card-text">Consulte exames já cadastrados.</p>
            <a href="ver_exames.php" class="btn btn-warning w-100">Acessar</a>
          </div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body text-center">
            <h5 class="card-title">Editar Dados</h5>
            <p class="card-text">Atualize informações cadastradas.</p>
            <a href="editar_dados.php" class="btn btn-info w-100">Acessar</a>
          </div>
        </div>
      </div>

      <!-- Logout -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm border-danger">
          <div class="card-body text-center">
            <h5 class="card-title text-danger">Sair</h5>
            <p class="card-text">Encerrar sessão e voltar ao login.</p>
            <a href="logout.php" class="btn btn-outline-danger w-100">Logout</a>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>