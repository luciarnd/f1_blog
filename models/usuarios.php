<?php
class UsuariosModel extends Model{
	public function registrarse(){
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		$password = @md5($post['contrasena']);

		if(@$post['submit']){
			if($post['name'] == '' || $post['email'] == '' || $post['contrasena'] == '' || $post['apellido1'] == ''){
				Messages::setMsg('Please Fill In All Fields', 'error');
				return;
			}

			$this->query('INSERT INTO usuario (name, apellido1, email, contrasena) VALUES(:name, :apellido1, :email, :contrasena)');
			$this->bind(':name', $post['name']);
			$this->bind(':apellido1', $post['apellido1']);
            $this->bind(':email', $post['email']);
			$this->bind(':contrasena', $password);
			$this->execute();
			if($this->lastInsertId()){
				header('Location: '.ROOT_URL.'usuarios/iniciarsesion');
			}
		}
		return;
	}

	public function iniciarsesion(){
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		$password = @md5($post['contrasena']);

		if(@$post['submit']){
			$this->query('SELECT * FROM usuario WHERE email = :email AND contrasena = :contrasena');
			$this->bind(':email', $post['email']);
			$this->bind(':contrasena', $password);
			
			$row = $this->single();

			if($row){
				$_SESSION['is_logged_in'] = true;
				$_SESSION['user_data'] = array(
					"id"	=> $row['id'],
					"name"	=> $row['name'],
					"email"	=> $row['email'],
                    "rol" => $row['rol']
				);

				header('Location: '.ROOT_URL.'home');
			} else {
				Messages::setMsg('Incorrect Login', 'error');
			}
		}
		return;
	}
}