<?php

class PilotosModel extends Model
{
    public function Index(){
        $this->query('SELECT pilotos.id, pilotos.nombre, apellido, num_coche, procedencia, escuderias.nombre as escuderia, pilotos.img_url FROM pilotos INNER JOIN escuderias ON escuderias.id=pilotos.id_escuderia');
        $rows = $this->resultSet();
        return $rows;
    }

    public function add(){
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if(@$post['submit']) {
            if (@$post['nombre'] == '' || $post['apellido'] == '' || $post['procedencia'] == '' || $post['img_url'] == '' || $post['num_coche'] == '' || $post['escuderia'] == '') {
                Messages::setMsg('Please Fill In All Fields', 'error');
                return;
            }

            $this->query('INSERT INTO pilotos (nombre, apellido, num_coche, procedencia, id_escuderia, img_url) VALUES(:nombre, :apellido, :num_coche, :procedencia, :id_escuderia, :img_url)');
            $this->bind(':nombre', $post['nombre']);
            $this->bind(':apellido', $post['apellido']);
            $this->bind(':num_coche', $post['num_coche']);
            $this->bind(':procedencia', $post['procedencia']);
            $this->bind(':id_escuderia', $post['escuderia']);
            $this->bind(':img_url', $post['img_url']);
            $this->execute();
            header('Location: '.ROOT_URL.'pilotos');

        } else {
            $this->query('SELECT id, nombre FROM escuderias');
            $rows = $this->resultSet();
            return $rows;
        }
    }

    public function edit(){
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if(isset($post['submit'])){
            $this->query('UPDATE pilotos SET nombre = :nombre, apellido = :apellido,  num_coche = :num_coche, procedencia = :procedencia, id_escuderia = :id_escuderia, img_url = :img_url WHERE id = :id');
            $this->bind(":id", $_GET['id']);
            $this->bind(':nombre', $post['nombre']);
            $this->bind(':apellido', $post['apellido']);
            $this->bind(':num_coche', $post['num_coche']);
            $this->bind(':procedencia', $post['procedencia']);
            $this->bind(':id_escuderia', $post['escuderia']);
            $this->bind(':img_url', $post['img_url']);
            $this->execute();
            header('Location: '.ROOT_URL.'pilotos');
        }else{
            $this->query('SELECT * FROM pilotos WHERE id = :id');
            $this->bind(':id', $_GET['id']);
            $row = $this->single();
            return $row;
        }
        return;
    }

    public function delete() {
        if(isset($_GET['id'])) {
            $this->query('DELETE FROM pilotos WHERE id = :id');
            $this->bind(':id', $_GET['id']);
            $this->execute();
        }
    }


}