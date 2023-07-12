<!DOCTYPE html>
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
                            <a href="tags.php" class="nav-link">Etiquetas</a>
                        </li>
                    </ul>
                    <a class="btn btn-outline-light" href="index.php"><i class="fas fa-long-arrow-alt-left"></i></a>
                </div>
            </nav>
        </header>
        <div class="mt-4">
            <form class="ml-4 mr-4" method="post" action="note_controller.php"><!--?action==add-->
        
                <div class="form-group">
                    <label for="noteName">Título</label>
                    <input class="form-control" type="text" name="title" id="noteName" placeholder="Digite o título">
                </div>
        
                <div class="form-group">
                    <label for="noteType">Categorias</label>
                    <select class="form-control" name="category" id="noteType">
                        <option value="1">Trabalho</option>
                        <option value="2">Lazer</option>
                        <option value="3">Saúde</option>
                        <option value="4">Pessoal</option>
                        <option value="5">Finanças</option>
                    </select>
                </div>

                <!--<div class="form-group">
                    <label for="noteColor">Etiquetas</label>
                    <select class="form-control" name="tag" id="noteColor">
                        <option>Branca</option>
                        <option>Verde</option>
                    </select>
                </div>-->
                <div class="form-group">
                    <label for="noteTag">Etiquetas</label>
                    <br>
                    <div class="form-check form-check-inline col-3">
                        <input class="form-check-input" type="checkbox" value="1" name="noteTag[]" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Importante
                        </label>
                    </div>
                    <div class="form-check form-check-inline col-3">
                        <input class="form-check-input" type="checkbox" value="2" name="noteTag[]" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Com prazo
                        </label>
                    </div>
                    <div class="form-check form-check-inline col-3">
                        <input class="form-check-input" type="checkbox" value="3" name="noteTag[]" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Concluído
                        </label>
                    </div>
                    <div class="form-check form-check-inline col-3">
                        <input class="form-check-input" type="checkbox" value="4" name="noteTag[]" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            A fazer
                        </label>
                    </div>
                    <div class="form-check form-check-inline col-3">
                        <input class="form-check-input" type="checkbox" value="5" name="noteTag[]" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Agradável
                        </label>
                    </div>
                </div>
        
                <div class="form-group">
                    <label for="noteInfo">Descrição</label>
                    <textarea class="form-control" name="body" id="noteInfo" rows="2"></textarea>
                </div>
                <input class="btn btn-outline-dark" type="submit" value="Salvar">
                <a class="btn btn-outline-danger" href="index.php">Cancelar</a>
                <!--
                    <button class="btn btn-outline-success">Salvar</button>

                /!-->
        
            </form>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js"></script>
    
    </body>
</html>