<!DOCTYPE html>
<html>
<head>
    <title>Lista de Alunos</title>
</head>
<body>
    <h2>Lista de Alunos</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>
        <?php
        include 'db.php';
        
        $sql = "SELECT * FROM alunos";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['nome']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['telefone']}</td>
                        <td>
                            <a href='update.php?id={$row['id']}'>Editar</a>
                            <a href='delete.php?id={$row['id']}'>Excluir</a>
                        </td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>Nenhum aluno encontrado</td></tr>";
        }
        
        $conn->close();
        ?>
    </table>
</body>
</html>
