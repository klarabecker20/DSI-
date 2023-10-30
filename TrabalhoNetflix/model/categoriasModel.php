<?php

require_once 'ConexaoMysql.php';

class categoriasModel {

    protected $id;
    protected $nome;
    protected $descricao;
    public function __construct() {
        
    }
    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setDescricao($descricao): void {
        $this->descricao = $descricao;
    }


}

?>