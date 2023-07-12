<?php
//id
//category_id
//title
//body
//created_at
//updated_at
class Note{
    private $id;
    private $category_id;
    private $title;
    private $body;
    private $created_at;
    private $updated_at;

    public function __get($atributo){
        return $this->$atributo;
    }
    public function __set($atributo, $valor){
        $this->$atributo = $valor;
    }
}
class NoteTag{
    private $id;
    private $note_id;
    private $tag_id;
    
    public function __get($atributo){
        return $this->$atributo;
    }
    public function __set($atributo, $valor){
        $this->$atributo = $valor;
    }
}
?>