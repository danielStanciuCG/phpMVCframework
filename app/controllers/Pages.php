<?php

class Pages extends Controller {
    private $model;

    public function __construct() {
        $this->model = $this->loadModel("Post");
    }

    public function index() {
        $posts = $this->model->getPosts();
        $data = [
            "title" => "Welcome",
            "posts" => $posts
        ];
        $this->loadView("pages/index", $data);
    }

    public function about() {
        $data = [
            "title" => "About"
        ];
        $this->loadView("pages/about", $data);
    }




}