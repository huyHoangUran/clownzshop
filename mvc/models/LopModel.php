<?php
class LopModel extends DB
{

    function getAllLop()
    {
        $qr = "SELECT * FROM class";
        $stmt = $this->con->prepare($qr);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
