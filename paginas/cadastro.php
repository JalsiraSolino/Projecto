<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/menu.css">
    <title>Cadastrar Aluno</title>    
</head>
<body>
    <h2>Cadastrar Aluno</h2>
    <div class="box">
        <form action="cadastro.php" method="POST">
            
                <div class="boxform">
                    <input type="text" name="nome" id="nome" required class="inputLabel">
                    <label for="nome" class="labelinput"> Nome completo</label><br><br>
                </div>
                
                <div class="boxform">
                    <input type="email" name="email" id="email" class="inputLabel" required>
                    <label for="email" class="labelinput">Email</label><br><br>
                </div>
                
                <div class="boxform">
                    <input type="text" name="telefone" id="telefone" placeholder="9XX XXX XXX" class="inputLabel">
                    <label for="cidade" class="labelinput">Telefone</label> 
                </div> 
                <input type="submit" id="submit" value="Cadastrar">
        </form>
    </div>
    
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
