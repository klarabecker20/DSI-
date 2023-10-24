<?php
require_once 'ConexaoMysql.php';
class usuariosModel{
    //Atributos ou propriedades
    protected $id;
    protected $email;
    protected $senha;
    protected $nome;
    protected $tipo_usuario;
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

    public function getTipo_usuario() {
        return $this->tipo_usuario;
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

    public function setTipo_usuario($tipo_usuario): void {
        $this->tipo_usuario = $tipo_usuario;
    }
    
    public function __construct() {
        
    }
     public function insert() {
        //Criar um objeto de conexão
        $db = new ConexaoMysql();
        //Abrir conexão com banco de dados
        $db->Conectar();
        //Criar consulta
        $sql = 'INSERT INTO usuarios values (0,
                "'.$this->email.'",
                "'.$this->senha.'",
                "'.$this->nome.'",
                "'.$this->tipo_usuario.'")';
        //Executar método de inserção
        $db->Executar($sql);
        
        //Desconectar do banco
        $db->Desconectar();
        
        return $db->total;
    }
}
?>