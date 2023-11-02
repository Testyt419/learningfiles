<?php
spl_autoload_register(function ($className) {   //i have no clue what it does as a whole yet, 
                                                //something about auto loading a function in 
                                                //the specific case, $classname is a variable of the function
    $classPath = str_replace('\\', '/', $className); //replaces all instances of \\ by /,
                                                     //i would guess for the purposes of pathing
    $file = __DIR__ . '/' . $classPath . '.php';

    if (file_exists($file)) {
        require_once $file;
    }
}); //the entire function does the same as in the the bottom if you call it 
    //somehow - function (anyshit), you will get
    //require_once __DIR__ . '/core/anyshit.php';
    //however no idea how to input shit into the register
require_once __DIR__ . '/core/Router.php'; //basically include some file" but fucks you up*(crit error) instead of just warning you,
require_once __DIR__ . '/core/Controller.php';
require_once __DIR__ . '/core/Database.php';
require_once __DIR__ . '/core/Session.php';
Session::start(); //we included "Session.php", in which there was a "Session" class declared,
                    //in it there is a function start, and we call it. It starts the session
                    //if sessions are enabled (no idea how to check that) and there are no existing ones.
$router = new Router(); //dec new variable router, it is a an object of a class - Router.
                        //which we get from "Router.php", check "Router.php" for additional comments
                            //could make a file containing routes and include it but dont want to
$router->get('/',"IndexController@index");
$router->get('/table',"TableController@table");
$router->get('/sm',"SmController@sm");
$router->post('/send_mail',"SmController@send_mail");
$router->dispatch();


