<?php namespace App\Controllers;

use App\Models\TestModel ;
class TestController extends BaseController
{
	public function index()
	{	
		   helper(['form','database','uri','url']) ;
			$model = new TestModel();
			$res = $model->getUser('ssssssss','sasasasa');
			echo $res[0]['username'];
			$data = [
				'f_name' => 'rushikesh',
				'l_name' => 'kulkarni',
				'username' => 'hitman45' ,
				'password' => 'nopassword'
			];
			$res  = $model->save($data) ;
			if($res)
				echo "inserted" ;
			else
				echo "not inserted" ;
	}
	public function getUsers()
	{

		$data = [] ;
		$model = new TestModel();
		$res = $model->getUsersData();
		 
	}
	public function addUser()
	{
		helper(['form','database','uri','url']) ;
		$model = new TestModel();
		$data = $this->request->getVar('user');
		$user = [];
		foreach($data as $element){	

			$user[$element['name']] = $element['value'] ;
		

		}
	
		echo ($model->save($user));

		
	//--------------------------------------------------------------------
	}
	function getUser(){

		$model = new TestModel();
		$data = $this->request->getVar('id');
		$res = $model->find($data);
		$r=[] ;
		foreach($res as $key => $value){

			$r[$key] = $value ;
		}
		echo json_encode($r);
	}


	

function updateUser()
{


	helper(['form','database','uri','url']) ;
	$model = new TestModel();
	$data = $this->request->getVar('user');
	$id = $this->request->getVar('id') ;
	$user = [];
	foreach($data as $element){	

		$user[$element['name']] = $element['value'] ;
	

	}
	$res = $model->update($id,$user);
	echo $res ;

}
}

