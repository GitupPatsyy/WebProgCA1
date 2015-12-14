<?php
/**
 * Created by IntelliJ IDEA.
 * User: rorypb
 * Date: 26/11/2015
 * Time: 3:29 PM
 */
//
require_once 'garage.php';
require_once 'connection.php';
require_once 'garageTableGateway.php';
require_once 'gformprocess.php';


validate($formdata, $errors);

if (empty($errors)) {


    $garageAddress = $formdata["garageAddress"];
    $phone_no = $formdata["phoneNo"];
    $manager_name = $formdata["managerName"];
    $garage_name = $formdata["nameofGarage"];
    $garage_id = $formdata["garageID"];
    $service_date = $formdata["dateService"];
    $over_night = $formdata["overNight"];

    $garage_url = filter_input(INPUT_POST, 'garageURL', FILTER_SANITIZE_URL);
    $garage_url_valid = filter_var($garage_url, FILTER_VALIDATE_URL);

    $manager_email = filter_input(INPUT_POST, 'manager_email', FILTER_SANITIZE_EMAIL);
    $manager_email_valid = filter_var($manager_email, FILTER_VALIDATE_EMAIL);

    $garage = new Garage($garage_address, $phone_no, $manager_name, $garage_name, $garage_id, $service_date, $manager_email, $garage_url, $over_night);


    $connection = Connection::getInstance();
    $gateway = new garageTableGateway($connection);

    $id = $gateway->insertGarage($garage);

//Redirects the user to the specific page
    header('Location: index.php');
}

else {
    require "addgarage.php";
}

