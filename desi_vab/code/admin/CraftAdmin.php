<?php
class CraftAdmin extends ModelAdmin {
	public static $managed_models = array(
		'Craft'
	);

	private static $menu_priority = 0;

	// @todo: add craft icon 
	private static $menu_icon = 'desi_vab/images/craft-16x16.png';

	static $url_segment = 'craft';

	static $menu_title = 'Craft';

	public function getExportFields() {
		$db = singleton($this->modelClass)->database_fields($this->modelClass);
		$out = array('ID'=>'ID');
		foreach($db as $k => $v)
			$out[$k] = $k;
		return $out;
	}
}
?>
