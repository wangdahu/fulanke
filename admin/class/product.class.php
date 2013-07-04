<?php
class product extends table
{
	public function __construct()
	{
		parent::__construct();
		$this->set_table(S_DB_PREFIX.'product');
		$this->set_where("pro_lang = '".S_LANG."'");
		$this->set_order('pro_top');
		$this->set_order('pro_index');
		$this->set_order('pro_id');
	}
}

//红头船
?>