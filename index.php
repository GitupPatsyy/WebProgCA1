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

echo "Connected to the database";
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
    <link rel="stylesheet" href="css/global.css">
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <meta charset="UTF-8">
    <title>Base View of Garages</title>
    <script type="text/javascript">
        window.onload = function () {
            var deleteGarage = document.getElementsByClassName("delete");
            for (var i = 0; i != deleteGarage.length; i++) {
                var link = deleteGarage[i];
                link.addEventListener("click", function (event) {
                    var deleteConfirmed = confirm("Are you sure you want to delete this?");
                    if (!deleteConfirmed) {
                        event.preventDefault();
                    }
                });
            }
        }
    </script>

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
        <th>Actions</th>

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
        echo '<td>' . '<a href="viewGarage.php?id=' . $row['garageID']
            . '"><img src="icons/search67.png" width="30px" height="30px" style="padding-right: 10px"/></a>'
            . '<a href="editGarageForm.php?id=' . $row['garageID'] . '"><img src="icons/edi.png" width="30px" height="30px"/></a>'
            . '<a href="deletegarage.php?garageID=' . $row['garageID'] . '"><img src="icons/del.png" style="padding-left: 10px" width="30px" height="30px"/></a>';
        echo '</tr>';

        $row = $statement->fetch(PDO::FETCH_ASSOC);
    }
    ?>


</table>
<a href="addgarage.php"> <img src="icons/add.png" style="padding: 20px" width="40" height="40"></a>
</body>

</html>