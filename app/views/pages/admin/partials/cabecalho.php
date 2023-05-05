<nav class="navbar shadow navbar-dark bg-dark fixed-top">
  <div class="container-fluid">

    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
      <span class="navbar-toggler-icon"></span>
    </button>

    <a class="navbar-brand" href="https://davidsonbpe.blogspot.com/">Editar</a>

  </div>
</nav>

<div class="offcanvas offcanvas-start d-flex flex-column flex-shrink-0 p-3 bg-dark" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" style="width: 280px;">

  <a href="<?php echo URL_BASE ?>admin" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-light text-decoration-none">
    <img src="https://via.placeholder.com/150x150/3b2d50/bdbac1?text=DAVIDSONBPE" alt="" width="50" height="50" class="rounded-circle me-4">
    <span class="fs-4 text-white">Editar</span>
  </a>
  <hr>
  <ul id="sidebar-menu" class="nav nav-pills flex-column mb-auto">
    <li class="nav-item">
      <a href="<?php echo URL_BASE ?>admin" class="nav-link text-white" aria-current="home">
        <i class="bi bi-house-door-fill me-2"></i>
        Página inicial
      </a>
    </li>
    <li class="nav-item">
        <a class="nav-link link-light dropdown-toggle" aria-current="funcionarios" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-list-ul me-2"></i>
            Funcionários
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="<?php echo URL_BASE ."admin/funcionarios" ?>">Lista de funcionarios</a></li>
          <li><a class="dropdown-item" href="<?php echo URL_BASE ."admin/funcionarios/create" ?>">Cadastro de funcionarios</a></li>
        </ul>
        
    </li>
    <li class="nav-item">
      <a href="https://davidsonbpe.blogspot.com/" class="nav-link link-light" aria-current="page">
        <i class="bi bi-list-ul me-2"></i>
        Orders
      </a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link link-light" aria-current="page">
        <i class="bi bi-list-ul me-2"></i>
        Products
      </a>
    </li>
    <li class="nav-item">
        <a class="nav-link link-light dropdown-toggle" aria-current="clientes" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-list-ul me-2"></i>
            Clientes
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="<?php echo URL_BASE ."admin/clientes" ?>">Lista de clientes</a></li>
          <li><a class="dropdown-item" href="<?php echo URL_BASE ."admin/clientes/create" ?>">Cadastro de clientes</a></li>
        </ul>
        
    </li>
  </ul>
  <hr>
  <div class="dropdown">
    <a href="https://davidsonbpe.blogspot.com/" class="d-flex align-items-center link-light text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
      <img src="https://via.placeholder.com/150x150/3b2d50/bdbac1?text=DAVIDSONBPE" alt="" width="32" height="32" class="rounded-circle me-2">
      <strong>mdo</strong>
    </a>
    <ul class="dropdown-menu bg-dark text-small shadow" aria-labelledby="dropdownUser2">
      <li><a class="dropdown-item text-white" href="#">New project...</a></li>
      <li><a class="dropdown-item text-white" href="#">Settings</a></li>
      <li><a class="dropdown-item text-white" href="#">Profile</a></li>
      <li>
        <hr class="dropdown-divider">
      </li>
      <li><a class="dropdown-item text-white bg-danger" href="<?php echo URL_BASE ?>login/destroy">Sair</a></li>
    </ul>
  </div>

</div>

