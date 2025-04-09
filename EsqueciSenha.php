<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esqueci Minha Senha</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .reset-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .reset-container h2 {
            margin-bottom: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="reset-container">
        <h2>Esqueci Minha Senha</h2>
        <form id="resetForm">
            <div class="form-group">
                <label for="cpf">CPF:</label>
                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite seu CPF" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Enviar</button>
            <div class="text-center mt-3">
                <a href="login.html">Voltar para o Login</a>
                <link rel="stylesheet" href="index2.html">
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.getElementById('resetForm').addEventListener('submit', function(event) {
            var cpf = document.getElementById('cpf').value;

            // Validação básica do CPF (exemplo simplificado)
            var cpfPattern = /^\d{3}\.\d{3}\.\d{3}-\d{2}$/;
            if (!cpfPattern.test(cpf)) {
                alert('Por favor, insira um CPF válido.');
                event.preventDefault();
            }
        });
    </script>
</body>
</html>
