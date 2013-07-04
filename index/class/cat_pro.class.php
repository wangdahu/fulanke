<?php
class cat_pro extends category
{
	public function __construct()
	{
		parent::__construct();
		$this->set_table(S_DB_PREFIX.'cat_pro');
	}
}
//红头船
?>