<header class="bg-primary">

<nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo URL_BASE ?>/client">Pizzaria</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div id="sidebar-menu" class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="home" href="<?php echo URL_BASE ?>/client">Página inicial</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" aria-current="cadastros" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cadastros
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo URL_BASE ."client/clientes" ?>">Clientes</a></li>
            <li><a class="dropdown-item" href="<?php echo URL_BASE . "client/funcionarios" ?>">Funcionários</a></li>
            <li><a class="dropdown-item" href="<?php echo URL_BASE . "client/cargos" ?>">Cargos</a></li>
            <li><a class="dropdown-item" href="<?php echo URL_BASE . "client/produtos" ?>">Produtos</a></li>
            <li><a class="dropdown-item" href="<?php echo URL_BASE . "client/usuarios" ?>">Usuários</a></li>
            <li><a class="dropdown-item" href="<?php echo URL_BASE . "client/usuariospermissoes" ?>">Permissões do usuário</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Listar
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo URL_BASE . "listarprodutos" ?>">Produtos</a></li>
            <li><a class="dropdown-item" href="<?php echo URL_BASE . "listarclientes" ?>">Clientes</a></li>
            <li><a class="dropdown-item" href="<?php echo URL_BASE . "listarpedidos" ?>">Pedidos</a></li>
          </ul>
        </li>
        <?php if(isset($titleViewName) && $titleViewName == "index"): ?>
        <li>
        <form action="" id="filtrar-por-data-oculto">
          <input  class="form-control" type="hidden" name="DataPedido" id="DataPedido">
          <input  class="form-control" type="hidden" value="1" name="PedidoPronto" id="PedidoPronto">

          <button id="ativar-notificacao" type="submit" class="btn text-white" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Pedidos prontos de hoje    
          </button>
        </form>
        </li>
        <?php endif; ?>
        <li class="nav-item bg-danger">
          <a href="<?php echo URL_BASE . "login/destroy" ?>" class="nav-link active p-2">Sair</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

</header>

