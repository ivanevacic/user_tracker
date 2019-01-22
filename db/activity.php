<?php

class Activity extends Database {

    public function getAllActivites() {
        $stmt = $this->connect()->query("SELECT * FROM activities");
        while($row = $stmt->fetch()) {
            $row = array_map('stripslashes', $row);
            $push[] = $row;
        }
        return $push;
    }

    public function saveActivity() {
        $i = $_SERVER['REMOTE_ADDR'];
        //$i = "193.217.131.133";
        $clientInfo = file_get_contents("http://ipinfo.io/$i/json");
        $clientDetails = json_decode($clientInfo, TRUE);

        $ip = $clientDetails['ip'];
        $hostname = $clientDetails['hostname'];
        $city = $clientDetails['city'];
        $region = $clientDetails['region'];
        $country = $clientDetails['country'];
        $loc = $clientDetails['loc'];
        $org = $clientDetails['org'];

        //check if ip is already in db
        $qu = "SELECT * FROM `activities` WHERE `ip`=:ip";
        $exsts = $this->connect()->prepare($qu);
        $exsts->execute(array(
            ":ip" => $ip,
        ));
        $res = $exsts->fetchColumn();
        if($res > 0) {
                //Res je ip adresa preko nje mogu updejtat
            $t = date("Y-m-d H:i:s");
            $data = [
                'res' => $res,
                'last_visited' => $t
            ];
            //times_visited = times_visited + 1
            $sql = "UPDATE activities
                        SET last_visited =:last_visited                       
                    WHERE ip =:res
            ";
            $updtstmt = $this->connect()->prepare($sql);
            $updtstmt->execute($data);
        } else {
            $q = "INSERT INTO activities(ip, hostname, city, region, country, location, organisation, last_visited, times_visited) VALUES (:ip, :hostname, :city, :region, :country, :loc, :organisation, now(), :times_visited)";
            $stmt = $this->connect()->prepare($q);
            $res = $stmt->execute(array(
                ":ip" => $ip,
                ":hostname" => $hostname,
                ":city" => $city,
                ":region" => $region,
                ":country" => $country,
                ":loc" => $loc,
                ":organisation" => $org,
                ":times_visited" => 1
            ));
            $msg = 'Your info was saved.Check out /admin to see your details';
            return $msg;
        }              
    }
}
?>