<?php

require_once 'model/VoluntariadoModel.php';
require_once 'model/TipoVoluntariadoModel.php';
require_once 'view/MainView.php';

abstract class BaseController{

	protected $modelType;
	protected $modelVoluntariado;
	protected $view;

	function __construct(){
		$this->modelType = new TypeVoluntariadoModel();
		$this->modelVoluntariado = new VoluntariadoModel();
		$this->view = new MainView();
	}

	function buildVoluntariadoForTable(){
		$Voluntariados = $this->modelVoluntariado->getVoluntariados();
		$categories = $this->modelType->getTypes();
		$arreglo = array();
		foreach ($Voluntariados as $Voluntariado ) {
			$listOfVoluntariados = [
				'horarios' =>$Voluntariado['horarios'],
				'cant_voluntarios' =>$Voluntariado['cant_voluntarios'],
				'nombre_espacio' => $Voluntariado['nombre_espacio'],
				'id_voluntariado' => $Voluntariado['id_voluntariado'],
				'nombre_voluntariado' => ''
			];
			foreach($categories as $cat) {
				if ($Voluntariado['id_voluntariado'] == $cat['id_voluntariado']){
					$listOfVoluntariados['id_voluntariado'] = $cat['nombre_voluntariado'];
				}
			}
			array_push ($arreglo, $listOfVoluntariados);
		}

	 return $arreglo;
	}

	function getVoluntariadosForTable($args){
		$arreglo = $this->buildVoluntariadosForTable();
		$arr = array('voluntariados' => $arreglo);
		return $this->view->getHTML($args['tpl'], null, $arr);
	}


	abstract function getContent($args);

}
