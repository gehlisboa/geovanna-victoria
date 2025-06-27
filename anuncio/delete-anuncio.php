<?php
    include '../includes/header.php'; 
    include '../config/connection.php';

    $id = isset($_GET['id']) ? $_GET['id'] : exit();

    if (empty($id)){
        echo "É necessário informar o código!";
        exit();
    }

    $stmt = $pdo->prepare('DELETE from anuncios WHERE id=:id');
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    Header("Location: read-anuncio.php");

    include '../includes/footer.php'; 
?>



