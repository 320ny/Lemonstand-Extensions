<?
	class Extensions320ny_Actions extends Cms_ActionScope {

		public function on_search() {
			Cms_ActionManager::execAction("shop:search", $this);
		}
	}

?>
