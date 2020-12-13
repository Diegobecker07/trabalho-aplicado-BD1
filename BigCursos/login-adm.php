<?php
    require_once "includes/topo.php";
?>
    <title>Login - Administração</title>
  </head>
<body>
    <div class="bg-dark pt-4 pb-4 navbar">
        <div class="logo">
            <a href="index.php" class="text-white font-weight-bold">BIG CURSOS</a>
        </div>
        <div class="pg-adm">
            <a href="login.php" class="text-white">Página de Usuário</a>
        </div>
    </div>

    <div class="card-login">
        <div class="card">
            <div class="card-header text-center">
              Login Administrativo
            </div>
            <div class="card-body">
              <form action="validalogin.php" method="POST">
                <div class="form-group">
                  <input name="email" type="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <input name="senha" type="password" class="form-control" placeholder="Senha">
                </div>
                <div>
                  <a href="recuperar-senha.php" class="esqueceu-senha">Esqueceu sua senha?</a>
                </div>
                <?php if(isset($_GET['login']) && $_GET['login'] == 'erro'){?>
                    <div style="color: #FE0303; padding-top: 5px; padding-bottom: 5px; font-family: 'OpenSans', sans-serif; margin: auto; display:table; padding: 5px;">
                        <strong>Usuário ou senha inválido(s)</strong>
                    </div>
                <?php } ?>
                <?php if(isset($_GET['login']) && $_GET['login'] == 'erro2'){?>
                    <div style="color: #FE0303; padding-top: 5px; padding-bottom: 5px; font-family: 'OpenSans', sans-serif; margin: auto; display:table; padding: 5px;">
                        <strong>Faça login antes de continuar</strong>
                    </div>
                <?php } ?>
                <button class="btn btn-lg btn-dark btn-block" type="submit">Entrar</button>
              </form>
            </div>
        </div>
    </div>
    

<?php
    require_once "includes/footer.php";
    require_once "includes/scripts_final.php";
?>