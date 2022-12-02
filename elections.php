<?php
include_once "myconstants.php";

class Elections
{

    var $dbconnect;


    function __construct()
    {

        $this->dbconnect = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE_NAME);

        if ($this->dbconnect->connect_error) {
            die("connection failed" . $this->dbconnect->connect_error);
        } else {
        }
    }

    function GetPollUnitResult()
    {
        $statement = $this->dbconnect->prepare("SELECT * FROM announced_pu_results where polling_unit_uniqueid=8");
        $statement->execute();
        $result = $statement->get_result();
        $records = [];
        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {
                $records[] = $row;
            }
            return $records;
        }
    }
    //
    function GetLgaResult()
    {
        $statement = $this->dbconnect->prepare("SELECT * FROM lga where lga_id=17 ");
        $statement->execute();
        $result = $statement->get_result();
        $records = [];
        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {
                $records[] = $row;
            }
            return $records;
        }
    }

    function GetResult()
    {
        $statement = $this->dbconnect->prepare("SELECT * FROM announced_pu_results where polling_unit_uniqueid=8 ");
        $statement->execute();
        $result = $statement->get_result();
        $records = [];
        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {
                $records[] = $row['party_score'];
            }
            return $records;
        }
    }

    function RegisterPollinUnit($unitid,$party,$score,$agent,$ip)
    {
        $statement = $this->dbconnect->prepare("INSERT INTO announced_pu_results(polling_unit_uniqueid,party_abbreviation,party_score,entered_by_user,user_ip_address) VALUES(?,?,?,?,?)  ");
        $statement->bind_param("ssiss",$unitid,$party,$score,$agent,$ip);
        $statement->execute();
        $statement->get_result();
        
        if ($statement->error > 0) {
            return "Oops something happened";
            }else {
                return true;
            }
            
        }
    
}
