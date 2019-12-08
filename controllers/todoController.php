<?php

class todoController extends Controller{

    public function __construct(){
        parent::__construct();
        $t = new Tarefas();
    }
    public function index(){}


    public function listar(){
        $array = array();

        $array = $t->listar();

        header("Content-Type: application/json");

        echo json_encode($array);
    }

    public function add(){
        if(isset($_POST['titulo']) && !empty($_POST['titulo'])){
            $titulo = addslashes($_POST['titulo']);

            $t->addTarefa($titulo);
        }
    }

    public function del(){
        if(isset($_POST['id']) && !empty($_POST['id'])) {
            $id = addslashes($_POST['id']);

            $t->delTarefa($id);
        }
    }

    public function update(){
        if(isset($_POST['id']) && !empty($_POST['id'])) {
            $id = addslashes($_POST['id']);
            $status = addslashes($_POST['status']);

            $t = new Tarefas();
            $t->updateStatus($status, $id);
        }
    }
}