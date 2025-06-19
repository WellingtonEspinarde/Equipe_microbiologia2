
<div class="card-body formulario-padrao">
    <form action="../Controller/ProfessorController.php" method="post">

        <div class="mb-3">
            <label for="inome" class="form-label">Nome Completo</label>
            <input type="text" class="form-control" id="inome" name="nome" required>
        </div>

        <div class="mb-3">
            <label for="cpf" class="form-label">CPF</label>
            <input type="text" class="form-control" id="cpf" name="cpf" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control" id="senha" name="senha" required>
        </div>

        <div class="mb-3">
            <label for="iano" class="form-label">Ano Letivo</label>
            <input type="date" class="form-control" id="iano" name="anoletivo" required>
        </div>

         <div class="mb-3">
            <h4>Cargo:</h4>
            <label for="ialuno" class="form-check-label">Aluno</label>
            <input type="radio" class="form-check-input" name="cargo" id="ialuno" value="ialuno">

            <label for="iprofessor" class="form-check-label">Professor</label>
            <input type="radio" class="form-check-input" name="cargo" id="iprofessor" value="iprofessor">
        </div> 

        <div class="d-grid">
            <input type="submit" name="cadastrar" value="cadastrar" class="btn btn-primary">
        </div>

</div>
</form>