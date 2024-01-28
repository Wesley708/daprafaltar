<?php

include 'conexao.php';

$id = $_POST['id'];
$materia = $_POST['materia'];
$numeroAulas = $_POST['numeroAulas'];
$maximoFaltas = $_POST['maximoFaltas'];

$sql = "UPDATE materias SET nome='$materia', aulas=$numeroAulas, faltas=$maximoFaltas WHERE id = $id";

mysqli_query($link, $sql);

header('Location:http://localhost/daprafaltar');

?>