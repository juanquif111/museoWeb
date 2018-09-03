<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Datos
 *
 * @author TECH INSTITUTE PC12
 * 
 */
class Datos {
    /*     * Estos datos son los que yo requiero para conectarse a la base de datos
     * Siempre para conectar con la base de datos se requiere 4 parametros:
      URL DEL SERVIDOR
      USUARIO DEL GESTOR DE BASE DE DATOS
      CONTRASEÑA DEL GESTOR DE BASE DE DATOS
      NOMBRE DE LA BASE DE DATOS CON LA QUE ME VOY A CONECTAR.
     */

    private $hostname = "localhost";
    private $user = "root";
    private $password = "";
    private $bd = "flas11";

    public function getHostname() {
        return $this->hostname;
    }
    public function getUser() {
        return $this->user;
    }
    public function getPassword() {
        return $this->password;
    }
    public function getBd() {
        return $this->bd;
    }



}
