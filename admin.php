<?php
    include_once 'db/connection.php';
    include_once 'db/activity.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Admin</title>
</head>
<body>

    <!-- NAVBAR -->
    <nav>
        <div class="nav-wrapper">
            <a href="#" class="brand-logo">User Tracking Software</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="index.php">Home</a></li>
            </ul>
        </div>
    </nav>

    <!-- TABLE -->
    <table>
        <thead>
          <tr>
              <th>IP Address</th>
              <th>Host Name</th>
              <th>City</th>
              <th>Region</th>
              <th>Country</th>
              <th>Location</th>
              <th>Organisation</th>
              <th>Last Visited</th>
              <th>Times visited</th>
          </tr>
        </thead>

        <?php
            $obj = new Activity();
            $acts = $obj->getAllActivites();
            foreach($acts as $act) {
                echo "<tr>";
                    echo "<td>".$act['ip']."</td>";
                    echo "<td>".$act['hostname']."</td>";
                    echo "<td>".$act['city']."</td>";
                    echo "<td>".$act['region']."</td>";
                    echo "<td>".$act['country']."</td>";
                    echo "<td>".$act['location']."</td>";
                    echo "<td>".$act['organisation']."</td>";
                    echo "<td>".$act['last_visited']."</td>";
                    echo "<td>".$act['times_visited']."</td>";
                echo "</tr>";
            }  
        ?>
    </table>

</body>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</html>

