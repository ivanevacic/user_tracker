<?php

class Activity extends Database {

    public function getAllActivites() {
        $stmt = $this->connect()->query("SELECT * FROM activities");
        while($row = $stmt->fetch()) {
            $uid = $row['uid'];
            return $uid;
        }
    }
}
?>