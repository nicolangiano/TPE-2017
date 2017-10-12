<?php

require_once 'BaseModel.php';


class VoluntariadoModel extends BaseModel{

      function getVoluntariados(){
         $query = $this->db->prepare("SELECT * FROM Voluntariados");
         $query->execute();
         return $query->fetchAll();
      }

      function saveVoluntariado($Voluntariados){
        $path = array();

        $query = $this->db->prepare('INSERT INTO voluntariados(espacio_voluntariado, horarios, cant_voluntarios, id_voluntariado)
                                        VALUES(:name_space, :horarios, :cant, :tipoVoluntariado)');

        $query->bindParam(':name_space', $Voluntariados->name_space);
        $query->bindParam(':horarios', $Voluntariados->horarios);
        $query->bindParam(':cant', $Voluntariados->cant);
        $query->bindParam(':tipoVoluntariado', $Voluntariados->tipoVoluntariado);
        return $query->execute();
      }

      function getVoluntariadosByTypeID($id){
        $query = $this->db->prepare('SELECT espacio_voluntariado, horarios, cant_voluntarios  FROM voluntariados WHERE id_voluntariado = :idtype');
        $query->bindParam('idtype', $id);
        $query->execute();
        return $query->fetchAll();
      }


      function delete($id){
      		$query = $this->db->prepare('DELETE FROM voluntariados WHERE id_voluntariado = :id_voluntariado');
      		$query->bindParam(':id_voluntariado', $id);
      		return $query->execute();

      }



      function update($obj){
			$query = $this->db->prepare('UPDATE voluntariados SET espacio_voluntariado:espacio_voluntariado, horarios:horarios, cant_voluntarios:cant_voluntarios WHERE id_voluntariado = :id');
			$query->bindParam(':id', $obj[0]);
			$query->bindParam(':espacio_voluntariado', $obj[1]);
			$query->bindParam(':horarios', $obj[2]);
      $query->bindParam(':cant_voluntarios', $obj[3]);
			return $query->execute();
      }

}


 ?>
