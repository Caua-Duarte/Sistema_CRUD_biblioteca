<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Meta tags Obrigatórias -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Excluir cadastro</title>

         <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <?php
                    include "/CRUD/Classes/conexao.php";

                    $id      = $_POST['id'];
                    $titulo  = $_POST['titulo'];


                    //$sql = "INSERT INTO `livros`(`titulo`, `autor`, `sinopse`, `IBSN`) VALUES ('$titulo','$autor','$sinopse','$IBSN')";

                    $sql = "DELETE FROM `livros` WHERE codigo = $id";

                    //Retorna se deu certo o cadastro
                    if(mysqli_query($conn, $sql )){
                        mensagem("O livro \"$titulo\" foi excluido com sucesso!!!" , 'success');
                    }else{
                        mensagem("O livro \"$titulo\" não foi excluido com sucesso!!!" , 'danger');
                    }

                ?>
                <a href="/CRUD/index.php" class="btn btn-primary">Voltar</a>
            </div>
        </div>
        <!-- JavaScript (Opcional) -->
        <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
     </body>
</html>