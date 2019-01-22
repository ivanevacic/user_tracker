<?php

class Activity extends Database {

    public function getAllActivites() {
        $stmt = $this->connect()->query("SELECT * FROM activities");
        while($row = $stmt->fetch()) {
            //echo print_r($row, TRUE);
            $row = array_map('stripslashes', $row);
            $push[] = $row;
        }
        return $push;
    }

    public function saveActivity() {
        //$ip=$_SERVER['REMOTE_ADDR'];
        $ip = "193.217.131.119";
        $clientDetails = json_decode(file_get_contents("http://ipinfo.io/$ip/json"));
        print_r(json_encode($clientDetails, TRUE));
    }
}
?>