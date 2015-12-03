<?php
/**
 * Created by IntelliJ IDEA.
 * User: rorypb
 * Date: 26/11/2015
 * Time: 3:32 PM
 */

class garageTableGateway {
    private $connection;

    public function __construct($conn)
    {
        $this->connection = $conn;
    }

    public function getGarages() {
        $sqlQuery = "SELECT * FROM Web_Garage";

        $statement = $this->connection->prepare($sqlQuery);
        $exec = $statement->execute();

        if(!$exec){
            die("Could not get Garages");
        }

        return $statement;


    }

    public function getGarageByID($id){
        $sqlQuery = "SELECT * Web_Garage WHERE garageID = :id";

        $statement = $this->connection->prepare($sqlQuery);
        $parameters = array("id" => $id);

        $exec = $statement->execute($parameters);

        if(!$exec){
            die("Could not get Garages");
        }

    }

    public function insertGarage($add, $phone, $manager_name, $garage_name, $garID, $service_date, $manager_email, $garage_url, $overnight){
        $sqlQuery = "INSERT INTO Web_Garage " .
        "(garageAddress, phoneNo, managerName, nameofGarage, garageID, dateService, managerEmail, garageURL, overNight) " .
        "VALUES (:$add, :$phone, $manager_name, $garage_name, $garID, $service_date, $manager_email, $garage_url, $overnight)";

        $statement = $this->prepare($sqlQuery);
        $parameters = array(

            "garageAddress" => $add,
            "phoneNo" => $phone,
            "managerName" => $manager_name,
            "nameofGarage" => $garage_name,
            "garageID" => $garID,
            "dateService" => $service_date,
            "managerEmail" => $manager_email,
            "garageURL" => $garage_url,
            "overNight" => $overnight,

        );

        $exec = $statement->execute($parameters);

        if(!$exec){
            die("Could not get garages");
        }

        $id = $this->connection->lastInsertId();

        return $id;

    }

    public function removeGarage($id){
        $sqlQuery = "DELETE FROM Web_Garage WHERE id = :id";

        $statement = $this->connection->prepare($sqlQuery);
        $parameters = array(
            "id" => $id
        );

        $status = $statement->execute($parameters);

        if (!$status){
            die("Could not delete the garage");
        }

        return ($statement->rowCount() == 1);

    }


    public function updateGarage($add, $phone, $manager_name, $garage_name, $service_date, $manager_email, $garage_url, $overnight){

        $sqlQuery = "UPDATE Web_Garage SET ".
                    "garageAddress = :address, " .
                    "phoneNo = :phone, " .
                    "managerName = :manager_name, " .
                    "nameofGarage = :garage_name, " .
                    "dateService = :service_date, " .
                    "managerEmail = :manager_email," .
                    "garageURL = :garage_url, ".
                    "overNight = :overnight";

        $statement = $this->connection->prepare($sqlQuery);
        $parameters = array(
            "address" => $add,
            "phone" => $phone,
            "manager_name" => $manager_name,
            "garage_name" => $garage_name,
            "service_date" => $service_date,
            "manager_email" => $manager_email,
            "garage_url" => $garage_url,
            "overnight" => $overnight
        );

        $status = $statement->execute($parameters);

        return ($statement->rowCount() == 1);
    }
}