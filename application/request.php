<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Request
{
    private $_controlador;
    private $metodo;
    private $argumentos;
    
    public function __construct() {
        if(isset($_GET['url'])){
            $url =  filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            $url = array_filter($url);
        }
        
        $this->_controlador = array_shift($url);
        $this->_metodo = array_shift($url);
        $this->_argumentos = ($url);
        
        if(!$this->_controlador){
            $this->_controlador = DEFAULT_CONTROLLER;
        }
        
    }
}


?>