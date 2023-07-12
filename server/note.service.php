<?php
class NoteService{
    private $conexao;
    private $nota;

    public function __construct(Connection $conexao, Note $nota){
        $this->conexao = $conexao->conectar();
        $this->nota = $nota;
    }
    public function __get($atributo){
        return $this->$atributo;
    }
    public function __set($atributo, $valor){
        $this->$atributo = $valor;
    }
    public function adicionar(){
        $query = 'insert into notes(category_id, title, body)values(:category_id, :title, :body)';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':title', $this->nota->__get('title'));
        $stmt->bindValue(':body', $this->nota->__get('body'));
        $stmt->bindValue(':category_id', $this->nota->__get('category_id'));
        $stmt->execute();
        $query = 'select id from notes where title = :title';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':title', $this->nota->__get('title'));
        $stmt->execute();
        $notaDesejada = $stmt->fetchALL(PDO::FETCH_OBJ);
        echo '<pre>';
        print_r($notaDesejada);
        echo '</prev>';
        foreach($notaDesejada as $indice => $nota){
            print_r($nota->id);
        }
        $this->nota->__set('id', $nota->id);
        
    }
    public function recuperar(){
        $query = 'select id, category_id, title, body from notes';
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();
        return $stmt->fetchALL(PDO::FETCH_OBJ);
    }
    public function editar(){
        print_r($this->nota);
        $query = 'update notes set title = :title, body = :body, category_id = :category_id where id = :id';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':title', $this->nota->__get('title'));
        $stmt->bindValue(':body', $this->nota->__get('body'));
        $stmt->bindValue(':category_id', $this->nota->__get('category_id'));
        $stmt->bindValue(':id', $this->nota->__get('id'));
        return $stmt->execute();
    }
    public function remover(){
        $query = 'delete from notes where id = :id';
        $stmt= $this->conexao->prepare($query);
        $stmt->bindValue(':id', $this->nota->__get('id'));
        $stmt->execute();
    }
}
class TagService{
    private $conexao;
    private $notaTag;

    public function __construct(Connection $conexao, NoteTag $notaTag){
        $this->conexao = $conexao->conectar();
        $this->notaTag = $notaTag;
    }
    public function __get($atributo){
        return $this->$atributo;
    }
    public function __set($atributo, $valor){
        $this->$atributo = $valor;
    }
    public function adicionar(){
        $query = 'insert into note_tag(note_id, tag_id)values(:note_id, :tag_id)';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':note_id', $this->notaTag->__get('note_id'));
        $stmt->bindValue(':tag_id', $this->notaTag->__get('tag_id'));
        $stmt->execute();
        
    }
    public function recuperar(){
        $query = 'select id, note_id, tag_id from note_tag';
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();
        return $stmt->fetchALL(PDO::FETCH_OBJ);
    }
    public function editar(){
        
    }
    public function remover(){
        $query = 'delete from note_tag where note_id = :note_id';
        $stmt= $this->conexao->prepare($query);
        $stmt->bindValue(':note_id', $this->notaTag->__get('note_id'));
        $stmt->execute();
    }
}
?>