<?php
require_once 'BaseController.php';

class CatalogController extends BaseController{

	function __construct(){
		parent::__construct();
	}

	function getContent($content){}

	function getVoluntariadosByID($args){
		$voluntariados = $this->modelVoluntariado->getVoluntariadosByTypeID($args['args']['id']);
		$arr = array('voluntariados' => $voluntariados);
		return $this->view->getHTML($args['tpl'], null, $arr);
	}

}
