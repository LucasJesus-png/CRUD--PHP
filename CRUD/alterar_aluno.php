<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Title</title>
</head>

<?php
include "conn.php";

$rm = $_GET["rm"];


$dados = $conn->query("SELECT * FROM aluno where rm = '$rm'");

while ($linha = mysqli_fetch_array($dados) ){
    $rm = $linha["rm"];
    $nome = $linha["nome"];
    $nota1 = $linha["nota1"];
    $nota2 = $linha["nota2"];
    $nota3 = $linha["nota3"];
    $faltas = $linha["faltas"];
 
}






$form = <<<SCRIPT

    <form action="salvar_alteracao_aluno.php" method="POST">
        <label for="rm">RM:</label> <br>
        <input type="text" id="rm" name="rm" value="$rm" readonly>
        <br><br>
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" value="$nome" >
        <br><br>
        <label for="nota1">Nota1: </label><br>
        <input type="number" id="nota1" name="nota1" maxlength="2" value="$nota1">
        <br><br>
        <label for="nota2">Nota2: </label><br>
        <input type="number" id="nota2" name="nota2"  maxlength="2" value="$nota2">
        <br><br>
        <label for="nota3">Nota3: </label><br>
        <input type="number" id="nota3" name="nota3"  maxlength="2" value="$nota3">
        <br><br>
        <label for="faltas">Faltas:</label><br>
        <input type="number" id="faltas" name="faltas" value="$faltas">
        <br><br>
        <input type="submit" value="Salvar" type="button" class="btn btn-success"> 
        <input type="reset" value="Limpar" type="button" class="btn btn-danger">
        <br><br>
 
 
    </form>
    
SCRIPT;
echo "$form";



