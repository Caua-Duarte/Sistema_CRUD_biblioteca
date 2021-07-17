<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Meta tags Obrigatórias -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Cadastro</title>

        <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col">

                    <h1 class="titulo">Cadastro</h1>
                    
                    <form action="/CRUD/Classes/Create_livros.php" method="POST" enctype="multipart/form-data">
                        
                        <div class="form-group">
                            <label for="Titulo">Titulo</label>
                            <input type="text" class="form-control" name="titulo"require>
                        </div>
                        <div class="form-group">
                            <label for="Autor">Autor</label>
                            <input type="text" class="form-control" name="autor"require>
                        </div>
                        <div class="form-group">
                            <label for="Sinopse">Sinopse</label>
                            <input type="text" class="form-control" name="sinopse"require>
                        </div>
                        <div class="form-group">
                            <label for="IBSN">IBSN</label>
                            <input type="text" class="form-control" name="IBSN"require>
                        </div>
                     
                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <input type="file" class="form-control" name="foto" accept=".jpg , .png , .jpeg" require>
                        </div>

                        <input type="submit" class="btn btn-success">

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