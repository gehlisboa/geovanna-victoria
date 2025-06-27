<?php
include '../includes/header.php';
include '../includes/menu.php';
?>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

  body {
  background: rgb(8, 8, 9);
}

.car-image-wrapper {
    position: absolute;
    bottom: 0;
    right: 0;
    width: 700px; /* aumenta a largura */
    max-width: none;
    transform: scale(1.2); /* aumenta a imagem */
    transform-origin: bottom right; /* ponto de referência do scale */
    z-index: 1;
}

.car-section {
    position: relative;
    background-color: #111;
    color: white;
    padding: 60px 40px 40px 40px;
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    overflow: visible; /* permite a imagem sair */
    min-height: auto;
}


.car-img {
    width: 100%;
    height: auto;
    display: block;
}


    .car-text {
        max-width: 50%;
        z-index: 2;
    }

    .car-text h1 {
        font-size: 2.5rem;
        font-weight: bold;
        line-height: 1.3;
    }

    .car-text p {
        font-size: 1.2rem;
        margin-top: 20px;
        line-height: 1.5;
    }

    .car-image-wrapper {
        max-width: 48%;
    }

    .car-img {
        width: 100%;
        height: auto;
    }

    .car-cards {
        background-color: #cdd6e0;
        padding: 40px 0;
    }

    .card-veiculo {
        background-color: #111;
        border-radius: 12px;
        padding: 20px;
        color: white;
        text-align: center;
        box-shadow: 0 4px 12px rgba(0,0,0,0.3);
        transition: transform 0.3s ease;
    }

    .card-veiculo:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(100, 100, 255, 0.1);
}


    .btn-ver {
        background-color: #f1f1f1;
        color: #111;
        font-weight: bold;
        padding: 6px 20px;
        border-radius: 8px;
        border: none;
        margin-top: 10px;
    }

    .btn-ver:hover {
        background-color: #a0a0ff;
        color: #fff;
}

    @media (max-width: 768px) {
        .car-section {
            flex-direction: column;
            text-align: center;
        }

        .car-text, .car-image-wrapper {
            max-width: 100%;
        }
    }
    .car-cards {
    background-color: #1e1e26; /* tom frio para destacar do fundo */
    padding: 60px 40px;
    box-shadow: 0 0 60px rgba(0, 0, 0, 0.4); /* sombreamento suave */
    margin-top: 40px;
}

.shadow-box {
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
}

</style>
</head>
<body>

<div class="car-section">
    <div class="car-text">
        <h1>ENCONTRE AQUI O VEÍCULO QUE TRADUZ SEU ESTILO DE VIDA<br>E PADRÃO DE EXCELÊNCIA</h1>
        <p>
            Descubra veículos de alto padrão selecionados para quem busca sofisticação, desempenho e segurança em cada detalhe.
        </p>
    </div>
    <div class="car-image-wrapper">
        <img src="../imagens/porshe.png" alt="Porsche Cinza Fosco" class="car-img">
    </div>
</div>
<div class="car-cards">
  <div class="container">
    <div class="row justify-content-center g-4">

      <div class="col-md-4">
        <div class="card-veiculo shadow-box">
          <img src="../imagens/bmw.jpg" class="img-fluid mb-3 rounded" alt="Carro 1">
          <h5 class="fw-bold">BMW M4 Competition</h5>
          <p>Motor 3.0 TwinPower Turbo, 510cv. Esportividade e luxo em cada detalhe.</p>
          <button class="btn-ver">Ver Detalhes</button>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card-veiculo shadow-box">
          <img src="../imagens/audi.jpg" class="img-fluid mb-3 rounded" alt="Carro 2">
          <h5 class="fw-bold">Audi RS7 Sportback</h5>
          <p>Design agressivo com motor V8 biturbo. Elegância e potência de sobra.</p>
          <button class="btn-ver">Ver Detalhes</button>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card-veiculo shadow-box">
          <img src="../imagens/mercedes.jpg" class="img-fluid mb-3 rounded" alt="Carro 3">
          <h5 class="fw-bold">Mercedes AMG GT</h5>
          <p>Performance e sofisticação em um superesportivo para verdadeiros entusiastas.</p>
          <button class="btn-ver">Ver Detalhes</button>
        </div>
      </div>

    </div>
  </div>
</div>


</body>
</html>
