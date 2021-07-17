<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Meta tags Obrigatórias -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Listar livros</title>

        <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col">

                    <?php
                            
                        include "/CRUD/Classes/conexao.php";
                        
                        $pesquisa = $_POST['busca'] ?? '';
                        
                        $sql = "SELECT * FROM `livros` WHERE titulo LIKE '%$pesquisa%'";

                        $dados = mysqli_query($conn, $sql);

                    
                    ?>

                    <h1>Lista de livros</h1>

                    <nav class="navbar navbar-light bg-light">
                        <form action="/CRUD/Pages/read.php" class="form-inline" method="POST">
                            <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar por titulo" aria-label="Pesquisar" name="busca" autofocus>
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                        </form>
                    </nav>

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Foto</th>
                                <th scope="col">Título</th>
                                <th scope="col">Autor/a</th>
                                <th scope="col">Sinópse</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php 
                                                            
                                while ($linha = mysqli_fetch_assoc($dados)){
                                    
                                    $codigo  = $linha['codigo'];
                                    $titulo  = $linha['titulo'];
                                    $autor   = $linha['autor'];
                                    $sinopse = $linha['sinopse'];
                                    $foto    = $linha['foto'];

                                    echo "  <tr>
                                                <th> <img src='\CRUD\Img\ $foto' class='lista_foto'></th>
                                                <th scope='row'>$titulo</th>
                                                <td>$autor</td>
                                                <td>$sinopse</td>
                                                <td class='bts_lista' width=150px>
                                                    <a class='btn btn-primary btn-sm' href='/CRUD/Pages/update.php?id=$codigo'>Editar</a>
                                                    <a class='btn btn-danger btn-sm' href='#' data-toggle='modal' data-target='#confirma' onclick=" .'"' . "pega_dados($codigo, '$titulo')" . '"'." >Excluir</a>
                                                </td>

                                            </tr>";
                                }
                            
                            ?>
                            
                        </tbody>
                    </table>

                    <a class="btn btn-primary btn-lg" href="/CRUD/index.php" role="button">Voltar para o inicio</a>

                </div>
            </div>
        </div>

        <!-- Modal -->
         <div class="modal fade" id="confirma" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirmação para excluir</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <form action="/CRUD/Classes/Delete_livros.php" method="POST">
                        <div class="modal-body">
                            
                            <p>Você deseja realmente excluir "<b id="titulo_livro">Titulo livro</b>" ? </p>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <input type="hidden" name="id" id="codigo" value="">
                            <input type="hidden" name="titulo" id="livro_titulo" value="">
                            <input type="submit" class="btn btn-danger" value="Excluir">
                        </div>
                    </form>

                </div>
            </div>
         </div>

        
        <script type="text/javascript">

            function pega_dados(id, titulo){
                document.getElementById('titulo_livro').innerHTML = titulo;
                document.getElementById('livro_titulo').value = titulo;
                document.getElementById('codigo').value = id;
            }

        </script>

        <!-- JavaScript (Opcional) -->
        <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
     </body>
</html>