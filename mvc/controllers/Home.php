<?php

class Home extends Controller
{
    function SayHi()
    {
        $name  = $this->model("SinhVienModel");
        echo $name->getSV();
    }
<<<<<<< HEAD
    function Show($a, $b)
=======
    function Shows($a, $b)
>>>>>>> 66f935e1bf6fe5e6f70dc4a302f817bfb3684f14
    {
        $hoang = $this->model("SinhVienModel");
        echo $hoang->hieu($a, $b);
    }
}
?>
<!-- Controller home -->