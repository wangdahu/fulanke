<?php
class category extends table
{
	private $cat = array();
	
	public function __construct()
	{
		parent::__construct();
		$this->set_where("cat_lang = '".S_LANG."'");
		$this->set_order('cat_top');
		$this->set_order('cat_index');
		$this->set_order('cat_id','asc');
	}
	
	public function get_tree()
	{
		$flag = 0;
		$arr = parent::get_list();
		if(count($arr))
		{
			for($i = 0; $i < count($arr); $i ++)
			{
				$this->cat[$i][0] = $arr[$i]['cat_id'];
				$this->cat[$i][1] = $arr[$i]['cat_parent_id'];
				$this->cat[$i][2] = $arr[$i]['cat_name'];
				$this->cat[$i][3] = $arr[$i]['cat_index'];
				$this->cat[$i][4] = $arr[$i]['cat_top'];
				$this->cat[$i][5] = $arr[$i]['cat_show'];
				if($this->cat[$i][1] != 0) $flag = 1;
			}
			return $this->set_cat_order($this->cat,0,1,$flag);
		}else{
			return $this->cat;
		}
	}
	
	//获取所有分类option标签，a代表id下标，b代表分类名下标,c代表等级下标
	public function get_cat_option($arr,$a,$b,$c,$cat_id)
	{
		$return = '';
		for($i = 0; $i < count($arr); $i ++)
		{
			if($cat_id == $arr[$i][$a])
			{
				$selected = 'selected';
			}else{
				$selected = '';
			}
			$nbsp = '';
			for($j = 1; $j <= $arr[$i][$c] - 1; $j ++)
			{
				$nbsp .= '&nbsp;&nbsp;';
			}
			$return .= "<option value='".$arr[$i][$a]."' ".$selected.">".$nbsp.$arr[$i][$b]."</option>";
		}
		return $return;
	}
	
	//设置并返回部分分类管理所需的option标签，参数a,b,c同上
	public function set_cat_option($arr,$a,$b,$c,$parent_id)
	{
		$grade = 0;
		$flag = 0;
		$selected = '';
		$return = '';
		if($parent_id != 0)
		{
			for($i = 0; $i < count($arr); $i ++)
			{
				if($parent_id == $arr[$i][$a])
				{
					$grade = $arr[$i][$c];
					$flag = 1;
					$selected = 'selected';
				}else{
					$selected = '';
				}
				if($flag == 0 || $selected != '')
				{
					$nbsp = '';
					for($j = 1; $j <= $arr[$i][$c] - 1; $j ++)
					{
						$nbsp .= '&nbsp;&nbsp';
					}
					$return .= "<option value='".$arr[$i][$a]."' ".$selected.">".$nbsp.$arr[$i][$b]."</option>";
				}else{
					if($grade >= $arr[$i][$c]) $flag = 0;
					if($i != count($arr) - 1){if($grade >= $arr[$i + 1][$c]) $flag = 0;}
				}
			}
		}
		return $return;
	}
	
	//对分类进行排序，调用了get_tree_order()，并对其返回结果进行处理，a代表ID下标，b代表父类ID下标，flag标志是否存在第二级分类
	public function set_cat_order($arr,$a,$b,$flag)
	{
		$arr1 = array();
		$arr2 = array();
		$arr5 = array();
		$u1 = count($arr);
		$u2 = count($arr[0]);
		if($u1 > 0 && $flag == 1)
		{
			for($i = 0; $i < $u1; $i ++)
			{
				$arr1[$i] = $arr[$i][$a];
				$arr2[$i] = $arr[$i][$b];
			}
			if($u1 > 0)
			{
				$tree_order = explode('{v}',$this->get_tree_order($arr1,$arr2));
				$arr3 = explode('|',$tree_order[0]);
				$arr4 = explode('|',$tree_order[1]);
				for($i = 1; $i < count($arr3) - 1; $i ++)
				{
					for($j = 0; $j < $u1; $j ++)
					{
						if($arr[$j][0] == $arr3[$i])
						{
							for($k = 0; $k < $u2; $k ++)
							{
								$arr5[$i - 1][$k] = $arr[$j][$k];
							}
							$arr5[$i - 1][$u2] = $arr4[$i];
						}
					}
				}
			}
		}elseif($u1 > 0 && $flag == 0){
			for($i = 0; $i < $u1; $i ++)
			{
				for($k = 0; $k < $u2; $k ++)
				{
					$arr5[$i][$k] = $arr[$i][$k];
				}
				$arr5[$i][$u2] = 1;
			}
		}
		return $arr5;
	}
	
	//对无序多级分类进行排序，返回一个记录排序信息的特殊字符串
	private function get_tree_order($id,$parent)
	{
		$j = 0;
		$k = count($parent);
		$id_str = array();
		$parent_str = array();
		$grade_str = '|';
		//将分类划分为不同等级
		while($k > 0)
		{
			$id_str[$j] = '|';
			$parent_str[$j] = '|';
			for($i = 0; $i < count($parent); $i ++)
			{
				if($j == 0)
				{
					if($parent[$i] == 0)
					{
						$id_str[$j] = $id_str[$j].$id[$i].'|';
						$parent_str[$j] = $parent_str[$j].$parent[$i].'|';
						$k --;
					}
				}else{
					if(strpos($id_str[$j - 1],'|'.$parent[$i].'|') !== false)
					{
						$id_str[$j] = $id_str[$j].$id[$i].'|';
						$parent_str[$j] = $parent_str[$j].$parent[$i].'|';
						$k --;
					}
				}
			}
			$j ++;
		}
		//将子级分类倒序排列
		for($i = 1; $i < count($id_str); $i ++)
		{
			$str1 = '';
			$str2 = '';
			$id_arr = explode('|',$id_str[$i]);
			$parent_arr = explode('|',$parent_str[$i]);
			for($j = 1; $j < count($id_arr); $j ++)
			{
				$str1 = $id_arr[$j].'|'.$str1;
				$str2 = $parent_arr[$j].'|'.$str2;
			}
			$id_str[$i] = $str1;
			$parent_str[$i] = $str2;
		}
		//将子级分类插入父级分类后面
		if(count($id_str) - 1 > 0) $cat_str = $id_str[0];
		for($i = 1; $i < count($id_str); $i ++)
		{
			$id_arr = explode('|',$id_str[$i]);
			$parent_arr = explode('|',$parent_str[$i]);
			for($j = 1; $j < count($parent_arr) - 1; $j ++)
			{
				if(strpos($cat_str,'|'.$parent_arr[$j].'|') !== false)
				{
					$cat_str = str_replace('|'.$parent_arr[$j].'|','|'.$parent_arr[$j].'|'.$id_arr[$j].'|',$cat_str);
				}
			}
		}
		//获取等级信息
		$arr = explode('|',$cat_str);
		for($i = 1; $i < count($arr) - 1; $i ++)
		{
			for($j = 0; $j < count($id_str); $j ++)
			{
				if(strpos($id_str[$j],'|'.$arr[$i].'|') !== false) $grade_str = $grade_str.($j + 1).'|';
			}
		}
		return $cat_str.'{v}'.$grade_str;
	}
	  
}
//红头船
?>