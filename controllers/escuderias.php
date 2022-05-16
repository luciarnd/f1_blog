<?php

class escuderias extends Controller {
    protected function Index(){
        $viewmodel = new EscuderiasModel();
        $this->returnView($viewmodel->Index(), true);
    }

    protected function add(){
        if(!isset($_SESSION['is_logged_in'])){
            header('Location: '.ROOT_URL.'home');
        }
        $viewmodel = new EscuderiasModel();
        $this->returnView($viewmodel->add(), true);
    }

    protected function edit(){
        if(!isset($_SESSION['is_logged_in'])){
            header('Location: '.ROOT_URL.'home');
        }
        $viewmodel = new EscuderiasModel();
        $row=$viewmodel->edit();
        $this->returnView($row, true);
    }

    protected function delete(){
        if(!isset($_SESSION['is_logged_in'])){
            header('Location: '.ROOT_URL.'home');
        }
        $viewmodel = new EscuderiasModel();
        $viewmodel->delete();
    }
}