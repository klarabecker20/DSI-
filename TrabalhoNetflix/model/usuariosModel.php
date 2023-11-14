<?php

require_once 'ConexaoMysql.php';

class usuariosModel {

//Atributos ou propriedades
    protected $id;
    protected $email;
    protected $senha;
    protected $nome;

    public function __construct() {
        
    }

    public function getId() {
        return $this->id;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setEmail($email): void {
        $this->email = $email;
    }

    public function setSenha($senha): void {
        $this->senha = $senha;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function insert() {
//Criar um objeto de conexão
        $db = new ConexaoMysql();
//Abrir conexão com banco de dados
        $db->Conectar();
//Criar consulta
        $sql = 'INSERT INTO usuarios values (0,
                "' . $this->email . '",
                "' . $this->senha . '",
                "' . $this->nome . '")';
//Executar método de inserção
        $db->Executar($sql);
//Desconectar do banco
        $db->Desconectar();
        return $db->total;
    }

    public function loadAll() {
//Criar um objeto de conexão
        $db = new ConexaoMysql();
//Abrir conexão com banco de dados
        $db->Conectar();
//Criar consulta
        $sql = 'SELECT * FROM usuarios';
//Executar método de consulta
        $resultList = $db->Consultar($sql);
//Desconectar do banco
        $db->Desconectar();
        return $resultList;
    }

    public function Autenticar($email,$senha) {
        $sql = 'SELECT * FROM usuarios WHERE email = "' . $email . '" AND senha = "' . $senha . '"';
        $db = new ConexaoMysql();
        $db->Conectar();
        $resultList = $db->Consultar($sql);
        if ($db->total == 1) {
            foreach ($resultList as $data) {
                $this->id = $data['id'];
                $this->email = $data['email'];
            }
            @session_start();
            $_SESSION['id'] = $this->id;
            $_SESSION['login'] = $this->email;
            header('location:../home.php');
        } else {
            header('location:../index.php?cod=50');
        }

        $db->Desconectar();
        return $resultList;
        
    }

    public function loadById($id) {
//Criar um objeto de conexão
        $db = new ConexaoMysql();
//Abrir conexão com banco de dados
        $db->Conectar();
//Criar consulta
        $sql = 'SELECT * FROM usuarios where id =' . $id;
//Executar método de consulta
        $resultList = $db->Consultar($sql);
// verifica se retornou um registro da base de dados
        if ($db->total == 1) {
//se retornou popula as propriedades de raca 
            foreach ($resultList as $value) {
                $this->id = $value['id'];
                $this->email = $value['email'];
                $this->senha = $value['senha'];
                $this->nome = $value['nome'];
            }
        }
//Desconectar do banco
        $db->Desconectar();
        return $resultList;
    }

    public function update() {
//Criar um objeto de conexão
        $db = new ConexaoMysql();
//Abrir conexão com banco de dados
        $db->Conectar();
//Criar consulta
        $sql = 'UPDATE usuarios SET '
                . 'email="' . $this->email . '",'
                . 'senha="' . $this->senha . '", '
                . 'nome ="' . $this->nome . '"'
                . ' WHERE id = ' . $this->id;
//Executar método de inserção
        $db->Executar($sql);
//Desconectar do banco
        $db->Desconectar();
        return $db->total;
    }

}

?>