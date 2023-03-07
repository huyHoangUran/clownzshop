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
            "mau" => "green",
            "fontsize" => "1000px"
        ]);
    }
}
?>
<!-- Controller home -->