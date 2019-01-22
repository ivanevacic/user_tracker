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
        //echo print_r($clientDetails, TRUE);

        $ip = $clientDetails['ip'];
        $hostname = $clientDetails['hostname'];
        $city = $clientDetails['city'];
        $region = $clientDetails['region'];
        $country = $clientDetails['country'];
        $loc = $clientDetails['loc'];
        $org = $clientDetails['org'];

        //check if user with that ip is already in db
        $chk = "SELECT ip FROM activities WHERE ip=:ip";
        $chkStmt = $this->connect()->prepare($chk);
        $chkStmt->bindParam(":ip", $ip);
        $chkStmt->execute();
        $no = $chkStmt->rowCount();
        if($no > 0) {
            // if true,update his datetime and times visited
            echo "IP ALREADY EXISTS";
            $exi = "UPDATE activities
                        SET last_visited = now()
                        SET times_visited = times_visited + 1
                    WHERE ip = ?
            ";
            $exiStmt = $this->connect()->prepare($exi);
            $exi->bindParam(":ip", $ip);
            $exiStmt->execute(array(':ip' => $ip));
            echo "UPDATE11 WORKING";
        } else {            
            // else insert as new record
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