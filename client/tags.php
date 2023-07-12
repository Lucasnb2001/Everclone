<?php
    $action='recuperar';
    require 'note_controller.php';

    //echo '<pre>';
    //print_r($notasGuardadas);
    //echo '</prev>';
?>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--Fonte bootstrap-->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!--Fonte Ícones-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <!--Fonte css-->
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <title>Evernote Clone</title>
        <script>
            function editar(){
                alert('Editar');
            }
            function remover(id){
                location.href = "index.php?acao=remover&id="+id;
                console.log('removendo');
            }
        </script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-md navbar-dark">
                <a href="index.php" class="navbar-brand">
                    <img src="imagens/mamute.png" width="60">
                </a>
                <h2>Everclone</h2>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#navTarget">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navTarget">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link">Notas</a>
                        </li>
                        <li class="nav-item">
                            <a href="categorias.php" class="nav-link">Categorias</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Etiquetas</a>
                        </li>
                    </ul>
                    <form class="form-inline ml-auto justify-content">
                        <input type="text" class="form-control py-auto m-auto" placeholder="">
                        <input class="btn btn-outline-light py-auto m-auto " type="submit" value="Pesquisar nota">
                        
                    </form>
                    <a class="mb-3 mx-4" href="addNote.php"><i class="fas fa-plus" style="color: #FFFF;"></i></a>
                </div>
            </nav>
        </header>

        <div class="container">
            <hr>
                <a class="btn btn-outline-dark" style="margin-left: 250px;" href="importante.php">Importante</a>
                <a class="btn btn-outline-dark ml-4" href="comPrazo.php">Com prazo</a>
                <a class="btn btn-outline-dark ml-4" href="concluido.php">Concluído</a>
                <a class="btn btn-outline-dark ml-4" href="aFazer.php">A fazer</a>
                <a class="btn btn-outline-dark ml-4 " href="agradavel.php">Agradável</a>
            

        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js"></script>
        
    
    </body>
</html>