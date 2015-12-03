<?php
/**
 * Created by IntelliJ IDEA.
 * User: rorypb
 * Date: 01/12/2015
 * Time: 12:17 PM
 */

require_once 'garage.php';
require_once 'connection.php';
require_once 'garageTableGateway.php';



$connection = Connection::getInstance();
$gateway = new garageTableGateway($connection);

$statement = $gateway->getGarages();
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<table class="pure-table pure-table-bordered">
    <thead>
    <tr>
        <th>Address</th>
        <th>Phone No.</th>
        <th>Manager Name</th>
        <th>Garage Name</th>
        <th>Garage ID</th>
        <th>Service Date</th>
        <th>Manager Email</th>
        <th>Garage URL</th>
        <th>Over Night?</th>
    </tr>
    <?php
    $row = $statement->fetch(PDO::FETCH_ASSOC);
    while ($row) {

        echo '<tr class="pure-table-odd">';
        echo '<td>' . $row['garageAddress'] . '</td>';
        echo '<td>' . $row['phoneNo'] . '</td>';
        echo '<td>' . $row['managerName'] . '</td>';
        echo '<td>' . $row['nameofGarage'] . '</td>';
        echo '<td>' . $row['garageID'] . '</td>';
        echo '<td>' . $row['dateService'] . '</td>';
        echo '<td>' . $row['managerEmail'] . '</td>';
        echo '<td>' . $row['garageURL'] . '</td>';
        echo '<td>' . $row['overNight'] . '</td>';
        echo '</tr>';

        $row = $statement->fetch(PDO::FETCH_ASSOC);
    }
    ?>
</table>
</body>
</html>