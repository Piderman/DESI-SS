<?php

class Crew extends DataObject {

    private static $belongs_many_many = array(
        "Mission" => "MissionEntry"
    );

    private static $db = array(
        "FirstName" => "Varchar",
        "FlightStatus" => "Enum(array('assigned', 'unassigned', 'KIA'))",
        "Specialty" => "Enum(array('Pilot', 'Engineer', 'Scientist'))",
        "Experience" => "Int"
    );

    private static $summary_fields = array(
        'FirstName',
        'FlightStatus',
        'Specialty'
    );

    function getCMSFields() {
        $fields = parent::getCMSFields();

        return $fields;
    }



    // last name of a Kerbal is always 'Kerman'
    function FullName() {
        return $this->FirstName . " Kerman";
    }

    // assigns the special style class for those worthy ;)
    function BadassClass() {
        $cssClass = "";

        // do this because its bawse, var_dump is VERY useful
        // "what you pass to var_dump is the juicy stuff" - Chis Nankervis
        // var_dump($this);
        if ($this->FirstName == "Jeb") {
            $cssClass = "badass";
        }

        return $cssClass;
    }
}
