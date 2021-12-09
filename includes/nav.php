<?php $page = basename($_SERVER['PHP_SELF']) ?>
<nav class="navbar navbar-expand-md navbar-dark bg-general p-3">
  <a class="navbar-brand" href="./index.php"> <img class="img-fluid rounded mx-auto d-block" src="image/logo.png" alt="logotipo do portal acessibilidade na web"
      width="60"></a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navHeader"
    aria-controls="navHeader" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse " id="navHeader">
    <ul class="navbar-nav align-items-md-center px-3 gap-2">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Início</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="acessibilidade.php">
          Acessibilidade
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="quemsomos.php">Sobre </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contato.php">Contato </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="normas.php">Normas de uso</a>
      </li>
      <li><a class="nav-link get-content" href="#content">Ir para o conteúdo</a></li>
    </ul>
  </div>
</nav>