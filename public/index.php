<?php

/**
 * Route Controller
 * 
 * PHP Version ^7.0
 */

 /**
  * Composer
  */
  require dirname(__DIR__) . '/vendor/autoload.php';
  
  /**
   * Error y Excepciones handling
   */
  session_start();
  error_reporting(E_ALL);
  set_error_handler('Horus\Core\Error::errorHandler');
  set_exception_handler('Horus\Core\Error::exceptionHandler');

  $app = new \Horus\Core\App;
  $app->run();