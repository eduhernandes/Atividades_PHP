<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação de Inscrição</title>
</head>
<body>
    <h1>Confirmação de Inscrição</h1>
    <p>Por favor, verifique os dados abaixo antes de confirmar sua inscrição:</p>

    <!-- Dados Pessoais -->
    <h2>Dados Pessoais</h2>
    <p><strong>Nome Completo:</strong> <?php echo htmlspecialchars($_POST['nome']); ?></p>
    <p><strong>Data de Nascimento:</strong> <?php echo htmlspecialchars($_POST['data_nascimento']); ?></p>
    <p><strong>Sexo:</strong> <?php echo htmlspecialchars($_POST['sexo']); ?></p>
    <p><strong>Estado Civil:</strong> <?php echo htmlspecialchars($_POST['estado_civil']); ?></p>
    <p><strong>Nacionalidade:</strong> <?php echo htmlspecialchars($_POST['nacionalidade']); ?></p>
    <p><strong>Número do RG:</strong> <?php echo htmlspecialchars($_POST['rg']); ?></p>
    <p><strong>CPF:</strong> <?php echo htmlspecialchars($_POST['cpf']); ?></p>
    <p><strong>Logradouro:</strong> <?php echo htmlspecialchars($_POST['logradouro']); ?></p>
    <p><strong>Número:</strong> <?php echo htmlspecialchars($_POST['numero']); ?></p>
    <p><strong>Complemento:</strong> <?php echo htmlspecialchars($_POST['complemento']); ?></p>
    <p><strong>Bairro:</strong> <?php echo htmlspecialchars($_POST['bairro']); ?></p>
    <p><strong>Cidade:</strong> <?php echo htmlspecialchars($_POST['cidade']); ?></p>
    <p><strong>Estado:</strong> <?php echo htmlspecialchars($_POST['estado']); ?></p>
    <p><strong>CEP:</strong> <?php echo htmlspecialchars($_POST['cep']); ?></p>
    <p><strong>Telefone de Contato:</strong> <?php echo htmlspecialchars($_POST['telefone']); ?></p>
    <p><strong>E-mail:</strong> <?php echo htmlspecialchars($_POST['email']); ?></p>

    <!-- Escolaridade -->
    <h2>Escolaridade</h2>
    <p><strong>Nível de Escolaridade:</strong> <?php echo htmlspecialchars($_POST['escolaridade']); ?></p>

    <!-- Confirmação -->
    <h2>Confirmação</h2>
    <p><?php echo htmlspecialchars($_POST['declaracao']); ?></p>

    <form action="finalizar_inscricao.php" method="post">
        <!-- Dados Pessoais -->
        <input type="hidden" name="nome" value="<?php echo htmlspecialchars($_POST['nome']); ?>">
        <input type="hidden" name="data_nascimento" value="<?php echo htmlspecialchars($_POST['data_nascimento']); ?>">
        <input type="hidden" name="sexo" value="<?php echo htmlspecialchars($_POST['sexo']); ?>">
        <input type="hidden" name="estado_civil" value="<?php echo htmlspecialchars($_POST['estado_civil']); ?>">
        <input type="hidden" name="nacionalidade" value="<?php echo htmlspecialchars($_POST['nacionalidade']); ?>">
        <input type="hidden" name="rg" value="<?php echo htmlspecialchars($_POST['rg']); ?>">
        <input type="hidden" name="cpf" value="<?php echo htmlspecialchars($_POST['cpf']); ?>">
        <input type="hidden" name="logradouro" value="<?php echo htmlspecialchars($_POST['logradouro']); ?>">
        <input type="hidden" name="numero" value="<?php echo htmlspecialchars($_POST['numero']); ?>">
        <input type="hidden" name="complemento" value="<?php echo htmlspecialchars($_POST['complemento']); ?>">
        <input type="hidden" name="bairro" value="<?php echo htmlspecialchars($_POST['bairro']); ?>">
        <input type="hidden" name="cidade" value="<?php echo htmlspecialchars($_POST['cidade']); ?>">
        <input type="hidden" name="estado" value="<?php echo htmlspecialchars($_POST['estado']); ?>">
        <input type="hidden" name="cep" value="<?php echo htmlspecialchars($_POST['cep']); ?>">
        <input type="hidden" name="telefone" value="<?php echo htmlspecialchars($_POST['telefone']); ?>">
        <input type="hidden" name="email" value="<?php echo htmlspecialchars($_POST['email']); ?>">

        <!-- Escolaridade -->
        <input type="hidden" name="escolaridade" value="<?php echo htmlspecialchars($_POST['escolaridade']); ?>">

        <!-- Confirmação -->
        <input type="hidden" name="declaracao" value="<?php echo htmlspecialchars($_POST['declaracao']); ?>">

        <input type="submit" value="Confirmar Inscrição">
        <input type="button" value="Editar Dados" onclick="window.history.back();">
    </form>
</body>
</html>
