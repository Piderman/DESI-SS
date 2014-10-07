<?php
	class CrewAdmin extends ModelAdmin {
		public static $managed_models = array(
			'Crew'
		);

		private static $menu_priority = 0;

		// @todo: add Crew icon 
		private static $menu_icon = 'desi_crew/images/Crew-16x16.png';

		static $url_segment = 'crew';

		static $menu_title = 'Crew';

	}
