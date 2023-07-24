<?php
if (!defined('HOST')) {
    include("config.php");
}

switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = mysqli_real_escape_string($conn, $_POST["nome"]);
        $email = mysqli_real_escape_string($conn, $_POST["email"]);
        $endereco = mysqli_real_escape_string($conn, $_POST["endereco"]);
        $data_nasc = mysqli_real_escape_string($conn, $_POST["data_nasc"]);
        $telefone = mysqli_real_escape_string($conn, $_POST["telefone"]);
        $grau_familiar = mysqli_real_escape_string($conn, $_POST["grau_familiar"]);
        $senha = mysqli_real_escape_string($conn, $_POST["senha"]);

        $sql = "INSERT INTO usuarios (nome,email,endereco,data_nasc,telefone,grau_familiar,senha) VALUES ('{$nome}','{$email}','{$endereco}','{$data_nasc}','{$telefone}','{$grau_familiar}','{$senha}')";

        $res = $conn->query($sql);
        if ($res == true) {
            print "<script>alert('Cadastro feito com sucesso');</script>";
            print "<script>location.href='?page=listar';</script>";
        } else {
            print "<script>alert('Não foi possível cadastrar');</script>";
            print "<script>location.href='?page=listar';</script>";
        }
        break;

    case 'editar':
        $nome = mysqli_real_escape_string($conn, $_POST["nome"]);
        $email = mysqli_real_escape_string($conn, $_POST["email"]);
        $endereco = mysqli_real_escape_string($conn, $_POST["endereco"]);
        $data_nasc = mysqli_real_escape_string($conn, $_POST["data_nasc"]);
        $telefone = mysqli_real_escape_string($conn, $_POST["telefone"]);
        $grau_familiar = mysqli_real_escape_string($conn, $_POST["grau_familiar"]);
        $senha = mysqli_real_escape_string($conn, $_POST["senha"]);

        $sql = "UPDATE usuarios SET
            nome='{$nome}',
            email='{$email}',
            endereco='{$endereco}',
            data_nasc ='{$data_nasc}',
            telefone = '{$telefone}',
            grau_familiar='{$grau_familiar}'
            WHERE
                id=" . $_REQUEST["id"];

        $res = $conn->query($sql);
        if ($res == true) {
            print "<script>alert('Edição feita com sucesso');</script>";
            print "<script>location.href='?page=listar';</script>";
        } else {
            print "<script>alert('Não foi possível editar');</script>";
            print "<script>location.href='?page=listar';</script>";
        }
        break;
    case 'excluir':
        $sql = "DELETE FROM usuarios WHERE id=" . $_REQUEST["id"];

        $res = $conn->query($sql);
        if ($res == true) {
            print "<script>alert('Excluido com sucesso');</script>";
            print "<script>location.href='?page=listar';</script>";
        } else {
            print "<script>alert('Não foi possível excluir');</script>";
            print "<script>location.href='?page=listar';</script>";
        }
        break;
}

?>
