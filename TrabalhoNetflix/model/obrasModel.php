<?php

require_once 'ConexaoMysql.php';

class categoriasModel {
    protected $id;
    protected $nome;
    protected $link;
    protected $serie_ou_filme;
    protected $lancamento;
    protected $categorias_id;
    
    public function __construct() {
        
    }
    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getLink() {
        return $this->link;
    }

    public function getSerie_ou_filme() {
        return $this->serie_ou_filme;
    }

    public function getLancamento() {
        return $this->lancamento;
    }

    public function getCategorias_id() {
        return $this->categorias_id;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setLink($link): void {
        $this->link = $link;
    }

    public function setSerie_ou_filme($serie_ou_filme): void {
        $this->serie_ou_filme = $serie_ou_filme;
    }

    public function setLancamento($lancamento): void {
        $this->lancamento = $lancamento;
    }

    public function setCategorias_id($categorias_id): void {
        $this->categorias_id = $categorias_id;
    }


}
?>