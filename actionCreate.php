<?php
include 'conexao.php';

$materia = $_POST['materia'];
$numeroAulas = $_POST['numeroAulas'];
$maximoFaltas = $_POST['maximoFaltas'];

$sql = "INSERT INTO materias(nome, aulas, faltas)
VALUES ('$materia', $numeroAulas, $maximoFaltas)";

mysqli_query($link, $sql);

header('Location:http://localhost/daprafaltar');
?>