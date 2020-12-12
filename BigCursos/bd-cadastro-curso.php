<?php
    session_start();
    require_once "conexao.php";
    $nomecurso = $_POST['nomecurso'];
    $modalidade = $_POST['modalidade'];
    $cargahoraria = $_POST['cargahoraria'];
    if($nomecurso != '' && $modalidade != '' && $cargahoraria != ''){

        try{
            $query = "INSERT INTO curso (modalidade, nome, carga_horaria) 
            VALUES (
                :mod,
                :nomecurso,
                :ch
            )";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(':mod', $modalidade);
            $stmt->bindValue(':nomecurso', $nomecurso);
            $stmt->bindValue(':ch', $cargahoraria);
            $stmt->execute();
            header("Location:cadastro-curso.php?sucess=true");
        } catch(PDOException $e){
            header("Location:cadastro-curso.php?error=insertbd");
        }
    }
?>