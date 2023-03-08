<?php

class API_Sinhvien extends Controller
{
    public function DanhSach()
    {
        // Gọi models
        $sinhvien = $this->model("SinhVienModel");
        $sv = $sinhvien->SinhVien();
        $arr = [];
        foreach ($sv as $SV) {
            array_push($arr, $SV['hoTen'], $SV['namSinh']);
        }
        print_r(json_encode($arr));
    }
}
