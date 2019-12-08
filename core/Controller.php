<?php

class Controller {

    protected $db;

    public function __construct() {
        global $config;
        $this->db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
    }
    public function loadTemplate($viewName, $viewData = array()){
        include 'views/template.php';
    }

    public function loadTemplateInTaemplate($viewName, $viewData = array()){
        extract($viewData);
        include 'views/'.$viewName.'.php';
    }

}