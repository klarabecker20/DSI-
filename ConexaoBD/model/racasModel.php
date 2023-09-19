<?php
require_once 'ConexaoMysql.php';

class racasModel {
    //Atributos ou propriedades
    protected $id;
    protected $nome;
    protected $descricao;
    protected $faixapreco;
    protected $faixapeso;
    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getFaixapreco() {
        return $this->faixapreco;
    }

    public function getFaixapeso() {
        return $this->faixapeso;
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

    public function setFaixapreco($faixapreco): void {
        $this->faixapreco = $faixapreco;
    }

    public function setFaixapeso($faixapeso): void {
        $this->faixapeso = $faixapeso;
    }

        
    public function __construct() {
        //Métodos
    }

    public function loadAll(){
        $db = new ConexaoMysql();
        $db->Conectar();
        $sql= "select* from racas";
        $resultlist = $db->Consultar($sql);
        $db->Desconectar();
        return $resultlist;
    }
}
