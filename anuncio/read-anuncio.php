<?php
include '../includes/header.php';
include '../includes/menu.php';
include '../config/connection.php';

$stmt = $pdo->query('SELECT * FROM anuncios');
$anuncios = $stmt->fetchAll();
?> 

<style>
    body {
        background-color: #111;
        color: rgb(206, 206, 255);
        font-family: 'Segoe UI', sans-serif;
    }

    .card-anuncio {
        background-color: #1e1e26;
        padding: 30px;
        margin: 20px auto;
        border-radius: 12px;
        box-shadow: 0 0 60px rgba(0, 0, 0, 0.4);
        width: 90%;
        max-width: 800px;
    }

    .card-anuncio p {
        margin: 25px 0;
        color: white;
        font-size: 1rem;
    }

    .card-anuncio strong {
        color: rgb(206, 206, 255);
    }

    .btn-edit {
        background-color:rgb(7, 247, 255);
        border: none;
        font-weight: bold;
        padding: 5px 15px;
        margin-right: 10px;
        margin-top: 15px;
    }

    .btn-delete {
        background-color: #dc3545;
        border: none;
        font-weight: bold;
        padding: 5px 15px;
        margin-right: 10px;
        margin-top: 15px;
    }

    .btn-edit:hover {
        background-color:rgb(66, 178, 159);
    }

    .btn-delete:hover {
        background-color: #c82333;
    }

    .title-form {
        color: white;
        margin-bottom: 30px;
        text-align: center;
        font-size: 1.8rem;
        font-weight: bold;
    } 


</style>

<?php foreach ($anuncios as $anuncio) { ?> 
    <div class="card-anuncio">
        <h2 class="title-form">LISTAR VEÍCULOS</h2>
        <p><strong>ID:</strong> <?= $anuncio["id"] ?></p>
        <p><strong>Título:</strong> <?= $anuncio["titulo_anuncio"] ?></p>
        <p><strong>Descrição:</strong> <?= $anuncio["descricao_anuncio"] ?></p>
        <p><strong>Data:</strong> <?= $anuncio["data_publicacao"] ?></p>
        <p><strong>Marca:</strong> <?= $anuncio["marca_veiculo"] ?></p>
        <p><strong>Modelo:</strong> <?= $anuncio["modelo_veiculo"] ?></p>
        <p><strong>Ano:</strong> <?= $anuncio["ano_veiculo"] ?></p>
        <p><strong>Cor:</strong> <?= $anuncio["cor_veiculo"] ?></p>
        <p><strong>Placa:</strong> <?= $anuncio["placa_veiculo"] ?></p>
        <p><strong>Proprietário:</strong> <?= $anuncio["nome_proprietario"] ?></p>
        <p><strong>Telefone:</strong> <?= $anuncio["telefone_proprietario"] ?></p>

        <a href="update-anuncio.php?id=<?= $anuncio['id']; ?>" class="btn btn-sm btn-edit">Editar</a>
        <a href="delete-anuncio.php?id=<?= $anuncio['id']; ?>" class="btn btn-sm btn-delete">Remover</a>
    </div>
<?php } ?>

<?php include '../includes/footer.php'; ?>
