<?php

class Home extends Controller
{
    function SayHi()
    {
        $name  = $this->model("SinhVienModel");
        echo $name->getSV();
    }
    function List($a, $b)
    {
        $hoang = $this->model("SinhVienModel");
        echo $hoang->hieu($a, $b);
    }
}
?>
<!-- Controller home -->