<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
    <title>Cadastro de Paciente</title>
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
                        <label for="idataNascimento" class="form-label">Data de Nascimento</label>
                        <input type="date" class="form-control" name="dataNascimento" id="idataNascimento" required>
                    </div>

                    <div class="mb-3">
                        <label for="itelefone" class="form-label">Telefone para contato</label>
                        <input type="tel" class="form-control" name="telefone" id="itelefone">
                    </div>

                    <div class="mb-3">
                        <label for="iemail" class="form-label">Email para contato</label>
                        <input type="email" class="form-control" name="email" id="iemail">
                    </div>

                    <div class="mb-3">
                        <label for="inomemae" class="form-label">Nome da mãe</label>
                        <input type="text" class="form-control" name="nomemae" id="inomemae">
                    </div>

                    <div class="mb-3">
                        <label for="iendereco" class="form-label">Endereço</label>
                        <input type="text" class="form-control" id="iendereco" name="endereco" required>
                    </div>

                    <div class="mb-3">
                        <h4>Exame solicitado</h4>
                        <label for="imicrobiologia" class="form-check-label">Microbiologia</label>
                        <input type="radio" class="form-check-input" name="exames" value="microbiologia" id="imicrobiologia">
                    </div>

                    <div class="mb-3">
                        <h4>Toma remédio contínuo</h4>
                        <label for="iremedioSim" class="form-check-label">SIM</label>
                        <input type="radio" class="form-check-input" name="remedio" value="remediosim" id="iremedioSim">

                        <label for="iremedioNao" class="form-check-label">NÃO</label>
                        <input type="radio" class="form-check-input" name="remedio" value="remedionao" id="iremedioNao">

                        <br />
                        <label for="iremedioQual" class="form-label">Qual?</label>
                        <input type="text" class="form-control" name="remedioQual" id="iremedioQual" />
                    </div>

                    <div class="mb-3">
                        <h4>Alguma patologia que trata</h4>
                        <label for="ipatologiaSim" class="form-check-label">SIM</label>
                        <input type="radio" class="form-check-input" name="patologia" value="patologiasim" id="ipatologiaSim">

                        <label for="ipatologiaNao" class="form-check-label">NÃO</label>
                        <input type="radio" class="form-check-input" name="patologia" value="patologianao" id="ipatologiaNao">

                        <br />
                        <label for="ipatologiaQual" class="form-label">Qual?</label>
                        <input type="text" class="form-control" name="patologiaQual" id="ipatologiaQual" />
                    </div>

                    <div class="mb-3">
                        <h4>Técnico responsável</h4>
                        <label for="alunoResponsavel" class="form-label">Nome</label>
                        <input type="text" class="form-control" name="alunoResponsavel" id="alunoResponsavel">

                        <label for="iperiodoMatutino" class="form-check-label">Matutino</label>
                        <input type="radio" class="form-check-input" name="periodo" value="responsavelmatutino" id="iperiodoMatutino">

                        <label for="iperiodoNoturno" class="form-check-label">Noturno</label>
                        <input type="radio" class="form-check-input" name="periodo" value="responsavelnoturno" id="iperiodoNoturno">
                    </div>

                    <div class="mb-3">
                        <label for="ihistoricoMedico" class="form-label">Histórico Médico</label>
                        <textarea class="form-control" id="ihistoricoMedico" name="historicoMedico" rows="3"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="iresultados" class="form-label">Resultados</label>
                        <textarea class="form-control" id="iresultados" name="resultados" rows="3"></textarea>
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
</body>
</html>
