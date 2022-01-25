<?php

namespace Horus\App\Controllers;

use Horus\Core\View;
use Horus\Core\Controller;

class Welcome extends Controller{


    public function indexAction()
    {
        View::render('Welcome/index.php');
    }

}