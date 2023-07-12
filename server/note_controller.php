<?php
    require "../../evernote_clone_priv/note.model.php";
    require "../../evernote_clone_priv/note.service.php";
    require "../../evernote_clone_priv/connection.php";

    //if(isset($_GET['action']) && $_GET['acao']=='inserir'){}
    $action = isset($_GET['acao']) ? $_GET['acao'] : $action;
    if($action == 'recuperar'){
        //echo 'Chegamos';
        $nota = new Note();
        $conexao = new Connection();
        $notaService = new NoteService($conexao, $nota);
        $notasGuardadas = $notaService->recuperar();
        $noteTag = new NoteTag();
        $tagService = new TagService($conexao, $noteTag);
        $tagsGuardadas = $tagService->recuperar();
    }else if($action == 'remover'){
        $nota = new Note();
        $nota->__set('id', $_GET['id']);
        $conexao = new Connection();
        $noteTag = new NoteTag();
        $noteTag->note_id = $_GET['id'];
        $tagService = new TagService($conexao, $noteTag);
        $tagService->remover();
        $notaService = new NoteService($conexao, $nota);
        $notaService->remover();
        header('location: index.php');

    }else if($action == 'atualizar'){
        echo '<pre>';
        print_r($_POST);
        echo '<pre>';

        $nota = new Note();
        $nota->__set('title', $_POST['title']);
        $nota->__set('body', $_POST['body']);
        $nota->__set('category_id', $_POST['category']);
        $nota->__set('id', $_POST['id']);

        $conexao = new Connection;
        $notaService = new NoteService($conexao, $nota);
        $notaService->editar();
        
        $noteTag = new NoteTag();
        $noteTag->note_id = $notaService->nota->id;
        $tagService = new TagService($conexao, $noteTag);
        $tagService->remover();

        foreach($_POST['noteTag'] as $item){
            $noteTag = new NoteTag();
            $noteTag->tag_id = $item;
            $noteTag->note_id = $notaService->nota->id;
            echo '<pre>';
            print_r($noteTag);
            $tagService = new TagService($conexao, $noteTag);
            $tagService->adicionar();
        }
        
        header('location: index.php');
    
    }else{
        /*if($_POST['category'] == 'Trabalho'){
            $_POST['category'] = 1;
        }*/
        
        //comentar
        echo '<pre>';
        print_r($_POST);
        echo '</pre>';
        
        
        $nota = new Note();
        $nota->title = $_POST['title'];
        $nota->__set('body', $_POST['body']);
        $nota->__set('category_id', $_POST['category']);

        $conexao = new Connection();
        $notaService = new NoteService($conexao, $nota);
        $notaService->adicionar();

        //comentar
        echo '<pre>';
        print_r($notaService);
        echo '</pre>';

        echo '<pre>';
        echo 'ID!';
        print_r($notaService->nota->id);
        echo '</pre>';
        
        foreach($_POST['noteTag'] as $item){
            $noteTag = new NoteTag();
            $noteTag->tag_id = $item;
            $noteTag->note_id = $notaService->nota->id;
            echo '<pre>';
            print_r($noteTag);
            $tagService = new TagService($conexao, $noteTag);
            $tagService->adicionar();
        }

        /*if($_POST['noteTag1'] == 1){
            $noteTag = new NoteTag();
            $noteTag->tag_id = $_POST['noteTag1'];
            $noteTag->note_id = $notaService->nota->id;
            echo '<pre>';
            print_r($noteTag);
            $tagService = new TagService($conexao, $noteTag);
            $tagService->adicionar();

        }*/
    
        header('location: index.php');
    }

?>