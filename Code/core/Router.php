<?php

class Router 
{
    protected $routes = []; //dec an array - routes.

    public function get($uri, $controllerAction) {
        $this->routes['GET'][$uri] = $controllerAction; //"$this" references to the object created by a class
                                                        //I assume this is a multidim array
                                                        //where the first entry is 'GET'
                                                        //"$uri" basically means some name of adress we
                                                        //want to get, and "$controllerAction" is what action
                                                        //we take.
    }
        //If we take uri=Database, then do some action=x, we would put into "$routes" an element:
        //GET->Database->x; where the -> is the relation of ordered belonging. 
        //meaning that "GET" is an array and so is any "uri", in my example "Database".
    public function post($uri, $controllerAction) { //similar to last but with post instead of get.
        $this->routes['POST'][$uri] = $controllerAction;
    }
        //we have to create these functions because "$routes" is a protected array.
        //this is done so that "$routes" can be edited only in the specific ways the functions interact with it.
        //(ble supratau, kad gal reikejo lietuviskai aisking, px too little to late.)
    public function dispatch() {
        $uri = $_SERVER['REQUEST_URI']; //pull uri from request.
        $method = $_SERVER['REQUEST_METHOD']; //and method.
        if (array_key_exists($uri, $this->routes[$method])) {   //checks if uri is in array "routes[$method]"
                                                                // and if it is an array
            $controllerAction = $this->routes[$method][$uri];   // since there is there has to be a  
                                                                // there has to be a controller action, by virtue of functions get and post
                                                                // we make new variable ca for further use.       
        } else {
            $baseUri = strtok($uri, '?'); //if it doesnt exist, then we throw away some part of uri, to get closer to base, to get a known method
            if (array_key_exists($baseUri, $this->routes[$method])) {
                $controllerAction = $this->routes[$method][$baseUri]; //same thing as before
            } else {
                header("HTTP/1.0 404 Not Found");
                echo '404 Not Found'; //shit makes no sense, so dies.
                return;
            }
        }
        list($controllerName, $action) = explode('@', $controllerAction);//$cA is "somename@someaction", we make kabum into a list, 
                                                                         //where $cName=somename, $action =someaction, (c is shorthand for controller)
        $controllerName = 'App\\Controllers\\' . $controllerName; //adds shit to name
        $controller = new $controllerName(); //create object with class that is the "controller name"
        $controller->$action(); //run action
    }
}
