<?php
include 'header.php';
?>

<div class="form-container">
    <div class="form">
        <h2>Cadastrar nova matéria</h2>
        <form action="actionCreate.php" method="POST">
            <input name="materia" placeholder="Matéria" type="text" required>
            <input name="numeroAulas" type="number" placeholder="Número previsto de aulas" required>
            <input name="maximoFaltas" type="number" placeholder="Número de máximo de faltas" required>
            <input type="submit" value="Cadastrar">
        </form>
    </div>
</div>

<?php
include 'footer.php';
?>
