<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastros dos Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form class="row g-3">
            <div class="col-md-6">
                <label for="nome" class="form-label">Nome:</label>
                <input type="name" class="form-control" name="nome" id="nome">
            </div>
            <div class="col-md-6">
                <label for="senha" class="form-label">Senha:</label>
                <input type="password" class="form-control" name="senha" id="senha">
            </div>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" name="adm" value="sim" id="adm">
                <label class="form-check-label" for="adm">Você é administrador?</label>            
            </div>

            <button class="btn btn-success" type="submit">Cadastrar</button>
        </form>
    </div>
    <br>
        <table class="table">
            <thead>
                <tr>
                    <th>NOMES</th>
                    <th>É ADMINISTRADOR?</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "conexao.php";

                $sqlBusca = "SELECT * FROM cadastros";
                $resultado = mysqli_query($conexao , $sqlBusca);

                $listaCadastros = [];


                //laço para buscar o resultado, cada vez que fizer vai colocar outras tarefas (trazer esses resultados)
                while($cadastro = mysqli_fetch_assoc($resultado)){
                    $listaCadastros[] = $cadastro;
                }

                foreach($listaCadastros as $cadastro): ?>
                    <tr>
                        <td><?php echo $cadastro['nome']; ?></td>
                        <td><?php echo $cadastro['adm']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>