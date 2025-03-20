<?php
$servername = "localhost"; //Local onde o banco está
$username = "root"; //Usuário do banco
$password = ""; //Senha do banco
$dbname = "db_biblioteca";  //Nome do banco

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);


// Verificar a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Obter os dados do formulário
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$dataPublicacao = $_POST['dataPublicacao'];
$dataChegada = $_POST['dataChegada'];
$genero = $_POST['genero'];
$sinopse = $_POST['sinopse'];

// Inserir dados no banco
$sql = "INSERT INTO usuarios (titulo, autor, data_publicacao, data_chegada, genero, sinopse)
VALUES ('$titulo', '$autor', '$dataPublicacao', '$dataChegada', '$genero', '$sinopse')";

if ($conn->query($sql) === TRUE) {
    echo "Cadastro salvo com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
