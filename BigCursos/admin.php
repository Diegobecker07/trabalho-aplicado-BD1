<?php
require_once "includes/topo.php";
require_once "validador_acesso.php";
?>
<title>Página administrativa</title>
</head>

<body>

  <div class="bg-dark pt-4 pb-4 navbar">
    <div class="logo">
      <a href="index.php" class="text-white font-weight-bold p-professor">BIG CURSOS - Painel Administrativo</a>
    </div>
    <div class="pg-adm">
      <a href="logoff.php" class="text-white sair">Sair</a>
    </div>
  </div>

  

  <?php
  require_once "includes/menu-adm.php";
  require_once "includes/footer.php";
  require_once "includes/scripts_final.php";
  ?>