<?php
class message extends table
{
	public function __construct()
	{
		parent::__construct();
		$this->set_table(S_DB_PREFIX.'message');
		$this->set_where("mes_lang = '".S_LANG."'");
		$this->set_order('mes_id');
	}
}

//红头船
?>