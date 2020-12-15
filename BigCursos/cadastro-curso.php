<?php
    require_once "validador_acesso.php";
    if ($_SESSION['user'] != 'adm') {
        header("Location: erro.php");
    }
    require_once "includes/topo.php";
?>

<div class="bg-dark pt-4 pb-4 navbar">
    <div class="logo">
        <a href="admin.php" class="text-white font-weight-bold">BIG CURSOS - Cadastro de Curso</a>
    </div>
    <div class="">
        <a href="logoff.php" class="text-white p-professor">Sair</a>
    </div>
</div>

<?php 
    require_once "includes/menu-adm.php";
?>

    <form action="bd-cadastro-curso.php" method="POST" id="cadastro-form">
        <h1  class="txt-cad">Cadastro de um novo curso</h1>
        <div class="cad">
            <div>Nome do curso:</div>
            <input type="text" name="nomecurso" required size="50">
            <div>Modalidade</div>
            <select name="modalidade" id="" required>
                <option value="presencial">Presencial</option>
                <option value="online">Online</option>
            </select>
            <div>Carga horária:</div>
            <input type="text" class="ch" name="cargahoraria" required size="6">
            <input type="submit" class="button">
        </div>

        <?php if(isset($_GET['sucess']) && $_GET['sucess'] == 'true'){?>
            <div class="text-center font-weight-bold" style="color: green;">
                Cadastro realizado com sucesso!
            </div>
        <?php } ?>
        <?php if(isset($_GET['error']) && $_GET['error'] == 'insertbd'){?>
            <div class="text-center font-weight-bold" style="color: red;">
                Não foi possível cadastrar o Curso no Banco de Dados. Por favor, contate o administrador do sistema!
            </div>
        <?php } ?>
    </form>


<?php
    require_once "includes/footer.php";
    require_once "includes/scripts_final.php";
?>