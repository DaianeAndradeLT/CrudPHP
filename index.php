<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <title>Página Inicial - Cadastro</title>
  <style>
    body {
      background-image: url("images/wed6.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
      height: 100vh;
      margin: 0;
      padding: 0;
    }
  </style>
</head>
<body>
<h1>Início</h1>
<nav class="navbar bg-body-tertiary fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand text-center mx-auto" href="#">Sistema de Gerenciamento de Convites - SGC</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">MENU</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Página Inicial</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=novo">Cadastro de Convidado</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=listar">Lista de Convidados</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
<div class="container">
  <div class="row">
    <div class="col mt-5">
      <?php
      include("config.php");
      switch (@$_REQUEST["page"]) {
        case "novo":
          include("novo-usuario.php");
          break;
        case "listar":
          include("lista-usuario.php");
          break;
        case "salvar":
          include("salvar-usuario.php");
          break;
        case "editar":
          include("editar-usuario.php");
          break;
        default:
          print "<p><i>Para começar a usar o sistema, favor acessar a <b>Barra de Navegação</b></i></p>";

      }
      ?>
    </div>
  </div>
</div>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
