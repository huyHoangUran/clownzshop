<?php
class App
{
    // http://localhost/php/clownzshop/home/list/1/2/3(trong $controller = home; $action =  list; $params = 1/2/3)
    protected $controller = "Home";
    protected $action = "SayHi";
    protected $params = [];

    function __construct()
    {
        // Array ( [0] => home [1] => list )
        $arr = $this->UrlProcess();
        if (isset($arr) && file_exists("./mvc/controllers/" . $arr[0] . ".php")) {
            $this->controller = $arr[0];
            unset($arr[0]);
        }
        require_once "./mvc/controllers/" . $this->controller . ".php";
        $this->controller = new $this->controller;


        // Sử lý action
        if (isset($arr[1])) {
            if (method_exists($this->controller, $arr[1])) {
                $this->action = $arr[1];
            }
            unset($arr[1]);
        }

        // Xử lý params
        $this->params = $arr ? array_values($arr) : [];

        $controller = new $this->controller();
        call_user_func_array([$controller, $this->action], $this->params);
    }

    public function UrlProcess()
    {
        // isset($_GET['url']) ? $_GET['url'] : $_GET['url'] = "home";
        if (isset($_GET["url"])) {
            return explode("/", filter_var(trim($_GET["url"], "/")));
        }
    }
};
