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
        //$i = $_SERVER['REMOTE_ADDR'];
        $i = "193.217.131.119";
        $clientInfo = file_get_contents("http://ipinfo.io/$i/json");
        $clientDetails = json_decode($clientInfo, TRUE);
        echo print_r($clientDetails, TRUE);

        $ip = $clientDetails['ip'];
        $hostname = $clientDetails['hostname'];
        $city = $clientDetails['city'];
        $region = $clientDetails['region'];
        $country = $clientDetails['country'];
        $loc = $clientDetails['loc'];
        $org = $clientDetails['org'];

        $q = "INSERT INTO activities(ip, hostname, city, region, country, location, organisation, last_visited) VALUES (:ip, :hostname, :city, :region, :country, :loc, :organisation, now())";
        $stmt = $this->connect()->prepare($q);
        $res = $stmt->execute(array(
            ":ip" => $ip,
            ":hostname" => $hostname,
            ":city" => $city,
            ":region" => $region,
            ":country" => $country,
            ":loc" => $loc,
            ":organisation" => $org
        ));
        $msg = 'Your info was saved.Check out /admin to see your details';
        return $msg;
    }
}
?>