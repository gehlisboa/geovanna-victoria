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
  background-color: #08080a;
  color: #e6e6e6;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.vitrine-section {
  padding: 40px 40px 60px 40px; /* espaço no topo para o menu */
  background-color: #111111;
  min-height: 100vh;
}

.vitrine-title {
        color: white;
        margin-bottom: 30px;
        text-align: center;
        font-size: 1.8rem;
        font-weight: bold;
    } 

.card-veiculo {
  background-color: #1a1a1a;
  border-radius: 16px;
  padding: 20px;
  color: white;
  text-align: center;
  box-shadow: 0 6px 20px rgba(0, 0, 0, 0.4);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  border: 1px solid #2a2a2a;
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

.card-veiculo:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 25px rgba(100, 100, 255, 0.1);
}

.card-veiculo img {
  width: 100%;
  height: 220px;
  object-fit: cover;
  border-radius: 12px;
  margin-bottom: 20px;
}

.card-veiculo h5 {
  font-size: 1.4rem;
  margin-bottom: 10px;
  color:rgb(190, 205, 254);
   
}

.card-veiculo p {
  font-size: 0.95rem;
  color: #bbbbbb;
  flex-grow: 1;
}

.btn-ver {
  background-color: #dcdcff;
  color: #111;
  font-weight: bold;
  padding: 10px 18px;
  border-radius: 8px;
  border: none;
  margin-top: 15px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.btn-ver:hover {
  background-color: #a0a0ff;
  color: #fff;
}

@media (max-width: 768px) {
  .vitrine-title {
    font-size: 2rem;
  }
}
</style>

<div class="vitrine-section">
  <h1 class="vitrine-title">VITRINE VIRTUAL</h1>
  <div class="container">
    <div class="row g-4 justify-content-center">

      <div class="col-md-4">
        <div class="card-veiculo">
          <img src="../imagens/ferrari.jpeg" alt="Ferrari">
          <h5>Ferrari 812 Superfast</h5>
          <p>V12 com 800cv. Estilo e potência com DNA de pista.</p>
          <button class="btn-ver">Ver Detalhes</button>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card-veiculo">
          <img src="../imagens/lamborghini_azul.jpg" alt="lamborghini">
          <h5>Lamborghini Aventador</h5>
          <p>Design ousado, emoção a cada curva.</p>
          <button class="btn-ver">Ver Detalhes</button>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card-veiculo">
          <img src="../imagens/bulgatti.jpg" alt="bugatti">
          <h5>Bugatti La Voiture Noire</h5>
          <p>Luxo, exclusividade e velocidade que desafia os limites.</p>
          <button class="btn-ver">Ver Detalhes</button>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card-veiculo">
          <img src="../imagens/maserati.jpg" alt="maserati">
          <h5>Maserati MC20</h5>
          <p>Detalhes de luxo e uma personalização refinada em cada curva.</p>
          <button class="btn-ver">Ver Detalhes</button>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card-veiculo">
          <img src="../imagens/mclaren.jpg" alt="McLaren">
          <h5>McLaren Grey</h5>
          <p>Exala esportividade e elegância em cada detalhe.</p>
          <button class="btn-ver">Ver Detalhes</button>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card-veiculo">
          <img src="../imagens/porshe_rosa.jpg" alt="Porsche Rosa">
          <h5>Porsche 718 Rosa</h5>
          <p>Potência e sofisticação com um toque de ousadia. Para quem dirige com estilo e atitude.</p>
          <button class="btn-ver">Ver Detalhes</button>
        </div>
      </div>

    </div>
  </div>
</div>

</body>
</html>
