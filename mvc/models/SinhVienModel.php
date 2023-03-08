<?php

class SinhVienModel extends DB
{
    public function getSV()
    {

        return "Nguyễn Huy Hoàng";
    }
    public function tong($a, $b)
    {
        return $a + $b;
    }
    public function hieu($a, $b)
    {
        return $a + $b;
    }

    public function SinhVien()
    {
        $qr = "SELECT * FROM sinhVien";
        $stmt = $this->con->prepare($qr);
        $stmt->execute();
        return $sinhVien = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function Lop()
    {
        $qr = "SELECT * FROM class";
        $stmt = $this->con->prepare($qr);
        $stmt->execute();
        return $class = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
