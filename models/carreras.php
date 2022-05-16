<?php
class CarrerasModel extends Model{
    public function Index(){
        $this->query('SELECT carreras.id as id_carreras, carreras.nombre as carrera, informacion, pilotos.nombre, pilotos.apellido, carreras.img_url FROM carreras INNER JOIN pilotos ON pilotos.id=carreras.id_pilotoganador');
        $row = $this->resultSet();
        return $row;
    }

    public function add(){
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if(@$post['submit']){
            if(@$post['nombre'] == '' || $post['informacion'] == '' || $post['id_pilotoganador'] == ''){
                Messages::setMsg('Please Fill In All Fields', 'error');
                return;
            }

            $this->query('INSERT INTO carreras (nombre, informacion, id_pilotoganador, img_url) VALUES(:nombre, :informacion, :id_pilotoganador, :img_url)');
            $this->bind(':nombre', $post['nombre']);
            $this->bind(':informacion', $post['informacion']);
            $this->bind(':id_pilotoganador', $post['id_pilotoganador']);
            $this->bind(':img_url', $post['img_url']);
            $this->execute();
            header('Location: '.ROOT_URL.'carreras');

        } else {
            $this->query('SELECT * FROM pilotos');
            $rows = $this->resultSet();
            return $rows;
        }
        return;
    }

    public function edit(){
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if(isset($post['submit'])){
            $this->query('UPDATE carreras SET nombre = :nombre, informacion = :informacion,  id_pilotoganador = :id_pilotoganador, img_url = :img_url WHERE id = :id');
            $this->bind(":id", $_GET['id']);
            $this->bind(':nombre', $post['nombre']);
            $this->bind(':informacion', $post['informacion']);
            $this->bind(':id_pilotoganador', $post['id_pilotoganador']);
            $this->bind(':img_url', $post['img_url']);
            $this->execute();
            header('Location: '.ROOT_URL.'carreras');
        }else{
            $this->query('SELECT * FROM carreras WHERE id = :id');
            $this->bind(':id', $_GET['id']);
            $carrera = $this->single();
            $this->query('SELECT * FROM pilotos');
            $piloto= $this->resultSet();
            return [$carrera, $piloto];
        }
    }

    public function delete() {
        if(isset($_GET['id'])) {
            $this->query('DELETE FROM carreras WHERE id = :id');
            $this->bind(':id', $_GET['id']);
            $this->execute();
        }
        header('Location: '.ROOT_URL.'carreras');
    }

    public function circuito() {
        if(isset($_GET['id'])) {
            $this->query('SELECT carreras.id as id_carreras, carreras.nombre as carrera, informacion, pilotos.nombre, pilotos.apellido, carreras.img_url FROM carreras INNER JOIN pilotos ON pilotos.id=carreras.id_pilotoganador WHERE carreras.id = :id');
            $this->bind(':id', $_GET['id']);
            return $this->single();
        }
    }
}
