<?php

require_once 'BaseController.php';

class AdminController extends BaseController{

	function __construct(){
		parent::__construct();
	}

	function addType(){
		if (isset($_REQUEST['typeVoluntariadoInput'])){
			$result = $this->modelType->saveType($_REQUEST['typeVoluntariadoInput']);
			if ($result){
				return "Se agregó la seccion con exito";
			}
			else {
				return "Se ha encontrado un problema al agregar la seccion";
			}
		}
	}


	function addVoluntariado(){

		if (isset($_REQUEST['voluntariadoName']) && isset($_FILES['voluntariadoToUpload']) && isset($_FILES['voluntariadoImageToUpload'])){
			$voluntariado = new stdClass; //se crea el objeto libro para guardar el libro en la base de datos
			$voluntariado->name = $_REQUEST['voluntariadoName'];
			$voluntariado->type = $_REQUEST['voluntariadoType'];

			$result = $this->modelVoluntariado->saveVoluntariado($voluntariado, $_FILES['voluntariadoToUpload'], $_FILES['voluntariadoImageToUpload']);
			if ($result){
				return "Se agregó el voluntariado con exito";
			}
			else {
				return "Se ha encontrado un problema al agregar el voluntariado. Te faltó subir algo";
			}
		}
	}

	function getContent($args){
		$sections = $this->modelType->getType();
		$arr = array('type' => $type);
		return $this->view->getHTML($args['tpl'], null, $arr);
	}


	function login(){
		$params[ConfigApp::$VIEW_CONTENT] = ConfigApp::$VIEW_TEMPLATE_BASEPATH . ConfigApp::$ACTION_DEFAULT . ConfigApp::$VIEW_TPL_EXT;
		$params[ConfigApp::$VIEW_NAV] = ConfigApp::$VIEW_COMPONENT_BASEPATH . ConfigApp::$VIEW_NAV_ADMIN . ConfigApp::$VIEW_TPL_EXT;
		return $this->view->getHTML(ConfigApp::$VIEW_BASE_TEMPLATE, null, $params);
	}

}
