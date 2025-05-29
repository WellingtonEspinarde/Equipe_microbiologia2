<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
   <div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-5">
            <div class="form">

                <div class="card-header text-black text-center border-black">
                        <h3>Cadastro de Paciente</h3>
                </div>
                
                <div class="card-body formulario-padrao">
                    <form action="#" method="post">

                    <div class="mb-3">
                        <label for="inome" class="form-label">Nome Completo</label>
                        <input type="text" class="form-control" id="inome" name="nome" required>
                    </div>

                    <div class="mb-3">
                        <label for="icpf" class="form-label">CPF</label>
                        <input type="text" class="form-control" id="icpf" name="cpf" required>
                    </div>

                    <div class="mb-3">
                        <label for="iresponsavel" class="form-label">Nome do Responsavel pelo Cadastro</label>
                        <input type="text" class="form-control" id="iresponsavel" name="responsavel" required>
                    </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
   </div>
</body>
</html>