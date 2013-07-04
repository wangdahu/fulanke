<?php
class research extends table
{
	public function __construct()
	{
		parent::__construct();
		$this->set_table(S_DB_PREFIX.'research');
		$this->set_where("res_lang = '".S_LANG."'");
		$this->set_order('res_id');
	}
}

//红头船
?>