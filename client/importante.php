<?php
    $action='recuperar';
    require 'note_controller.php';

    /*echo '<pre>';
    //print_r($notasGuardadas);
    print_r($tagsGuardadas);
    echo '</prev>';*/
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
            function editar(id, nome, conteudo){

                let form = document.createElement('form');
                form.action = 'note_controller.php?acao=atualizar';
                form.method = 'post';
                form.id = 'baixo';

                let inputTitle = document.createElement('input');
                inputTitle.type = 'text';
                inputTitle.name = 'title';
                inputTitle.className = 'form-control';
                inputTitle.placeholder = '';
                inputTitle.value = nome;

                let inputBody = document.createElement('textarea');
                inputBody.name = 'body';
                inputBody.className = 'form-control';
                inputBody.placeholder = '';
                inputBody.value = conteudo;

                let grupo1 = document.createElement('div');
                grupo1.className = 'form-group';
                let grupo2 = document.createElement('div');
                grupo2.className = 'form-group';
                let grupo3 = document.createElement('div');
                grupo3.className = 'form-group';
                let grupo4 = document.createElement('div');
                grupo4.className = 'form-group';

                let inputCategory = document.createElement('select');
                inputCategory.name = 'category';
                inputCategory.className = 'form-control';
                inputCategory.placeholder = '';
                inputCategory.form = 'baixo';

                let trabalho = document.createElement('option');
                trabalho.innerHTML = 'Trabalho';
                trabalho.value= '1';
                let lazer = document.createElement('option');
                lazer.innerHTML = 'Lazer';
                lazer.value= '2';
                let saude = document.createElement('option');
                saude.innerHTML = 'Saúde';
                saude.value= '3';
                let pessoal = document.createElement('option');
                pessoal.innerHTML = 'Pessoal';
                pessoal.value= '4';
                let financas = document.createElement('option');
                financas.innerHTML = 'Finanças';
                financas.value= '5';
                                
                inputCategory.appendChild(trabalho);
                inputCategory.appendChild(lazer);
                inputCategory.appendChild(saude);
                inputCategory.appendChild(pessoal);
                inputCategory.appendChild(financas);

                let divTag = Array();
                let inputTag = Array();
                let labelTag = Array();
                for(var t=1; t<6; t++){
                    divTag[t] = document.createElement('div');
                    divTag[t].className = 'form-check form-check-inline col-3';
                    inputTag[t] = document.createElement('input');
                    inputTag[t].className = 'form-check-input';
                    inputTag[t].type = 'checkbox';
                    inputTag[t].name = 'noteTag[]'; 
                    inputTag[t].value = t;
                    inputTag[t].id = 'flexCheckDefault';
                    labelTag[t] = document.createElement('label');
                    labelTag[t].className = 'form-check-label';
                    labelTag[t].for = 'flexCheckDefault';
                    if(t == 1){
                        labelTag[t].innerHTML = 'Importante';
                    }else if(t == 2){
                        labelTag[t].innerHTML = 'Com prazo';
                    }else if(t == 3){
                        labelTag[t].innerHTML = 'Concluído';
                    }else if(t == 4){
                        labelTag[t].innerHTML = 'A fazer';
                    }else if(t == 5){
                        labelTag[t].innerHTML = 'Agradável';
                    }
                    divTag[t].appendChild(inputTag[t]);
                    divTag[t].appendChild(labelTag[t]);
                    grupo4.appendChild(divTag[t]);
                }
                grupo1.appendChild(inputTitle);
                grupo2.appendChild(inputCategory);
                grupo3.appendChild(inputBody);

                let inputId = document.createElement('input');
                inputId.type = 'hidden';
                inputId.name = 'id';
                inputId.value = id;

                let button = document.createElement('button');
                button.type = 'submit';
                button.className = 'btn btn-outline-dark';
                button.innerHTML = '<i class="fas fa-check"></i>';

                /*
                let paragrafo = document.createElement('p');
                paragrafo.className = 'card-text';
                let titulo = document.createElement('h4');
                titulo.className = 'card-title';*/

                form.appendChild(grupo1);
                form.appendChild(grupo2);
                form.appendChild(grupo3);
                form.appendChild(grupo4);

                form.appendChild(inputId);
                form.appendChild(button);

                let category = document.getElementById('category_'+id);
                let title = document.getElementById('title_'+id);
                let body = document.getElementById('body_'+id);
                let tag = document.getElementById('tag_'+id);

                category.innerHTML = 'Edite abaixo';
                title.innerHTML = '';
                body.innerHTML = '';
                tag.innerHTML = '';

                //category.insertBefore(grupo2, category[0]);
                //inputCategory.insertBefore(pessoal, inputCategory.childNodes[0]);*/

                title.insertBefore(form, title[0])
                console.log(form);
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
                            <a href="tags.php" class="nav-link">Etiquetas</a>
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
        
        <div class="mt-4">
            <div class="card-columns">
                <?php foreach($notasGuardadas as $indice => $nota){
                    foreach($tagsGuardadas as $indice => $note_tag){
                        if($note_tag->note_id == $nota->id){
                            if($note_tag->tag_id == 1){?>
                                <div class="card">
                                    <div class="card-header pb-5">
                                        <div class="float-left" >
                                            <?php
                                                if($nota->category_id == 1){
                                                    $categoyName ='Trabalho';
                                                }else if($nota->category_id == 2){
                                                    $categoyName ='Lazer' ;
                                                }else if($nota->category_id == 3){
                                                    $categoyName = 'Saúde';
                                                }else if($nota->category_id == 4){
                                                    $categoyName = 'Pessoal';
                                                }else if($nota->category_id == 5){
                                                    $categoyName = 'Finanças';
                                                }
                                            ?>
                                            <div id="category_<?php print_r($nota->id) ?>">
                                                Categoria: <?php print_r($categoyName) ?>
                                            </div>
                                            
                                        </div>
                                        
                                        <div class="float-right">
                                            <a onclick="editar(<?php print_r($nota->id) ?>, '<?php print_r($nota->title) ?>', '<?php print_r($nota->body) ?>')" class="btn btn-dark"><i class="fas fa-edit" style="color: #F7F7F7;"></i></a>
                                            <a class="btn btn-danger" onclick="remover(<?php print_r($nota->id) ?>)"><i class="fas fa-times" style="color: #F7F7F7;"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div id="title_<?php print_r($nota->id) ?>">
                                            <h4 class="card-title"><?php print_r($nota->title) ?></h4>     
                                        </div>
                                        <div id="body_<?php print_r($nota->id) ?>">
                                            <p class="card-text"><?php print_r($nota->body) ?></p>
                                        </div>
                                    </div>
                                    <div id="tag_<?php print_r($nota->id) ?>" class="card-footer text-begin">
                                        <?php /*$tagsNota = array(
                                            1 => '',
                                            2 => '',
                                            3 => '',
                                            4 => '',
                                            5 => '',
                                        );*/?>
                                        <?php foreach($tagsGuardadas as $indice => $note_tag){
                                            if($note_tag->note_id == $nota->id){?>
                                                <?php
                                                if($note_tag->tag_id == 1){
                                                    $tagName = 'Importante';
                                                    $tagPath = 'importante.php';
                                                }else if($note_tag->tag_id == 2){
                                                    $tagName = 'Com prazo';
                                                    $tagPath = 'comPrazo.php';
                                                }else if($note_tag->tag_id == 3){
                                                    $tagName = 'Concluído';
                                                    $tagPath = 'concluido.php';
                                                }else if($note_tag->tag_id == 4){
                                                    $tagName = 'A fazer';
                                                    $tagPath = 'aFazer.php';
                                                }else if($note_tag->tag_id == 5){
                                                    $tagName = 'Agradável';
                                                    $tagPath = 'agradavel.php';
                                                }
                                                ?>
                                                <a href="<?php print_r($tagPath) ?>" class="badge bg-dark" style="color: white;"><?php print_r($tagName) ?></a>
                                                
                                        <?php }} ?>    
                                    </div>
                                </div>
                            <?php }}}} ?>    
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js"></script>
        
    
    </body>
</html>