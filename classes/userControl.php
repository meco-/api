<?php
class userControl {
    private $connection;
    
    function PersonCtrl()
    {
        $this->connection = new dbHandle();
    }

    function getPerson($id)
    {
        $sql = "SELECT * FROM [cal_Users] WHERE userID=$id;";
        $result = $this->connection->executequerry($sql)[0];
        return new PersonModel($result['userName'],$result['userLastName'],$result['userEmail'],$result['calendarID'],$result['groupID']);
    }

    function updatePerson($person)
    {
        $sql = "UPDATE [cal_Users] SET userName='$person->userName',userLastName='$person->userLastName',userEmail='$person->userEmail',calendarID = $person->calendarID, WHERE id=$person->id;";
        $this->connection->executequerry($sql);
    }

    function deletePerson($id)
    {
        $sql = "DELETE FROM [cal_Users] WHERE userID=$id;";
        $this->connection->executequerry($sql);
    }

    function  createPerson($person)
    {
        $sql = "INSERT INTO [cal_Users] (userName,userLastname,userPassword, userEmail, userHashKey) VALUES ('$person->userName','$person->userLastName','$person->userPassword','$person->userEmail','$person->userHashKey');";
        $this->connection->executequerry($sql);
    }

    function getPersonsAll()
    {
        $persons = array();
        $sql = "SELECT * FROM [cal_Users];";
        $resultArray = $this->connection->executequerry($sql);

        foreach ($resultArray as $result)
        {
          $persons[] = new PersonModel($result['userName'],$result['userLastName'],$result['userEmail'],$result['calendarID']);
        }
        return $persons;
    }
}