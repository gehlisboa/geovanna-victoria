<nav class="navbar navbar-expand-lg bg-custom">
    <div class="container-fluid">
        <a class="navbar-brand" href="../public/index.php">VITTRINICAR</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link" href="../public/index.php">INÍCIO</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="../public/anuncios.php">VITRINE</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="../public/login.php">LOGIN</a>
                </li>
               
                <li class="nav-item">
                    <a class="nav-link" href="../anuncio/create-anuncio.php">ADICIONAR</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="../anuncio/read-anuncio.php">LISTAR</a>
                </li>

            </ul>
        </div>
    </div>
</nav>


<style>
    .navbar.bg-custom {
  background: rgb(8, 8, 9);
  font-weight:bold;
}

.navbar.bg-custom .navbar-brand,
.navbar.bg-custom .nav-link {
  color: rgb(206, 206, 255) !important;
}

.navbar.bg-custom .nav-link:hover {
  color: white !important;
}
</style>
