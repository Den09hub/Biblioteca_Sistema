<?php

$server_name = 'localhost';
$user_name = 'root';
$password = '';
$db = 'db_biblioteca';

$conn = new mysqli($server_name, $user_name, $password, $db);

if($conn->connect_error){
    die("Erro na conexão: " . $conn->connect_error);
}

$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$dataPublicacao = $_POST['data_publicacao'];
$dataChegada = $_POST['data_chegada'];
$genero = $_POST['genero'];
$sinopse = $_POST['sinopse'];

$stmt = $conn->prepare('INSERT INTO (titulo, autor, $data_publicacao, data_chegada, genero, sinopse) VALUES (?, ?, ?, ?, ?, ?)');
$stmt->bind_param('ssssss', $titulo, $autor, $dataPublicacao, $dataChegada, $genero, $sinopse);

if($conn->query($sql) == true){
    echo 'O livro foi cadastrado com sucesso!';
} else{
    echo 'Erro: ' . $sql . '<br>' .$conn->error;
}

$conn->close();


?>