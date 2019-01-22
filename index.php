<?php
    include_once 'db/connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Home</title>
</head>
<body>

    <!-- NAVBAR -->
    <nav>
        <div class="nav-wrapper">
            <a href="#" class="brand-logo">User Tracking Software</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="admin.php">Admin</a></li>
            </ul>
        </div>
    </nav>
        <?php
            $object = new Database;
            $object->connect();
        ?>
</body>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</html>