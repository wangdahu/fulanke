<?php
class comment extends table
{
	public function __construct()
	{
		parent::__construct();
		$this->set_table(S_DB_PREFIX.'comment');
		$this->set_where("com_lang = '".S_LANG."'");
		$this->set_where('com_show = 1');
		$this->set_order('com_id');
	}
}

//红头船
?>