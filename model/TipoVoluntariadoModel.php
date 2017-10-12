<?php
    require_once 'BaseModel.php';


class TypeVoluntariadoModel extends BaseModel {
      function getTypes(){
        $query = $this->db->prepare("SELECT id_voluntariado, nombre_voluntariado, descripcion FROM Tipo_Voluntariado");
        $query->execute();
        return $query->fetchAll();
      }

      function saveType($name, $descripcion){
        $query = $this->db->prepare('INSERT INTO Tipo_Voluntariado(nombre_voluntariado, descripcion)
                                     VALUES (:name, :descripcion)');
        $query->bindParam(':name', $name);
        $query->bindParam(':descripcion', $descripcion);
        return $query->execute();
      }

    function delete($id){
    	$query = $this->db->prepare('SELECT COUNT(id_voluntariado) FROM Voluntariados WHERE id_voluntariado = :id_voluntariado');
    	$query->bindParam(':id_voluntariado', $id);
    	$query->execute();
    	$count =  $query->fetchColumn();
    	if ($count == 0){
    		$query = $this->db->prepare('DELETE FROM Tipo_Voluntariado WHERE id_voluntariado = :id_voluntariado');
    		$query->bindParam(':id_voluntariado', $id);
    		return $query->execute();
    	} else
    		return false;

    }

    function update($obj){
      $query = $this->db->prepare('UPDATE Tipo_Voluntariado SET nombre_voluntariado = :name, descripcion = :descripcion WHERE id_voluntariado = :id_voluntariado');
      $query->bindParam(':id_voluntariado', $obj[0]);
      $query->bindParam(':name', $obj[1]);
      $query->bindParam(':descripcion', $obj[2]);
      return $query->execute();
    }

}


 ?>
