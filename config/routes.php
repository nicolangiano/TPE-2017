<?php
return [
	'/' => [
			'controller' => 'main',
			'method' => 'getHome',
			'tpl' => 'home'
	],
	'home' => [
			'controller' => 'main',
			'method' => 'getVoluntariadosForTable',
			'tpl' => 'home',
	],
	'faq' => [
			'controller' => 'main',
			'method' => 'getContent',
			'tpl' => 'faq'
	],
	'login' => [
			'controller' => 'main',
			'method' => 'getContent',
			'tpl' => 'login',
	],
	'catalog' => [
			'controller' => 'admin',
			'method' => 'getContent',
			'tpl' => 'catalog',
	],
	'voluntariados-list' => [
			'controller' => 'catalog',
			'method' => 'getVoluntariadosByID',
			'tpl' => 'public-voluntariados-list',
			'args' => ['id']
	],
	'loginIn' => [
			'controller' => 'remote',
			'method' => 'login',
			'tpl' => 'home'
	],
	'logout' => [
			'controller' => 'remote',
			'method' => 'logout',
			'tpl' => 'home'
	],
	'admin-list-voluntariados' => [
			'controller' => 'admin',
			'method' => 'getVoluntariadosForTable',
			'tpl' => 'admin-list-voluntariados',
	],
	'admin-voluntariado-form' => [
			'controller' => 'admin',
			'method' => 'getContent',
			'tpl' => 'admin-voluntariados-form',
	],
	'editFormtype' =>[
			'controller' => 'admin',
			'method' => 'getContent',
			'tpl' => 'admin-list-type',
	],
	'admin-type-form'=>[
			'controller'=>'admin',
			'method' => 'getContent',
			'tpl' => 'admin-type-form',
	],
	'editFormVoluntariados'=>[
			'controller'=>'admin',
			'method' => 'getContent',
			'tpl' => 'admin-list-voluntariados',
	]



];
