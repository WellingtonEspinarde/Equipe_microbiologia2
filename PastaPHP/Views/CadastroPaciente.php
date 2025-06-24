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

                <?php
                require_once __DIR__. '/../Controller/PacienteController.php';
                ?>
   <div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-5">
            <div class="form">

                <div class="card-header text-black text-center border-black">
                    <h3>Cadastro de Paciente</h3>
                </div>
                
                <div class="card-body formulario-padrao">
                    <form action="../Controller/PacienteController.php" method="post" >
                    <input type="hidden" name="id" value="<?= isset($paciente) && $paciente->getId() ? $paciente->getId() : '' ?>">

                    <div class="mb-3">
                        <label for="inome" class="form-label">Nome Completo</label>
                        <input type="text" class="form-control" id="inome" name="nome" required 
                        value="<?= isset($paciente) && $paciente->getNome() ? $paciente->getNome() : '' ?>">
                    </div>

                    <div class="mb-3">
                        <label for="icpf" class="form-label">CPF</label>
                        <input type="text" class="form-control" id="icpf" name="cpf" required
                        value="<?= isset($paciente) && $paciente->getCpf() ? $paciente->getCpf() : '' ?>">
                    </div>

                    <div class="mb-3">
                        <label for="idataNascimento" class="form-label">Data de Nascimento</label>
                        <input type="date" class="form-control" name="dataNascimento" id="idataNascimento" required
                        value="<?= isset($paciente) && $paciente->getDataNascimento() ? $paciente->getDataNascimento() : '' ?>">
                    </div>

                    <div class="mb-3">
                        <label for="itelefone" class="form-label">Telefone para contato</label>
                        <input type="tel" class="form-control" name="telefone" id="itelefone"
                        value="<?= isset($paciente) && $paciente->getTelContato() ? $paciente->getTelContato() : '' ?>">
                    </div>

                    <div class="mb-3">
                        <label for="iemail" class="form-label">Email para contato</label>
                        <input type="email" class="form-control" name="email" id="iemail"
                        value="<?= isset($paciente) && $paciente->getEmailContato() ? $paciente->getEmailContato() : '' ?>">
                    </div>

                    <div class="mb-3">
                        <label for="inomemae" class="form-label">Nome da mãe</label>
                        <input type="text" class="form-control" name="nomemae" id="inomemae"
                        value="<?= isset($paciente) && $paciente->getNomeMae() ? $paciente->getNomeMae() : '' ?>">
                    </div>

                    <div class="mb-3">
                        <label for="iendereco" class="form-label">Endereço</label>
                        <input type="text" class="form-control" id="iendereco" name="endereco" required
                        value="<?= isset($paciente) && $paciente->getEndereco() ? $paciente->getEndereco() : '' ?>">
                    </div>

                    <div class="mb-3">
                        <h4>Exame solicitado</h4>
                        <label for="imicrobiologia" class="form-check-label">Microbiologia</label>
                        <input type="radio" class="form-check-input" name="exames" value="microbiologia" id="imicrobiologia"
                       checked>
                    </div>

                    <div class="mb-3">
                        <h4>Toma remédio contínuo</h4>
                        <label for="iremedioSim" class="form-check-label">SIM</label>
                        <input type="radio" class="form-check-input" name="remedio" value="Sim" id="iremedioSim"
                         <?php isset($paciente) && strcmp($paciente->getRemedioContinuo(),"Sim") ? print "checked" :  ''?>>
                        

                        <label for="iremedioNao" class="form-check-label">NÃO</label>
                        <input type="radio" class="form-check-input" name="remedio" value="Nao" id="iremedioNao"
                        <?php isset($paciente) && strcmp($paciente->getRemedioContinuo(),"Nao") ? print "checked" :  ''?>>
                        

                        <br />
                        <label for="iremedioQual" class="form-label">Qual?</label>
                        <input type="text" class="form-control" name="qualremedio" id="iremedioQual" 
                        value="<?= isset($paciente) && $paciente->getQualRemedio() ? $paciente->getQualRemedio() : '' ?>">
                    </div>

                    <div class="mb-3">
                        <h4>Alguma patologia que trata</h4>
                        <label for="ipatologiaSim" class="form-check-label">SIM</label>
                        <input type="radio" class="form-check-input" name="patologia" value="Sim" id="ipatologiaSim"
                        <?php isset($paciente) && strcmp($paciente->getPatologia(),"Sim") ? print "checked" :  ''?>>

                        <label for="ipatologiaNao" class="form-check-label">NÃO</label>
                        <input type="radio" class="form-check-input" name="patologia" value="Nao" id="ipatologiaNao"
                        <?php isset($paciente) && strcmp($paciente->getPatologia(),"Nao") ? print "checked" :  ''?>>

                        <br />
                        <label for="ipatologiaQual" class="form-label">Qual?</label>
                        <input type="text" class="form-control" name="patologiaQual" id="ipatologiaQual" 
                        value="<?= isset($paciente) && $paciente->getPatologia() ? $paciente->getPatologia() : '' ?>">
                    </div>

                    <div class="mb-3">
                        <h4>Técnico responsável</h4>
                        <label for="alunoResponsavel" class="form-label">Nome</label>
                        <input type="text" class="form-control" name="alunoResponsavel" id="alunoResponsavel"
                        value="<?= isset($paciente) && $paciente->getTecResponsavel() ? $paciente->getTecResponsavel() : '' ?>">

                        <label for="iperiodoMatutino" class="form-check-label">Matutino</label>
                        <input type="radio" class="form-check-input" name="periodo" value="Matutino" id="iperiodoMatutino"
                        <?php isset($paciente) && strcmp($paciente->getHorarioTec(),"Matutino") ? print "checked" :  ''?>>

                        <label for="iperiodoNoturno" class="form-check-label">Noturno</label>
                        <input type="radio" class="form-check-input" name="periodo" value="Noturno" id="iperiodoNoturno"
                        <?php isset($paciente) && strcmp($paciente->getHorarioTec(),"Noturno") ? print "checked" :  ''?>>
                    </div>

                    <div class="mb-3">
                        <label for="ihistoricoMedico" class="form-label">Histórico Médico</label>
                        <textarea class="form-control" id="ihistoricoMedico" name="historicoMedico" rows="3">
                            <?= isset($paciente) && $paciente->getHistoricoMedico() ? $paciente->getHistoricoMedico() : '' ?></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="iresultados" class="form-label">Resultados</label>
                        <textarea class="form-control" id="iresultados" name="resultados" rows="3">
                            <?= isset($paciente) && $paciente->getResultados() ? $paciente->getResultados() : '' ?></textarea>
                    </div>

                    <div class="d-grid">
                        <?php if(isset($paciente) && $paciente->getId()): ?>
                          <button type="submit" name="salvar_edicao" class="btn btn-primary">Salvar Edição</button>
                        <?php else: ?>
                          <button type="submit" name="Cadastrar" class="btn btn-success">Cadastrar</button>
                        <?php endif; ?>
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

  <!-- TABELA CENTRALIZADA -->
<div class="container">
  <div class="row justify-content-center mt-4">
    <div class="col-lg-10">
      <div class="table-responsive">
        <table class="table table-bordered text-center align-middle">
          <thead class="table-light">
            <tr>
              <th scope="col">Id</th>
           <!--   <th scope="col">Nome</th> -->
              <th scope="col">CPF</th>
              <th scope="col">Data de Nascimento</th>
              <th scope="col">Telefone</th>
              <th scope="col">Email</th>
              <th scope="col">Nome da mãe</th>
              <th scope="col">Endereço</th>
              <th scope="col">Exame solicitado</th>
              <th scope="col">Toma remédio contínuo</th>
              <th scope="col">Qual Remédio</th>
              <th scope="col">Patologia</th>
              <th scope="col">Qual Patologia</th>
              <th scope="col">Técnico responsável</th>
              <th scope="col">Horário do Técnico</th>
              <th scope="col">Histórico Médico</th>
              <th scope="col">Resultados</th>
              <th scope="col">Ações</th>
            </tr>
          </thead>
          <tbody>
            <?php                         
              LerPaciente();                        
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

   
</body>
</html>
