<?php

class ConfigApp {
  
  public static $ACTION = 'action'; //action
  public static $ACTION_DEFAULT = 'home';

  /*
   * Definen que áreas del sitio web se cargan
   * */
  public static $ACTION_LOAD_VOLUNTARIADO_LIST = 'admin-list-voluntariados';
  public static $ACTION_LOAD_VOLUNTARIADO_FORM = 'admin-voluntariados-form';
  public static $ACTION_LOAD_TYPE_LIST = 'admin-list-type';
  public static $ACTION_LOAD_TYPE_FORM = 'admin-type-form';

  public static $ACTION_LOAD_FAQS = 'faq';
  public static $ACTION_LOAD_CATALOG = 'catalog';
  public static $ACTION_LOAD_LOGIN = 'login';

  /*
   * Definen acciones a ejecutar sobre el contenido del sitio
   * */
  public static $ACTION_ADD_VOLUNTARIADO = 'add-voluntariado'; //Agrega el voluntariado
  public static $ACTION_ADD_TYPE = 'add-type'; //Agrega el tipo de voluntariado

  /*
   * Definen el login/logout
   * */
  public static $ACTION_RUN_LOGIN = 'loginIn';
  public static $ACTION_RUN_LOGOUT = 'logout';

  /*
   * Definen constantes asociadas a la Vista del sitio
   * */
  public static $VIEW_CONTENT = 'content';
  public static $VIEW_NAV = 'nav';
  public static $VIEW_TEMPLATE_BASEPATH = 'templates/';
  public static $VIEW_COMPONENT_BASEPATH = 'templates/components/';
  public static $VIEW_BASE_TEMPLATE = 'index';
  public static $VIEW_TPL_EXT = '.tpl';

}
