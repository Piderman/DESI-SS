<?php
	class Craft extends DataObJect {

		private static $db = array(
			"Title" => "Varchar",
			"Vehicle" => "Varchar",
			"CrewSize" => "Int",
			"Cost" => "Int",
			"DeltaV" => "Int",
			"Weight" => "Int",
			"Stages" => "Int",
			"PayloadCapacity" => "Int"

		);

		// force options for known values
		function validVehicle() {
			return array(
				"commandModule" => "Command Module",
				"lander" => "Lander",
				"lifter" => "Lifter",
				"plane" => "Plane",
				"probe" => "Probe",
				"station" => "Station"
			);
		}


		//----------------------------------------------------------------------------

		function getCMSFields() {
			$fields = parent::getCMSFields();

			$fields->replaceField("Vehicle", new DropdownField("Vehicle", "Craft Type", $this->validVehicle()));

			return $fields;
		}
	}
?>
