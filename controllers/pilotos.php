<?php
class Pilotos extends Controller{
    protected function Index(){
        $viewmodel = new PilotosModel();
        $this->returnView($viewmodel->Index(), true);
    }

    protected function add(){
        if(!isset($_SESSION['is_logged_in'])){
            header('Location: '.ROOT_URL.'home');
        }
        $viewmodel = new PilotosModel();
        $row= $viewmodel->add();
        $this->returnView($row, true);
    }

    protected function edit(){
        if(!isset($_SESSION['is_logged_in'])){
            header('Location: '.ROOT_URL.'home');
        }
        $viewmodel = new PilotosModel();
        $row=$viewmodel->edit();
        $this->returnView($row, true);
    }

    protected function delete(){
        if(!isset($_SESSION['is_logged_in'])){
            header('Location: '.ROOT_URL.'home');
        }
        $viewmodel = new PilotosModel();
        $viewmodel->delete();
        header('Location: '.ROOT_URL.'pilotos');
    }
}
