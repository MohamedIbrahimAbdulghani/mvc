<?php

class app {
    private $controller;
    private $method;
    private $params;


    public function __construct() {
        $this->url();
        $this->render();
    }
    private function url() {
        if(!empty($_SERVER["QUERY_STRING"])):
        // explode() => to confirm the normal text to array
        $url = explode("/", $_SERVER["QUERY_STRING"]);
        $this->controller = isset($url[0]) ? $url[0] . " controller" :  " home controller";
        $this->method = isset($url[1]) ? $url[1] : "index";
        unset($url[0], $url[1]);
        $this->params = array_values($url);
        endif;
    }
    private function render() {

    }
}
