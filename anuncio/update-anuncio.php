<?php 
include '../config/connection.php';
include '../includes/header.php';
include '../includes/menu.php';

$id = $_GET['id'] ?? null;

if (!$id) {
    echo "O id é obrigatório!!!";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST['id'];
    $titulo = $_POST['titulo_anuncio'];
    $descricao = $_POST['descricao_anuncio'];
    $data = $_POST['data_publicacao'];
    $marca = $_POST['marca_veiculo'];
    $modelo = $_POST['modelo_veiculo'];
    $ano = $_POST['ano_veiculo'];
    $cor = $_POST['cor_veiculo'];
    $placa = $_POST['placa_veiculo'];
    $proprietario = $_POST['nome_proprietario'];
    $telefone = $_POST['telefone_proprietario'];

    $stmt = $pdo->prepare('
        UPDATE anuncios SET 
            titulo_anuncio = :titulo, 
            descricao_anuncio = :descricao, 
            data_publicacao = :data, 
            marca_veiculo = :marca, 
            modelo_veiculo = :modelo, 
            ano_veiculo = :ano, 
            cor_veiculo = :cor, 
            placa_veiculo = :placa, 
            nome_proprietario = :proprietario, 
            telefone_proprietario = :telefone 
        WHERE id = :id
    ');
    $stmt->execute([
        ':id' => $id,
        ':titulo' => $titulo,
        ':descricao' => $descricao,
        ':data' => $data,
        ':marca' => $marca,
        ':modelo' => $modelo,
        ':ano' => $ano,
        ':cor' => $cor,
        ':placa' => $placa,
        ':proprietario' => $proprietario,
        ':telefone' => $telefone,
    ]);

    header("Location: read-anuncio.php");
    exit();
}

$stmt = $pdo->prepare('SELECT * FROM anuncios WHERE id = :id');
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();
$anuncio = $stmt->fetch();

if (!$anuncio) {
    echo "Anúncio não encontrado.";
    exit();
}
?>

<style>
    body {
        background-color: #111;
        font-family: 'Segoe UI', sans-serif;
    }

    .form-editar {
        max-width: 800px;
        margin: 50px auto;
        background-color: #1e1e26;
        padding: 40px;
        border-radius: 12px;
        box-shadow: 0 0 60px rgba(0, 0, 0, 0.4);
    }

    .form-editar label {
        color:rgb(206, 206, 255);
        font-weight: bold;
        margin-top: 15px;
    }

    .form-editar input {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        border-radius: 6px;
        border: 1px solid #888;
        background-color: #1a1a1a;
        color: white;
    }

    .form-editar input::placeholder {
        color: #aaa;
    }

    .form-editar button {
        border: none;
        padding: 10px 20px;
        border-radius: 8px;
        margin-top: 25px;
        background-color: rgb(206, 206, 255);
        color: #111;
        font-weight: bold;
    }

     .form-editar button:hover {
        background-color: white;
        color: #111;
    }

     h2.title-form {
        color: white;
        margin-bottom: 30px;
        text-align: center;
        font-size: 1.8rem;
        font-weight: bold;
    } 
</style>

<form class="form-editar" action="" method="POST">
     <h2 class="title-form">ATUALIZAR VEÍCULO</h2>
    <input type="hidden" name="id" value="<?= $anuncio['id'] ?>">

    <label>Título:</label>
    <input type="text" name="titulo_anuncio" value="<?= $anuncio['titulo_anuncio'] ?>">

    <label>Descrição:</label>
    <input type="text" name="descricao_anuncio" value="<?= $anuncio['descricao_anuncio'] ?>">

    <label>Data:</label>
    <input type="date" name="data_publicacao" value="<?= $anuncio['data_publicacao'] ?>">

    <label>Marca:</label>
    <input type="text" name="marca_veiculo" value="<?= $anuncio['marca_veiculo'] ?>">

    <label>Modelo:</label>
    <input type="text" name="modelo_veiculo" value="<?= $anuncio['modelo_veiculo'] ?>">

    <label>Ano:</label>
    <input type="number" name="ano_veiculo" value="<?= $anuncio['ano_veiculo'] ?>">

    <label>Cor:</label>
    <input type="text" name="cor_veiculo" value="<?= $anuncio['cor_veiculo'] ?>">

    <label>Placa:</label>
    <input type="text" name="placa_veiculo" value="<?= $anuncio['placa_veiculo'] ?>">

    <label>Proprietário:</label>
    <input type="text" name="nome_proprietario" value="<?= $anuncio['nome_proprietario'] ?>">

    <label>Telefone:</label>
    <input type="text" name="telefone_proprietario" value="<?= $anuncio['telefone_proprietario'] ?>">

    <button type="submit">Atualizar</button>
</form>

<?php include '../includes/footer.php'; ?>
