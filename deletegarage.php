<?php
/**
 * Created by IntelliJ IDEA.
 * User: rorypb
 * Date: 08/12/2015
 * Time: 11:57 AM
 */

require_once 'Garage.php';
require_once 'Connection.php';
require_once 'garageTableGateway.php';


if (!isset($_GET) || !isset($_GET['id'])) {
    die("Invalid ID");
}

$garageID = $_GET['garageID'];

$connection = Connection::getInstance();
$gateway = new garageTableGateway($connection);

$gateway->removeGarage($garageID);
header("Location: index.php");