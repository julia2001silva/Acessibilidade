<?php $page = basename($_SERVER['PHP_SELF']) ?>
<nav class="navbar navbar-expand-md navbar-dark bg-primary p-3">

            <a class="navbar-brand" href="#">Acessibilidade</a>
          
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navHeader"
              aria-controls="navHeader" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse " id="navHeader">
          
              <ul class="navbar-nav me-auto align-items-md-center">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link dropdown-toggle" href="acessibilidade.php" role="button" id="dropdownAcessibilidade" data-bs-toggle="dropdown" aria-expanded="false">
                      Acessibilidade
                    </a>
                  
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Introdução</a></li>
                      <li><a class="dropdown-item" href="#">Estruturas</a></li>
                      <li><a class="dropdown-item" href="#">Cores</a></li>
                      <li><a class="dropdown-item" href="#">Tipografia</a></li>
                      <li><a class="dropdown-item" href="#">Imagens</a></li>
                      <li><a class="dropdown-item" href="#">Extras</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="quemsomos.php">Sobre</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contato.php">Contato</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="normas.php">Normas de uso</a>
                  </li>
              </ul>


            </div>
          
          </nav>