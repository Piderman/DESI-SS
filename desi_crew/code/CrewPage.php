<?php
	class CrewPage extends Page {
		private static $description = "Crew List Page";

		private static $allowed_children = array("none");


	}

	class CrewPage_Controller extends Page_Controller {
		function CrewObject() {
			$crew = Crew::get();

			return $crew;
		}

		// @todo: find what missions a crew has flown in 
	}
