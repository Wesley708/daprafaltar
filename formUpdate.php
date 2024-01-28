<?php
include 'header.php';

$id = $_GET['id'];
$materia = $_GET['materia'];
$numeroAulas = $_GET['numeroAulas'];
$maximoFaltas = $_GET['maximoFaltas'];
?>

<div class="form-container">
    <div class="form">
        <h2>Cadastrar nova matéria</h2>
        <form action="actionUpdate.php" method="POST">
            <input name="materia" placeholder="Matéria" type="text" value='<?php echo $materia ?>' required>
            <input name="numeroAulas" type="number" placeholder="Número previsto de aulas" value='<?php echo $numeroAulas ?>' required>
            <input name="maximoFaltas" type="number" placeholder="Número de máximo de faltas" value='<?php echo $maximoFaltas ?>' required>
            <input type="number" name="id" style="display: none" required value="<?php echo $id ?>">
            <input type="submit" value="Alterar">
        </form>
    </div>
</div>

<?php
include 'footer.php';
?>