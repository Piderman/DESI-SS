<?php

/**
 * Class MissionEntry
 *
 * Details of a mission
 *
 * todo:
 *      ability to select crew
 *      ability to select craft
 *      progress summary for a ongoing missions
 *      post news entry update
 *      add mission event timeline
 */
class MissionEntry extends Page {

    private static $default_parent = "MissionHolder";

    //a mission needs a crew, the same crew member can take part in many missions
    private static $many_many = array(
        "Crews" => "Crew"
    );

    private static $db = array(
        "Status" => "Enum(array('In Progress', 'Success', 'Failure', 'Critical Failure'))",
        "MissionType" => "Enum(array('Flyby', 'Orbiter', 'Lander', 'Rover'))",
        "Destination" => "Enum(array(
            'Kerbol',
            'Moho',
            'Eve',
                'Gilly',
            'Kerbin'
                'Mun',
                'Minmus',
            'Duna',
                'Ike',
            'Dres',
            'Jool',
                'Laythe',
                'Vall',
                'Tylo',
                'Bop',
                'Pol',
            'Eeloo'
        ))",
        "Objective" => "HTMLText",
        "Background" => "HTMLText",
        "Details" => "HTMLText"

    //Crew
    //Vehicles
    //Log of events (can gather start time and end time from this?
    );

    function getCMSFields() {
        $fields = parent::getCMSFields();

        //status
        $fields->addFieldToTab('Root.Main', DropdownField::create(
            'Status',
            'Status',
            singleton('MissionEntry')->dbObject('Status')->enumValues()
        ), 'Content');

        //mission type
        $fields->addFieldToTab('Root.Main', DropdownField::create(
            'MissionType',
            'Type',
            singleton('MissionEntry')->dbObject('MissionType')->enumValues()
        ), 'Content');

        //mission type
        $fields->addFieldToTab('Root.Main', DropdownField::create(
            'Destination',
            'Destination Body',
            singleton('MissionEntry')->dbObject('Destination')->enumValues()
        ), 'Content');


        $fields->addFieldToTab("Root.Main", HtmlEditorField::create("Objective", "Objective"),"Content");

        $fields->addFieldToTab("Root.Main", HtmlEditorField::create("Background", "Background"),"Content");


        //create new tab for crew, select crew from there
        $crewMembers = new GridField(
            'Crews',
            'Crew',
            $this->Crews(),
            GridFieldConfig_RelationEditor::create()
        );
        $fields->addFieldToTab('Root.Crew', $crewMembers);

        return $fields;
    }
}

class MissionEntry_Controller extends Page_Controller {}
