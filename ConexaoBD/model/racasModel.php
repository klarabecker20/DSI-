<?php
require_once 'ConexaoMysql.php';

class racasModel {

    //Atributos ou propriedades
    protected $id;
    protected $nome;
    protected $descricao;
    protected $faixapreco;
    protected $faixapeso;

    //alt+insert 
    //metodos acessores (get) e modificadores (set)
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

    //Método construtor
    public function __construct() {
        
    }

//metodos especialistas
    public function loadAll() {
        //Criar um objeto de conexão
        $db = new ConexaoMysql();
        //Abrir conexão com banco de dados
        $db->Conectar();
        //Criar consulta
        $sql = 'SELECT * FROM racas';
        //Executar método de consulta
        $resultList = $db->Consultar($sql);
        //Desconectar do banco
        $db->Desconectar();
        return $resultList;
    }

    public function loadById($id) {
        //Criar um objeto de conexão
        $db = new ConexaoMysql();
        //Abrir conexão com banco de dados
        $db->Conectar();
        //Criar consulta
        $sql = 'SELECT * FROM racas where id =' . $id;
        //Executar método de consulta
        $resultList = $db->Consultar($sql);
        // verifica se retornou um registro da base de dados
        if ($db->total == 1) {
            //se retornou popula as propriedades de raca 
            foreach ($resultList as $value) {
                $this->id = $value['id'];
                $this->nome = $value['nome'];
                $this->descricao = $value['descricao'];
                $this->faixapreco = $value['faixa_preco'];
                $this->faixapeso = $value['faixa_peso'];
            }
        }
        //Desconectar do banco
        $db->Desconectar();
        return $resultList;
    }

    public function insert() {
        //Criar um objeto de conexão
        $db = new ConexaoMysql();
        //Abrir conexão com banco de dados
        $db->Conectar();
        //Criar consulta
        $sql = 'INSERT INTO racas values (0,
                "'.$this->nome.'",
                "'.$this->descricao.'",
                "'.$this->faixapeso.'",
                "'.$this->faixapreco.'")';
        //Executar método de inserção
        $db->Executar($sql);
        
        //Desconectar do banco
        $db->Desconectar();
        
        return $db->total;
    }
    public function update() {
        //Criar um objeto de conexão
        $db = new ConexaoMysql();
        //Abrir conexão com banco de dados
        $db->Conectar();
        //Criar consulta
        $sql = 'UPDATE racas SET '
                . 'nome="'.$this->nome.'",'
                . 'descricao="'.$this->descricao.'",'
                . 'faixa_peso ="'.$this->faixapeso.'",'
                . 'faixa_preco ="'.$this->faixapreco.'"'
                . 'WHERE id = '.$this->id;
        //Executar método de inserção
        $db->Executar($sql);
        //Desconectar do banco
        $db->Desconectar();
        
        return $db->total;
    }
    public function delete() {
        //Criar um objeto de conexão
        $db = new ConexaoMysql();
        //Abrir conexão com banco de dados
        $db->Conectar();
        //Criar consulta
        $sql = 'DELETE FROM racas where id='.$this->id;
        //Executar método de inserção
        $db->Executar($sql);
        //Desconectar do banco
        $db->Desconectar();
        
        return $db->total;
    }

}
