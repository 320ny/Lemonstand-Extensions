<?

class Extensions320ny_Shop_Category extends Shop_Category 
{

	public static function create($init_columns = false) 
	{
		if ($init_columns)
                	return new self();
    		else 
                	return new self(null, array('no_column_init'=>true, 'no_validation'=>true));
       	}

	/**
        * Returns a full list of unique product option values.
	* @return array Returns an array of option values.
	* The method is generated from this post:
	* http://forum.lemonstandapp.com/topic/3595-get-unique-attributes-for-specific-category/page__p__15615__hl__%2Boptions+%2Bcategory__fromsearch__1#entry15615
	*/	
	public function list_unique_product_option_values($name = "") 
	{
		$product_ids = Db_DbHelper::scalarArray('select shop_product_id from shop_products_categories where shop_category_id = '.$this->id);

		$num_products = count($product_ids);
		if($num_products == 0) {
			$query = '';
		} elseif($num_products == 1) {
			$query = 'product_id = '.$product_ids[0];
		} else {
			$query = 'product_id in ('.implode(',',$product_ids).')';
		}

		$values = Db_DbHelper::scalarArray('select distinct attribute_values from shop_custom_attributes where name=:name and '.$query, array('name'=>$name));
		
		$result = array();	
		foreach ($values as $value) 
		{
			$value_set = explode("\n", $value);
			foreach ($value_set as $attr_value) 
			{
				$attr_value = trim($attr_value);
				if (strlen($attr_value) && !in_array($attr_value, $result))
					$result[] = $attr_value;
			}
		}

		return $result;
	}

}

?>
