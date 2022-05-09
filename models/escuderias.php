<?php

class EscuderiasModel extends Model
{
    public function Index(){
        $this->query('SELECT * FROM escuderias');
        $rows = $this->resultSet();
        return $rows;
    }

    public function add(){
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if(@$post['submit']){
            if(@$post['nombre'] == '' || $post['tipo_motor'] == '' || $post['nom_director'] == '' || $post['img_url'] == ''){
                Messages::setMsg('Please Fill In All Fields', 'error');
                return;
            }

            $this->query('INSERT INTO escuderias (nombre, tipo_motor, nom_director, img_url) VALUES(:nombre, :tipo_motor, :nom_director, :img_url)');
            $this->bind(':nombre', $post['nombre']);
            $this->bind(':tipo_motor', $post['tipo_motor']);
            $this->bind(':nom_director', $post['nom_director']);
            $this->bind(':img_url', $post['img_url']);
            $this->execute();

            if($this->lastInsertId()){
                header('Location: '.ROOT_URL.'escuderias');
            }
        }
        return;
    }

    public function edit(){
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if(isset($post['submit'])){
            $this->query('UPDATE escuderias SET nombre = :nombre, tipo_motor = :tipo_motor, nom_director = :nom_director, img_url = :img_url WHERE id = :id');
            $this->bind(":id", $_GET['id']);
            $this->bind(':nombre', $post['nombre']);
            $this->bind(':tipo_motor', $post['tipo_motor']);
            $this->bind(':nom_director', $post['nom_director']);
            $this->bind(':img_url', $post['img_url']);
            $this->execute();
            header('Location: '.ROOT_URL.'escuderias');
        }else{
            $this->query('SELECT * FROM escuderias WHERE id = :id');
            $this->bind(':id', $_GET['id']);
            $row = $this->single();
            return $row;
        }
        return;
    }

    public function delete() {
        if(isset($_GET['id'])) {
            $this->query('DELETE FROM escuderias WHERE id = :id');
            $this->bind(':id', $_GET['id']);
            $this->execute();
        }
    }

}