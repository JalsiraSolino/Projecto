<!DOCTYPE html>
<html>
<head>
    <title>Editar Aluno</title>
</head>
<body>
    <h2>Editar Aluno</h2>
    
    <?php
    include 'db.php';
    
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM alunos WHERE id=$id";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
    ?>
    
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        Nome: <input type="text" name="nome" value="<?php echo $row['nome']; ?>" required><br>
        Email: <input type="email" name="email" value="<?php echo $row['email']; ?>" required><br>
        Telefone: <input type="text" name="telefone" value="<?php echo $row['telefone']; ?>" required><br>
        <input type="submit" value="Atualizar">
    </form>
    
    <?php
        } else {
            echo "Aluno não encontrado.";
        }
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        
        $sql = "UPDATE alunos SET nome='$nome', email='$email', telefone='$telefone' WHERE id=$id";
        
        if ($conn->query($sql) === TRUE) {
            echo "Aluno atualizado com sucesso!";
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();
    }
    ?>
</body>
</html>
