<?php

namespace Horus\Core;

use Horus\Core\Router;

class App{


    /**
     * Metodo para declarar las rutas de la aplicacion
     */
    public function run()
    {

        $router = new Router();

        #Agregamos las rutas con el metodo add
        $router->add('', ['controller' => 'Welcome', 'action' => 'index']);
        $router->add('welcome/store', ['controller' => 'Welcome', 'action' => 'store']);
        
        #Se define la estructura de la ruta
        $router->add('{controller}/{action}');
        $router->dispatch($_SERVER['QUERY_STRING']);
    }

}