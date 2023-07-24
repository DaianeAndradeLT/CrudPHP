<h1>Lista de Convidados</h1>
<?php
$sql = "SELECT * FROM usuarios";

$res = $conn->query($sql);

$qtd = $res->num_rows;

if ($qtd > 0) {
    print "<table class='table table-hover table-bordered'>";
    print "<tr>";
    print "<th class='text-center'>ID</th>";
    print "<th class='text-center'>Nome</th>";
    print "<th class='text-center'>E-mail</th>";
    print "<th class='text-center'>Endereco</th>";
    print "<th class='text-center'>Data de Nascimento</th>";
    print "<th class='text-center'>Telefone:</th>";
    print "<th class='text-center'>Grau Familiar</th>";
    print "<th colspan='2' class='text-center'>Ações</th>"; // Usando colspan='2' para ocupar duas colunas
    print "</tr>";
    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>".$row->id."</td>";
        print "<td>".$row->nome."</td>";
        print "<td>".$row->email."</td>";
        print "<td>".$row->endereco."</td>";
        print "<td>".$row->data_nasc."</td>";
        print "<td>".$row->telefone."</td>";
        print "<td>".$row->grau_familiar."</td>";

        print "<td><button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>Editar</button></td>
               <td><button onclick =\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" class='btn btn-danger'>Excluir</button></td>";

        print "</tr>";
    }
    print "</table>";
} else {
    print "<p classic='alert alert-danger'>Não encontramos resultados!</p>";
}
?>
