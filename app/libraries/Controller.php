<?php

/**
 * Class Controller - base controller, loads the models and views.
 */
class Controller {

    /**
     * Loads model.
     * @param $model - the model that needs to be loaded.
     * @return mixed - the instantiated model
     */
    public function loadModel($model) {
        //Require model file
        require_once "../app/" . $model . ".php";

        //Instantiate model
        return new $model();
    }


    public function loadView($view, $data = []) {
        //Check for view file
        if (file_exists("../app/views" . $view . ".php")) {
            require_once "../app/views" . $view . ".php";
        } else {
            //View does not exist;
            die("View does not exist.");
        }
    }
}