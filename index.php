<!DOCTYPE html>
<html lang="pt-BR">

<html>

<head>
    <title>Cadastro de Alunos</title>
</head>

<body>
    <h1>Cadastro de Alunos</h1>
    <form action="alunos.php" method="post">
        <?php for ($i = 1; $i <= 10; $i++): ?>
            <label for="nome<?php echo $i; ?>">Nome do aluno <?php echo $i; ?>:</label>
            <input type="text" name="nome<?php echo $i; ?>" required><br>

            <label for="nota<?php echo $i; ?>">Nota do aluno <?php echo $i; ?>:</label>
            <input type="number" name="nota<?php echo $i; ?>" step="0.01" required><br><br>
        <?php endfor; ?>

        <input type="submit" value="Enviar">
    </form>
</body>

</html>