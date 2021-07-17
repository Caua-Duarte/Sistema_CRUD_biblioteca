<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Meta tags Obrigatórias -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Atualizar cadastro</title>

         <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    </head>
    <body>

        <?php
            
            include "/CRUD/Classes/conexao.php";

            $id  = $_GET['id'];
            $sql = "SELECT * FROM livros WHERE codigo = $id";

            $dados = mysqli_query($conn, $sql);
            $linha = mysqli_fetch_assoc($dados);
        
        ?>

        <div class="container">
            <div class="row">
                <div class="col">

                    <h1>Alteração de cadastro</h1>
                    
                    <form action="/CRUD/Classes/Update_livros.php" method="POST">
                        
                        <div class="form-group">
                            <label for="Titulo">Titulo</label>
                            <input type="text" class="form-control" name="titulo"require value="<?php echo $linha['titulo'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="Autor">Autor</label>
                            <input type="text" class="form-control" name="autor"require value="<?php echo $linha['autor'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="Sinopse">Sinopse</label>
                            <input type="text" class="form-control" name="sinopse"require value="<?php echo $linha['sinopse'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="IBSN">IBSN</label>
                            <input type="text" class="form-control" name="IBSN"require value="<?php echo $linha['IBSN'] ?>">
                        </div>

                        <input type="submit" class="btn btn-success" value="Salvar Alterações">
                        <input type="hidden" name="id" value="<?php echo $linha['codigo'] ?>">

                    </form>
                    <br>
                    <a class="btn btn-primary" href="/CRUD/index.php" role="button">Voltar para o inicio</a>

                </div>
            </div>
        </div>



        <!-- JavaScript (Opcional) -->
        <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
     </body>
</html>