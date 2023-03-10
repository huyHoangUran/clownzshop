<?php
    class ClassModel extends DB{
        function getClass(){
            $qr = "SELECT * FROM class";
            $stmt = $this->con->prepare($qr);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
