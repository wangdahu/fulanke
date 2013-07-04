<?php
class cat_art extends category
{
	public function __construct()
	{
		parent::__construct();
		$this->set_table(S_DB_PREFIX.'cat_art');
	}
}
//红头船
?>