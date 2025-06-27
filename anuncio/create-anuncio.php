<?php
include '../includes/header.php'; 
include '../includes/menu.php';
include '../config/connection.php';
?> 

<style>
    body {
        background-color: #111;
        font-family: 'Segoe UI', sans-serif;
    }

    label {
        color: rgb(206, 206, 255);
    }

    .form-control {
        background-color: #111;
        color: white;
        border: 1px solid #888;
    }

    .form-control:focus {
        background-color: #1a1a1a;
        color: white;
        box-shadow: 0 0 0 0.2rem rgba(206, 206, 255, 0.2);
    }

    .btn-dark {
        background-color: rgb(206, 206, 255);
        color: #111;
        font-weight: bold;
        border: none;
        transition: background-color 0.3s ease;
    }

    .btn-dark:hover {
        background-color: white;
        color: #111;
    }

    .form-container {
        margin-top:30px;
        margin-bottom:30px;
        background-color: #1e1e26;
        box-shadow: 0 0 60px rgba(0, 0, 0, 0.4);
        border-radius: 12px;
    }

    .form-label {
        font-weight: 500;
        font-weight:bold;
}
    

    h2.title-form {
        color: white;
        margin-bottom: 30px;
        text-align: center;
        font-size: 1.8rem;
        font-weight: bold;
}
    

</style>

<div class="container-fluid">
    <div class="row d-flex justify-content-center">
        <div class="col-12 col-lg-8 p-5 form-container">
            <h2 class="title-form">CADASTRAR NOVO VEÍCULO</h2>
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="titulo_anuncio" class="form-label">Título do anúncio</label>
                    <input type="text" name="titulo_anuncio" id="titulo_anuncio" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="descricao_anuncio" class="form-label">Descrição do anúncio</label>
                    <input type="text" name="descricao_anuncio" id="descricao_anuncio" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="data_publicacao" class="form-label">Data da publicação</label>
                    <input type="date" name="data_publicacao" id="data_publicacao" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="marca_veiculo" class="form-label">Marca do veículo</label>
                    <input type="text" name="marca_veiculo" id="marca_veiculo" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="modelo_veiculo" class="form-label">Modelo do veículo</label>
                    <input type="text" name="modelo_veiculo" id="modelo_veiculo" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="ano_veiculo" class="form-label">Ano do veículo</label>
                    <input type="number" name="ano_veiculo" id="ano_veiculo" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="cor_veiculo" class="form-label">Cor do veículo</label>
                    <input type="text" name="cor_veiculo" id="cor_veiculo" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="placa_veiculo" class="form-label">Placa do veículo</label>
                    <input type="text" name="placa_veiculo" id="placa_veiculo" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="nome_proprietario" class="form-label">Nome do proprietário</label>
                    <input type="text" name="nome_proprietario" id="nome_proprietario" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="telefone_proprietario" class="form-label">Telefone do proprietário</label>
                    <input type="text" name="telefone_proprietario" id="telefone_proprietario" class="form-control">
                </div>
                <button type="submit" class="btn btn-dark">Cadastrar</button>
            </form>
        </div>
     </div>
</div>

<?php
$titulo = isset($_POST['titulo_anuncio']) ? $_POST['titulo_anuncio'] : exit();
$descricao = isset($_POST['descricao_anuncio']) ? $_POST['descricao_anuncio'] : exit();
$data = isset($_POST['data_publicacao']) ? $_POST['data_publicacao'] : exit();
$marca = isset($_POST['marca_veiculo']) ? $_POST['marca_veiculo'] : exit();
$modelo = isset($_POST['modelo_veiculo']) ? $_POST['modelo_veiculo'] : exit();
$ano = isset($_POST['ano_veiculo']) ? $_POST['ano_veiculo'] : exit();
$cor = isset($_POST['cor_veiculo']) ? $_POST['cor_veiculo'] : exit();
$placa = isset($_POST['placa_veiculo']) ? $_POST['placa_veiculo'] : exit();
$proprietario = isset($_POST['nome_proprietario']) ? $_POST['nome_proprietario'] : exit();
$telefone = isset($_POST['telefone_proprietario']) ? $_POST['telefone_proprietario'] : exit();

$stmt = $pdo->prepare('INSERT INTO anuncios (
    titulo_anuncio, descricao_anuncio, data_publicacao,
    marca_veiculo, modelo_veiculo, ano_veiculo,
    cor_veiculo, placa_veiculo, nome_proprietario, telefone_proprietario
) VALUES (
    :titulo, :descricao, :data, :marca, :modelo, :ano,
    :cor, :placa, :proprietario, :telefone
)');
$stmt->bindParam(':titulo', $titulo);
$stmt->bindParam(':descricao', $descricao);
$stmt->bindParam(':data', $data);
$stmt->bindParam(':marca', $marca);
$stmt->bindParam(':modelo', $modelo);
$stmt->bindParam(':ano', $ano);
$stmt->bindParam(':cor', $cor);
$stmt->bindParam(':placa', $placa);
$stmt->bindParam(':proprietario', $proprietario);
$stmt->bindParam(':telefone', $telefone);
$stmt->execute();
?>

<?php include '../includes/footer.php'; ?>
