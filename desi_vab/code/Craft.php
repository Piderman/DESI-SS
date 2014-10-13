<?php
	class Craft extends DataObject {

		private static $db = array(
			"Title" => "Varchar",
			"Vehicle" => "Enum(array('commandModule', 'lander', 'lifter', 'plane', 'probe', 'station'))",
			"CrewSize" => "Int",
			"Cost" => "Int",
			"DeltaV" => "Int",
			"Weight" => "Int",
			"Stages" => "Int",
			"PayloadCapacity" => "Int"
		);


		//----------------------------------------------------------------------------

		function getCMSFields() {
			$fields = parent::getCMSFields();

			return $fields;
		}
	}
