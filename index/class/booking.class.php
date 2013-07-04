<?php
class booking extends table
{
	public function __construct()
	{
		parent::__construct();
		$this->set_table(S_DB_PREFIX.'booking');
		$this->set_where("boo_lang = '".S_LANG."'");
		$this->set_order('boo_id');
	}
}

//红头船
?>