<?php
    include '../includes/header.php'; 
    include '../includes/menu.php';
    include '../config/connection.php';
?> 

<div class="container-fluid">
  <div class="row d-flex justify-content-center">
    <div class="col-12 col-lg-8 p-5 form-container">
      <h2 class="title-form">LOGIN</h2>
      <form action="" method="POST">
        <div class="mb-3">
          <label for="username" class="form-label">Nome de usuário</label>
          <input type="text" name="username" id="username" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Senha</label>
          <input type="password" name="password" id="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-dark">Cadastrar</button>
      </form>
    </div>
  </div>
</div>

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
    border-radius: 6px;
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
    padding: 8px 22px;
    border-radius: 6px;
  }

  .btn-dark:hover {
    background-color: white;
    color: #111;
  }

  .form-container {
    margin-top: 30px;
    margin-bottom: 30px;
    background-color: #1e1e26;
    box-shadow: 0 0 60px rgba(0, 0, 0, 0.4);
    border-radius: 12px;
  }

  .form-label {
    font-weight: bold;
  }

  h2.title-form {
    color: white;
    margin-bottom: 30px;
    text-align: center;
    font-size: 1.8rem;
    font-weight: bold;
  }
</style>


<?php
$username = isset($_POST['username']) ? $_POST['username'] : exit() ;
$password = isset($_POST['password']) ? $_POST['password'] : exit() ;

$stmt = $pdo->prepare('INSERT INTO usuario (username, password) VALUES (:username, :password)');
$stmt->bindParam(':username', $username);
$stmt->bindParam(':password', $password);
$stmt->execute();

Header("Location: read-anuncio.php");
exit();
?>