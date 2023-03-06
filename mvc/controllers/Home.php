<?php

class Home extends Controller
{
    function SayHi()
    {
        $hoang  = $this->model("SinhVienModel");
        echo $hoang->getSV();
    }
    function List()
    {
        $hoang  = $this->model("SinhVienModel");
        echo $hoang->getSV();
    }
    function Show($a, $b)
    {
        $hoang = $this->model("SinhVienModel");
        echo $hoang->tong($a, $b);
    }
}
?>
<!-- Controller home -->