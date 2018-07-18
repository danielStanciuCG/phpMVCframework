<?php

/**
 * App core class - creates URL & loads core controller
 * URL FORMAT - /controller/method/params
 */
class Core {
    protected $currentController = "Pages";
    protected $currentMethod = "index";
    protected $paramas = [];

    /**
     * Core constructor - initialises the application
     */
    public function __construct() {
        //print_r($this->getURL());
        $url = $this->getURL();

        //Look in controllers for first value
        if (file_exists("../app/controllers/" . ucwords($url[0]) . ".php")) {
            //If exists, set as controller
            $this->currentController = ucwords($url[0]);

            //Unset 0 Index
            unset($url[0]);
        }

        //Require and instantiate the controller
        require_once "../app/controllers/" . $this->currentController . ".php";
        $this->currentController = new $this->currentController;
    }

    /** Returns the URL paramaters.
     * @return array|mixed|string String array with the URL paramaters
     */
    public function getURL() {
        if (isset($_GET["url"])) {
            $url = rtrim($_GET["url"], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}