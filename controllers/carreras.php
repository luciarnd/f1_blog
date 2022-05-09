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
        $viewmodel = new PilotosModel();
        $viewmodel->delete();
        header('Location: '.ROOT_URL.'carreras');
    }



}