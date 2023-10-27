<?php
require_once 'ConexaoMysql.php';

class usuariosModel {

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

    public function __construct() {
        
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

    public function Autenticar() {
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $db = new ConexaoMysql();
        $db->Conectar();
        $resultList = $db->Consultar($sql);
        if ($db->total == 1) {
            session_start();
            $_SESSION['login'] = $email;
            header('location:../home.php');
        } else {
            header('location:../index.php?cod=50');
        }
        if (!isset($lembrar)) {
            if ($lembrar == 0) {
                setcookie('email', $email, time() + (86400 * 30), "/");
            }else{
                @setcookie('email', $email, time() - 86400, "/");
            }
            //Criei a sessão "login"
            $_SESSION['login'] = $email;
            header('location:../home.php');
        } else {
            //Login inválido
            header('location:../index.php?cod=50');
        }
        $db->Desconectar();
        return $resultList;
    }

}
?>
<!--  -->