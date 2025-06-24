
<div class="card-body formulario-padrao">
    <form action="../Controller/ProfessorController.php" method="post">
    <input type="hidden" name="id" value="<?= isset($professor) && $professor->getId() ? $professor->getId() : '' ?>">

        <div class="mb-3">
            <label for="inome" class="form-label">Nome Completo</label>
            <input type="text" class="form-control" id="inome" name="nome" required
            value="<?= isset($professor) && $professor->getNome() ? $professor->getNome() : '' ?>">
        </div>

        <div class="mb-3">
            <label for="cpf" class="form-label">CPF</label>
            <input type="text" class="form-control" id="cpf" name="cpf" required
            value="<?= isset($professor) && $professor->getCpf() ? $professor->getCpf() : '' ?>">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" required
            value="<?= isset($professor) && $professor->getEmail() ? $professor->getEmail() : '' ?>">
        </div>

        <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control" id="senha" name="senha" required
            value="<?= isset($professor) && $professor->getSenha() ? $professor->getSenha() : '' ?>">
        </div>

        <div class="mb-3">
            <label for="iano" class="form-label">Ano Letivo</label>
            <input type="date" class="form-control" id="iano" name="anoletivo" required
            value="<?= isset($professor) && $professor->getAnoLetivo() ? $professor->getAnoLetivo() : '' ?>">
        </div>

         <div class="mb-3">
            <h4>Cargo:</h4>
            <label for="ialuno" class="form-check-label">Aluno</label>
            <input type="radio" class="form-check-input" name="cargo" id="ialuno" value="ialuno"
            <?php isset($professor) && strcmp($professor->getCargo(),"ialuno") ? print "checked" :  ''?>>

            <label for="iprofessor" class="form-check-label">Professor</label>
            <input type="radio" class="form-check-input" name="cargo" id="iprofessor" value="iprofessor"
             <?php isset($professor) && strcmp($professor->getCargo(),"iprofessor") ? print "checked" :  ''?>>
        </div> 

        <div class="d-grid">
            <?php if(isset($professor) && $professor->getId()): ?>
                <button type="submit" name="salvar_edicao" class="btn btn-primary">Salvar Edição</button>
            <?php else: ?>
                <button type="submit" name="Cadastrar" class="btn btn-success">Cadastrar</button>
            <?php endif; ?>
        </div>

</div>
</form>