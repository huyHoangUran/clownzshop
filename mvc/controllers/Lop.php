<?php

class Lop extends Controller


{

    public $ClassModel;
    function __construct()
    {
        $this->ClassModel = $this->model("ClassModel");
    }


    function getLop()
    {
        // $lop = $this->model("ClassModel");
        return $this->view('home', [
            'page' => "lop",
            'lop' => $this->ClassModel->getClass()
        ]);
    }
}
