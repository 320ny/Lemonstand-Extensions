<?

class Extensions320ny_Module extends Core_ModuleBase {
	protected function create_module_info() {
		return new Core_ModuleInfo(
			"Extensions 320ny",
			"Adds code extensions to the Lemonstand Platform",
			"320ny" );
	}

	public function subscribeEvents()
	{
		  Backend::$events->addEvent('shop:onConfigureProductsController', $this, 'load_resources');
	}

	public function load_resources($controller)
	{
		  $controller->addJavaScript('/modules/extensions320ny/resources/javascript/colors_in_om.js');
	}




	/**
	** Awaiting deprecation
	**/

	protected function createModuleInfo() {
		return $this->create_module_info();
	}
}

?>
