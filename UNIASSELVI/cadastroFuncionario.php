<?php

$host = "localhost";  
$usuario = "root";    
$senha = "root";          
$banco = "uniasselvi";

$conn = new mysqli($host, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nome = $_POST["nome"];
    $cargo = $_POST["cargo"];
    $descricaocargo = $_POST["descricaocargo"];
    $setor = $_POST["setor"];
    $salario = $_POST["salario"];

    echo "Nome: $nome, Cargo: $cargo, Descrição do Cargo: $descricaocargo, Setor: $setor, Salário: $salario<br>";

  
    $nome = $conn->real_escape_string($nome);
    $cargo = $conn->real_escape_string($cargo);
    $descricaocargo = $conn->real_escape_string($descricaocargo);
    $setor = $conn->real_escape_string($setor);
    $salario = $conn->real_escape_string($salario);

    $sql = "INSERT INTO funcionario (nome, cargo, descricaocargo, setor, salario) 
            VALUES ('$nome', '$cargo', '$descricaocargo', '$setor', '$salario')";
    
    echo "Consulta SQL: $sql<br>"; 

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Funcionário cadastrado com sucesso!'); window.location.href = 'index.html';</script>";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
