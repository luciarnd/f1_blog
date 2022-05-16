<?php

class carreras extends Controller {
    protected function Index(){
        $viewmodel = new CarrerasModel();
        $this->returnView($viewmodel->Index(), true);
    }


    protected function delete(){
        if(!isset($_SESSION['is_logged_in'])){
            header('Location: '.ROOT_URL.'home');
        }
        $viewmodel = new CarrerasModel();
        $viewmodel->delete();
    }

    protected function add(){
        if(!isset($_SESSION['is_logged_in'])){
            header('Location: '.ROOT_URL.'home');
        }
        $viewmodel = new CarrerasModel();
        $this->returnView($viewmodel->add(), true);
    }

    protected function edit(){
        if(!isset($_SESSION['is_logged_in'])){
            header('Location: '.ROOT_URL.'home');
        }
        $viewmodel = new CarrerasModel();
        $row=$viewmodel->edit();
        $this->returnView($row, true);
    }

    protected function circuito()
    {
        if (!isset($_SESSION['is_logged_in'])) {
            header('Location: ' . ROOT_URL . 'home');
        }
        $viewmodel = new CarrerasModel();
        $row=$viewmodel->circuito();
        $this->returnView($row, true);

    }
}