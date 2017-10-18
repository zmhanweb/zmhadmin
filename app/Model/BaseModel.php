<?php

namespace App\Model;

use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Elopuent\SoftDeletes;

class Base extends Model{
	//软删除
	use SoftDeletes;
	
	/*
	**	添加数据
	**	@param  array $data - 要添加的数据
	**	@return bool $result - 返回成功或失败的数组
	*/
	public function addData($data){
		$result = $this->create($data)->$id;
		if($result){
			return $result;
		}else{
			return false;
		}
	}

	/*
	**	编辑数据
	**	@param array $map - query要查询的数据
	**	@param array $data - 要编辑的数据
	**	@return bool $result - 返回成功或失败的数组
	*/
	public function addData($map,$data){
		//查找
		$model = $this->where($map)->first();
		//赋值修改
		foreach ($data as $key => $value) {
			$model->{$key} = $value;
		}
		$result = $model->save();

		if($result){
			return $result;
		}else{
			return false;
		}
	}


	/*
	**	删除数据
	**	@param  array $map - query要删除的数据
	**	@return bool $result - 返回成功或失败的数组
	*/
	public function addData($map){
		//软删除
		$result = $this->where($map)->delete();
		if($result){
			return $result;
		}else{
			return false;
		}
	}

}

?>