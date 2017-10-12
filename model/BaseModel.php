<?php

require_once  ($_SERVER['DOCUMENT_ROOT']."/Web2/TPE2017/config/db_params.php");// ../config/db_params.php funciona para la api, asi no

abstract class BaseModel {

  protected  $voluntariado;
  protected  $db;

  function __construct() {
      $this->db = new PDO(DatabaseConfig::$DB_LOCATION, DatabaseConfig::$DB_USER, DatabaseConfig::$DB_PASSWORD);
      $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }

  abstract function delete($id);

  abstract function update($obj);

}


?>
