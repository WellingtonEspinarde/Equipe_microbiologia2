<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro de Exames</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-md-5">
                <div class="form">

                <div class="card-header text-black text-center border-black">
                        <h3>Cadastro de Exames</h3>
                </div>

                <div class="card-body formulario-padrao">
                    <form action="#" method="post">

                    <div class="mb-3">  <!--Pode ser que tira-->
                       <label for="inome" class="form-label">Nome do Exame:</label>
                       <input type="text" class="form-control" id="inome" name="nomeExame" required>
                    </div>


                    <div class="mb-3">
                       <label  for="iidusu" class="form-label">ID Usuário:</label>
                       <input type="text" class="form-control" id="iidusu" name="idUsuario" required>
                    </div>

                    <div class="mb-3">
                       <label for="iidpac" class="form-label">ID Paciente:</label>
                       <input type="text" class="form-control" id="iidpac" name="idPaciente" required>
                    </div>

                    <div class="mb-3">
                              <h4>Amostra solicitado</h4>
                    <div class="mb-3">
                        <input type="radio" class="form-check-input" name="tipoAmostra" id="iswab" value="swab">
                        <label for="iswab" class="form-check-label">Swab ocular</label>
                    </div>

                    <div class="mb-3">
                        <input type="radio" class="form-check-input" name="tipoAmostra" id="iurocultura" value="urocultura">
                        <label for="iurocultura" class="form-check-label">Urocultura com antibiograma</label>
                    </div>

                    <div class="mb-3">
                        <input type="radio" class="form-check-input" name="tipoAmostra" id="iescarro" value="escarro">
                        <label for="iescarro" class="form-check-label">Escarro para exame de Micobacterium tuberculosis</label>
                    </div>

                    <div class="mb-3">
                        <input type="radio" class="form-check-input" name="tipoAmostra" id="inao" value="nao">
                        <label for="inao" class="form-check-label">Não foi solicitado</label>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="descricao">Descrição:</label>
                    <textarea name="descricao" id="descricao" rows="4" cols="50" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="resultado">Resultado:</label>
                    <textarea name="resultado" id="resultado" rows="4" cols="50"></textarea>
                </div>

                <div class="mb-3">
                        <h4>Prioridade</h4>
                    <label for="ialta" class="form-check-label">Alta</label>
                    <input type="radio" class="form-check-input" name="prioridade" id="ialta" value="alta">
                
                    <label for="imedia" class="form-check-label">Media</label>
                    <input type="radio" class="form-check-input" name="prioridade" id="imedia" value="media">

                    <label for="ibaixa" class="form-check-label">Baixa</label>
                    <input type="radio" class="form-check-input" name="prioridade" id="ibaixa" value="baixa">
                </div>

                <button type="submit" name="Cadastrar" class="btn btn-primary">Cadastrar</button>
                
            </form>
                     </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>