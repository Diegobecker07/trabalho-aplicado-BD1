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
                <a href="">Consultar chamada</a>
            </li>
            <li>
                <a href="">Emitir certificado</a>
            </li>
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

        </ul>

    </div>

<?php
    require_once "includes/footer.php";
    require_once "includes/scripts_final.php";
?>