
<?php

class Shop extends Controller
{

    function SayHi()
    {
        $lop = $this->model("LopModel");
        return $this->view("aodep", [
            'Lops' => $lop->getAllLop(),
            'page' => 'shop'
        ]);
    }
}
?>