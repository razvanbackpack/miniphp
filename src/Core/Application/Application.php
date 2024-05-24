<?php

namespace App\Core\Application;
use Illuminate\Container\Container;
use App\Core\Routing\Route;

class Application extends Container 
{
    public function __construct()
    {
        $this->loadRoutes();
    }

    public function Run()
    {
        // legit don't know what to do with this atm.
        // left this here anyway
    }    

    public function Terminate()
    {
        Route::ValidateRoute();
        exit();
    }


    private function loadRoutes()
    {
        require_once BASEDIR.'/routes/web.php';
    }
}