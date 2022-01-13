<?php
    include "conexao.php";
    include "menu.php";

    try {
        $sql = "SELECT * FROM tblprodutos";
        $qry = $con->query($sql);
        $produtos = $qry->fetchAll(PDO::FETCH_OBJ);

    } catch (PDOException $e) {
        echo $e->getMessage();
    }

?>
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Sistema</title>
  </head>
  <body>
    
    <h1>Produtos Cadastrados</h1>

    <div class="container">
        <a href="cadproduto.php" class="btn btn-primary mb-3">Novo Produto</a>
        <table class="table table-success table-striped table-hover">
            <thead>
                <tr>
                    <th>idproduto</th>
                    <th>Produto</th>
                    <th>Quantidade</th>
                    <th>Valor</th>
                    <th>Estoque Máx</th>
                    <th>Estoque Min</th>
                    <th colspan="2">Ações</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($produtos as $produto){ ?>

                <th><?php echo $produto->idproduto; ?></th>
                <th><?php echo $produto->produto; ?></th>
                <th><?php echo $produto->qtd; ?></th>
                <th><?php echo $produto->valor; ?></th>
                <th><?php echo $produto->estoquemax; ?></th>
                <th><?php echo $produto->estoquemin; ?></th>
                <th>Editar</th>
                <th>Excluir</th>

                
            </tbody>
            <?php } ?>

        </table>

    </div>



    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
  </body>
</html>