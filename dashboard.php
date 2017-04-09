<?php
    // Importanto sttus do Login
    require_once("statusLogin.php");
    
    /* Importando Conexao */
    require_once("connection/dsn.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
      <h1>Dashboard</h1>
      <a href="add.php">Cadastrar</a>
      <a href="deslogar.php">sair</a>
    <table>
        <thead>
            <th>id</th>
            <th>nome</th>
            <th>login</th>
            <th>Ações</th>
        </thead>
        <tbody> 
           <?php 
                $stmt = $pdo->query('SELECT * FROM usuarios');
                while ($row = $stmt->fetch()):
           ?>
           <tr>
             <td><?= $row["id"]; ?> </td>
             <td><?= $row["nome"]; ?> </td>
             <td><?= $row["login"]; ?> </td>
            <td> <a href="edit.php?id=<?= $row["id"]; ?>"> Editar</a> </td>
            <td> <a href="delete.php?id=<?= $row["id"]; ?>"> Apagar</a> </td>
           </tr>
           <?php endwhile; ?> 
        </tbody>
    </table>
<body>
</body>
</html>