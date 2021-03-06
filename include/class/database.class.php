<?php
class database
{
	static $instance;
	private $db_type;
	private $db_name;
	private $conn;
	private $rs;
	private $record_count;
	private $fields_count;
	private $page_size;
	private $real_page_size;
	private $absolute_page;
	private $fields_array;
	private $data_array;
	private $is_arr;
	private $query_data;
	
	//构造函数
	private function __construct()
	{
		$this->db_type = S_DB_TYPE;
		$this->db_name = S_DB_NAME;
		$this->sql_connect(S_DB_PATH,S_DB_NAME,S_DB_USER,S_DB_PWD);
		
		$this->initial();
	}
	
	//析构函数
	public function __destruct()
	{
		//echo '<br>end database</br>';
	}
	
	private function __clone(){}
	
	public static function get_instance()
	{
		if(!(self::$instance instanceof self))
		{
			self::$instance = new self();
		}
		return self::$instance;
	}
	
	//连接数据库
	private function sql_connect($db_path,$db_name,$db_user,$db_pwd)
	{
		switch($this->db_type)
		{
			case 'access':
			  $str = 'provider=microsoft.jet.oledb.4.0;data source='.realpath($db_path.$db_name);
			  $this->conn = new com('adodb.connection',NULL,65001);
			  $this->conn->open($str);
			break;
			case 'mysql':
                $this->conn = mysqli_connect($db_path,$db_user,$db_pwd,$db_name);
                if(mysqli_connect_errno($this->conn)) {
                    die('Could not connect:'.mysqli_error($this->conn));
                }
			  mysqli_query($this->conn, 'set names utf8');
			break;
		}
	}
	
	//执行SQL语句
	public function sql_query($sql)
	{
		$this->initial();
		switch($this->db_type)
		{
			case 'access':
			  switch($this->sql_type($sql))
			  {
				  case 'select':
					$this->rs = new com('adodb.recordset',NULL,65001);
					$this->rs->open($sql,$this->conn,1,3);
					if(!$this->rs->eof)
					{
						$this->record_count = $this->rs->recordcount;
						$this->fields_count = $this->rs->fields->count;
					}else{
						$this->record_count = 0;
					}
				  break;
				  default: $this->conn->execute($sql); break;
			  }
			break;
			case 'mysql':
			  $this->query_data = mysqli_query($this->conn, $sql);
			  switch($this->sql_type($sql))
			  {
				  case 'select':
					if($this->query_data)
					{
						$this->record_count = mysqli_num_rows($this->query_data);
						$this->fields_count = mysqli_num_fields($this->query_data);
					}				  
				  break;
			  }
			break;
		}
	}
	
	//获取结果数据
	public function sql_result($row,$field_name)
	{
		switch($this->db_type)
		{
			case 'access':
			  if($this->is_arr == 0)
			  {
				  $this->sql_result_array();
				  $this->is_arr = 1;
			  }
			  for($i = 0; $i < $this->fields_count; $i ++)
			  {
				  if($this->fields_array[$i] == $field_name)
				  {
					  return $this->data_array[$row * $this->fields_count + $i];
				  }
			  }
			break;
			case 'mysql':
			  if($this->record_count > 0)
			  {
				  $row = ($this->absolute_page - 1) * $this->page_size + $row;
                  mysqli_data_seek($this->query_data, $row);
                  $fields = mysqli_fetch_array($this->query_data);
                  return isset($fields[$field_name]) ? $fields[$field_name] : '';

			  }else{
				  return '';
			  }
			break;
		}
	}
	
	//获取记录数
	public function get_record_count()
	{
		return $this->record_count;
	}
	
	//获取字段数
	public function get_fields_count()
	{
		return $this->fields_count;
	}
	
	//获取所有字段名
	public function get_all_fields()
	{
		$str = '';
		switch($this->db_type)
		{
			case 'access':
			  for($i = 0; $i < $this->fields_count; $i ++)
			  {
				  $str .= ',' . $this->rs->fields[$i]->name;
			  }
			break;
			case 'mysql':
			  for($i = 0; $i < $this->fields_count; $i ++)
			  {
                 mysqli_data_seek($this->query_data, $i);
                  $fields = mysqli_fetch_field($this->query_data);
                  $str .= ',' . $fields->name;
			  }
			break;
		}
		return substr($str,1);
	}
	
	//设置每页记录数
	public function set_page_size($val)
	{
		switch($this->db_type)
		{
			case 'access':
			  $this->rs->pagesize = $val;
			break;
			case 'mysql':
			  $this->page_size = $val;
			break;
		}
	}
	
	//设置当前页数
	public function set_absolute_page($val)
	{
		switch($this->db_type)
		{
			case 'access':
			  $this->rs->absolutepage = $val;
			break;
			case 'mysql':
			  $this->absolute_page = $val;
			break;
		}
	}
	
	//设置当前页实际记录数
	public function set_real_page_size($val)
	{
		$this->real_page_size = $val;
	}
	
	//初始化
	private function initial()
	{
		$this->record_count = -1;
		$this->fields_count = -1;
		$this->real_page_size = -1;
		$this->absolute_page = 1;
		$this->is_arr = 0;
	}
	
	//判断查询类型
	private function sql_type($sql)
	{
		switch(substr($sql,0,6))
		{
			case 'select': return 'select';break;
			case 'insert': return 'insert';break;
			case 'update': return 'update';break;
			case 'delete': return 'delete';break;
		}
	}
	
	//将记录集转换为数组
	private function sql_result_array()
	{
		$this->fields_array = explode(',',$this->get_all_fields());
		if($this->real_page_size != -1)
		{
			$num = $this->real_page_size;
		}else{
			$num = $this->record_count;
		}
		$str = '';
		for($i = 0; $i < $num; $i ++)
		{
			for($j = 0; $j < $this->fields_count; $j ++)
			{
				$str .= '{^}'.str_replace('{^}','',$this->rs->fields($this->rs->fields[$j]->name)->value.'');
			}
			$this->rs->movenext();
		}
		$str = substr($str,3);
		$this->data_array = explode('{^}',$str);
	}
}

//红头船
?>
