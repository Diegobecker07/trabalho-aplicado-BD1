<?php
    require_once "includes/topo.php";
    require_once "validador_acesso.php";
?>
    <title>Portal do Professor - Chamada</title>
  </head>
<body>
    <div class="bg-dark pt-4 pb-4 navbar">
        <div class="logo">
            <a href="index.php" class="text-white font-weight-bold">BIG CURSOS - Portal do Professor</a>
        </div>
        <div class="pg-adm">
            <a href="portal-professor.php" class="text-white">Página inicial</a>
        </div>
    </div>

    <div class="selecione-turma">
        <label class="select-turma">Selecione uma turma:</label>
        <select class="selecione">
            <option selected disabled>Selecione</option>
            <option value="">Turma 1</option>
            <option value="">Turma 2</option>
        </select>
    </div>

    <div class="form-presenca">
        <table id="formulario-presenca">
            <tr>
                <th>
                    Nome
                </th>
                <th>
                    CPF
                </th>
                <th>
                    CH
                </th>
                <th>
                    Presença
                </th>
            </tr>

            <tr>
                <td>
                    Aluno 1
                </td>
                <td>
                    938349848293
                </td>
                <td>
                    4 horas
                </td>
                <td>
                    <div>
                        <input type="radio" id="" name="presenca" value="">
                        <label for="">Sim</label><br>
                        <input type="radio" id="" name="presenca" value="">
                        <label for="">Não</label><br>
                    </div>
                </td>
            </tr>
        </table>
        <input type="submit" value="Salvar" class="botao">
    </div>
    

<?php
    require_once "includes/footer.php";
    require_once "includes/scripts_final.php";
?>