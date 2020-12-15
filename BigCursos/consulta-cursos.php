<?php
    require_once "validador_acesso.php";
    if ($_SESSION['user'] != 'adm') {
        header("Location: erro.php");
    }
    require_once "includes/topo.php";
?>

<div class="bg-dark pt-4 pb-4 navbar">
    <div class="logo">
        <a href="admin.php" class="text-white font-weight-bold">BIG CURSOS - Consulta de Cursos</a>
    </div>
    <div class="">
        <a href="logoff.php" class="text-white p-professor">Sair</a>
    </div>
</div>

<div id="consulta">
    <h1> Cursos cadastrados</h1>
    <table id="cursos-cad">
        <tr>
            <th>
                Nome do curso
            </th>
            <th>
                Modalidade
            </th>
            <th>
                Carga Horária
            </th>
        </tr>
            <?php 
                require_once "conexao.php";
                $query = "SELECT * from curso";
                $stmt = $conexao->prepare($query);
                $stmt->execute();
                $lista = $stmt->fetchAll();
                foreach($lista as $key => $value){?>
                    <tr>
                        <td>
                            <?php echo $value['nome']?>
                        </td>
                        <td>
                            <?php echo $value['modalidade']?>
                        </td>
                        <td>
                            <?php echo $value['carga_horaria']?>
                        </td>
                    </tr>
            <?php } ?>
    </table>
</div>

<?php 
    require_once "includes/menu-adm.php";
?>

    


<?php
    require_once "includes/footer.php";
    require_once "includes/scripts_final.php";
?>