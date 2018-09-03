<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of conectar
 *
 * @author TECH INSTITUTE PC12
 */
class conectar {
    // crear el driver de conexion
    private $mysqli;

    function __construct() {
        $this->conectar();
    }
    private function conectar() {
        $this->mysqli = new mysqli();
        if ($this->mysqli->connect_error) {
            return "Fallo la conexion a mysql:(" .$this->mysqli->connect_errno .") ".$this->mysql->connect_error;                       
        } else {
            $this->mysqli->query("SET NAME 'utf8'");
            return "OK";
            
        }
    }

}
