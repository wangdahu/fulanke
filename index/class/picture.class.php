<?php
class picture extends table
{
	public function __construct()
	{
		parent::__construct();
		$this->set_table(S_DB_PREFIX.'picture');
		$this->set_where("pic_lang = '".S_LANG."'");
		$this->set_where("pic_show = 1");
		$this->set_order('pic_top');
		$this->set_order('pic_index');
		$this->set_order('pic_id');
	}
}

//红头船
?>