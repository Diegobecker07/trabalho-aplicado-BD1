<?php
    require_once "includes/topo.php";
    require_once "validador_acesso.php";
?>
    <title>Página administrativa</title>
  </head>
<body>
    
  <div class="bg-dark pt-4 pb-4 navbar">
    <div class="logo">
      <a href="index.php" class="text-white font-weight-bold p-professor">BIG CURSOS - Financeiro</a>
    </div>
    <div class="pg-adm">
      <a href="logoff.php" class="text-white sair">Sair</a>
    </div>
  </div>

  <div id="menu">

    <ul class="lista">
      <li>
        <a href="">Cadastrar Pagamentos</a>
      </li>
      <li>
        <a href="">Consultar Pagamentos</a>
      </li>
    </ul>

  </div>

  <footer>
    <div class="bg-dark text-white font-weight-bold text-center">
        Copyright &copy; Big Cursos 2020
    </div>
  </footer>

<?php
    require_once "includes/footer.php";
    require_once "includes/scripts_final.php";
?>