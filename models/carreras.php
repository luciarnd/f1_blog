<?php
class CarrerasModel extends Model{
    public function Index(){
        $this->query('SELECT * FROM carreras');
        $row = $this->resultSet();
        return $row;
    }

    public function add(){
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if(@$post['submit']){
            if(@$post['nombre_circuito'] == '' || $post['informacion'] == '' || $post['id_pilotoganador'] == ''){
                Messages::setMsg('Please Fill In All Fields', 'error');
                return;
            }

            $this->query('INSERT INTO carreras (nombre_circuito, informacion, id_pilotoganador) VALUES(:nombre, :tipo_motor, :nom_director, :img_url)');
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

    public function delete() {
        if(isset($_GET['id'])) {
            $this->query('DELETE FROM carreras WHERE id = :id');
            $this->bind(':id', $_GET['id']);
            $this->execute();
        }
    }
}
