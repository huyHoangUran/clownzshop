<?php

class Home extends Controller
{
    function SayHi()
    {
        $hoang  = $this->model("SinhVienModel");
        echo $hoang->getSV();
    }
    function Show($a, $b)
    {
        $hoang = $this->model("SinhVienModel");
        $tong =  $hoang->tong($a, $b);
        $this->view("aodep", [
            "count" => $tong,
            "page" => "contact",
            "sothich" => ['a', 'b', 'c']
        ]);
    }
    function News($a, $b)
    {
        $hoang = $this->model("SinhVienModel");
        $tong =  $hoang->tong($a, $b);
        $this->view("aodep", [
            "count" => $tong,
            "page" => "news",
            "sothich" => ['a', 'b', 'c']
        ]);
    }
}
?>
<!-- Controller home -->