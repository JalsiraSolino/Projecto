<!DOCTYPE html>
<html>
<head>
    <title>Cadastrar Aluno</title>
</head>
<body>
    <h2>Cadastrar Aluno</h2>
    <form action="cadastro.php" method="POST">
        Nome: <input type="text" name="nome" required><br>
        Email: <input type="email" name="email" required><br>
        Telefone: <input type="text" name="telefone" required><br>
        <input type="submit" value="Cadastrar">
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include 'cone.php';
        
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        
        $sql = "INSERT INTO alunos (nome, email, telefone) VALUES ('$nome', '$email', '$telefone')";
        
        if ($conn->query($sql) === TRUE) {
            echo "Aluno cadastrado com sucesso!";
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();
    }
    ?>
</body>
</html>
