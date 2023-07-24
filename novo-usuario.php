<style>
    .form-control-sm {
        width: 350px;
        box-sizing: border-box;
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

<h2 class="text-center">Cadastro de Convidados</h2>
<div class="form-container">
    <form action="?page=salvar" method="POST">
        <input type="hidden" name="acao" value="cadastrar">
        <div class="mb-3">
            <label>Nome:</label>
            <input type="text" name="nome" class="form-control form-control-sm">
        </div>
        <div class="mb-3">
            <label>E-mail:</label>
            <input type="text" name="email" class="form-control form-control-sm">
        </div>
        <div class="mb-3">
            <label>Endereço:</label>
            <input type="text" name="endereco" class="form-control form-control-sm">
        </div>
        <div class="mb-3">
            <label>Data de Nascimento:</label>
            <input type="date" name="data_nasc" class="form-control form-control-sm">
        </div>
        <div class="mb-3">
            <label>Telefone:</label>
            <input type="int" name="telefone" class="form-control form-control-sm">
        </div>
        <div class="mb-3">
            <label>Grau Familiar:</label>
            <input type="text" name="grau_familiar" class="form-control form-control-sm">
        </div>
        <div class="mb-3">
            <label>Senha:</label>
            <input type="password" name="senha" class="form-control form-control-sm">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>
</div>
