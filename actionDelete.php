<?php

include 'conexao.php';

$id = $_GET['id'];
$query = "DELETE FROM materias WHERE id = $id";

$result = mysqli_query($link, $query);

header('Location:index.php');
?>