<?php

class Home extends Controller
{
    function SayHi()
    {
        $name  = $this->model("SinhVienModel");
        echo $name->getSV();
    }


    function Show($a, $b)
    {
        $hoang = $this->model("SinhVienModel");

        // $tong =  $hoang->tong($a, $b);
        $this->view("aodep", [
            "page" => "contact",
            "sothich" => ['a', 'b', 'c'],
            "sv" => $hoang->sinhVien(),
            "class" => $hoang->Lop()
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