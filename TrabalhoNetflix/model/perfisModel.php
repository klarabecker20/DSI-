<?php

require_once 'ConexaoMysql.php';
class perfisModel {
    protected $id;
    protected $nome;
    protected $kids_ou_nao;
    protected $usuarios_id;
    public function __construct() {
        
    }
    public function getId() {
        return $this->id;
    }
    public function getNome() {
        return $this->nome;
    }
    public function getKids_ou_nao() {
        return $this->kids_ou_nao;
    }
    public function getUsuarios_id() {
        return $this->usuarios_id;
    }
    public function setId($id): void {
        $this->id = $id;
    }
    public function setNome($nome): void {
        $this->nome = $nome;
    }
    public function setKids_ou_nao($kids_ou_nao): void {
        $this->kids_ou_nao = $kids_ou_nao;
    }
    public function setUsuarios_id($usuarios_id): void {
        $this->usuarios_id = $usuarios_id;
    }
}
?>