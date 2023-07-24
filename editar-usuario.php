<style>
    .form-control-sm {
        width: 350px;
    }
    .form-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: 50px auto;
        max-width: 400px;
        background-color: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
</style>

<h2 class="text-center">Editar Convidados</h2>
<?php
$sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];
$res = $conn->query($sql);
$row = $res->fetch_object();
?>
<div class="form-container">
    <form action="?page=salvar" method="POST">
        <input type="hidden" name="acao" value="editar">
        <input type="hidden" name="id" value="<?php echo $row->id; ?>">
        <div class="mb-3">
            <label>Nome:</label>
            <input type="text" name="nome" value="<?php echo $row->nome; ?>" class="form-control form-control-sm">
        </div>
        <div class="mb-3">
            <label>E-mail:</label>
            <input type="text" name="email" value="<?php echo $row->email; ?>" class="form-control form-control-sm">
        </div>
        <div class="mb-3">
            <label>Endereço:</label>
            <input type="text" name="endereco" value="<?php echo $row->endereco; ?>" class="form-control form-control-sm">
        </div>
        <div class="mb-3">
            <label>Data de Nascimento:</label>
            <?php
            $data_nascimento = date('Y-m-d', strtotime($row->data_nasc));
            ?>
            <input type="date" name="data_nasc" value="<?php echo $data_nascimento; ?>" class="form-control form-control-sm">
        </div>
        <div class="mb-3">
            <label>Telefone:</label>
            <input type="text" name="telefone" value="<?php echo $row->telefone; ?>" class="form-control form-control-sm">
        </div>
        <div class="mb-3">
            <label>Grau Familiar:</label>
            <input type="text" name="grau_familiar" value="<?php echo $row->grau_familiar; ?>" class="form-control form-control-sm">
        </div>
        <div class="mb-3">
            <label>Senha:</label>
            <input type="text" name="senha" class="form-control form-control-sm">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>
</div>
