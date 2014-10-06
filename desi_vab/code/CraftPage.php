<?php
	class CraftPage extends Page {

		private static $description = "Craft Landing Page";

		private static $allowed_children = array("none");

	}

	// @todo: what does a controller do? 
	class CraftPage_Controller extends Page_Controller {
		function CraftObject() {
			$craft = Craft::get();

			// remove values based on vehicle type
			// eg: lifter shouldn't have crew size, or is that data entry?
			// foreach ($craft as $_craft) {
			// }

			return $craft;
		}
	}
?>
