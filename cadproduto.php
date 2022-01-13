<?php
    include "conexao.php";
    include "menu.php";

?>
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Sistema - Cadastro Produtos</title>
  </head>
  <body>
   
  <div class="container">
    <!--Inicio do Fomrulário-->
    <h1>Cadastrar novo Produto</h1><hr>
        <form>
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nome do Produto</label>
                        <input type="text" class="form-control" id="produto" name="produto">
                        
                    </div>
                </div>

                <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Quantidade</label>
                        <input type="text" class="form-control" id="qtd" name="qtd">
                        
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-4">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Valor</label>
                        <input type="text" class="form-control" id="valor" name="valor">
                        
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Estoque Máximo</label>
                        <input type="text" class="form-control" id="estoquemax" name="estoquemax">
                        
                    </div>
                </div>
                <div class="col-4">

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Estoque Mínimo</label>
                        <input type="text" class="form-control" id="estoquemin" name="estoquemin">
                        
                    </div>
                </div>
            </div>

            
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    <!--Fim do Formulário-->
    </div>




    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
  </body>
</html>