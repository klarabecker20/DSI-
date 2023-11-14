<?php

require_once 'ConexaoMysql.php';

class obras_has_perfisModel {
    protected $obras_id;
    protected $perfis_id;
    public function __construct() {
        
    }
    public function getObras_id() {
        return $this->obras_id;
    }

    public function getPerfis_id() {
        return $this->perfis_id;
    }

    public function setObras_id($obras_id): void {
        $this->obras_id = $obras_id;
    }

    public function setPerfis_id($perfis_id): void {
        $this->perfis_id = $perfis_id;
    }


}
?>