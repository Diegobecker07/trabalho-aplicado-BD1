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

  <div id="menu">

    <ul class="lista">
      <li>
        <a href="">Cadastrar curso</a>
      </li>
      <li>
        <a href="">Consultar cursos</a>
      </li>
      <li>
        <a href="">Cadastrar turma</a>
      </li>
      <li>
        <a href="">Consultar turmas</a>
      </li>
      <li>
        <a href="">Finalizar turma</a>
      </li>
      <li>
        <a href="">Cadastrar Aluno</a>
      </li>
      <li>
        <a href="">Consultar Alunos</a>
      </li>
      <li>
        <a href="">Cadastrar Usuário</a>
      </li>
      <li>
        <a href="">Consultar Usuários</a>
      </li>
      <li>
        <a href="">Cadastrar Professor</a>
      </li>
      <li>
        <a href="">Consultar Professores</a>
      </li>
      <li>
        <a href="">Realizar chamada</a>
      </li>
      <li>
        <a href="">Consultar chamada</a>
      </li>
      <li>
        <a href="">Cadastrar Pagamentos</a>
      </li>
      <li>
        <a href="">Consultar Pagamentos</a>
      </li>
      <li>
        <a href="">Emitir certificado</a>
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