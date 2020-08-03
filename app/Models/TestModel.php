<?php namespace App\Models ;
use CodeIgniter\Model ;


class TestModel extends Model{


		protected $table = 'users' ;
		protected $primaryKey = 'id' ;
		protected $returntype = 'array' ;
		protected $allowedFields = ['id','fname','lname','department','username','password'];
        public function __construnct(){

        	echo "is_objec";
        }
		public function getUser($username , $password){

			$res = $this->getWhere(['username'=>$username , 'password'=>$password])->getResultArray();
			return $res ;

		}
		public function getUsersData()
		{

		$res = $this->get()->getResultArray();
	
		foreach ($res as $ra => $value) {
			# code...
			$r[]  = array(
				"id" => $value['id'] ,
				"fname" => $value['fname'],
				"lname" => $value['lname'],
				"dept" => $value['department'],
				"uname" => $value['username'],
				"password" =>$value['password']


			);
			
		}
		echo json_encode($r) ;

		}


		 


}

