<?php
  require_once 'BaseModel.php';


class UserModel extends BaseModel {

    function getUserCredentials($username, $password){
      $query = $this->db->prepare('SELECT * FROM Usuario WHERE nombre_usuario = :username  AND clave = :password');
      $query->bindParam(':username', $username);
      $query->bindParam(':password', md5($password));
      $query->execute();
    	return $query->fetchAll();
    }
 	function delete($id){
    	$query = $this->db->prepare('DELETE FROM Usuario WHERE id_usuario = :id_user');
    	$query->bindParam(':id_user', $id);
    	return $query->execute();
    }

    function update($obj){

    }
}

 ?>
