<?php namespace App\Models ;
use CodeIgniter\Model ;



class Datamodel extends Model
{


		protected $table = 'users' ;
		protected $allowedFields = ['fname','lname','username','password'] ;


		public function isExists($uname,$pass)
		{

				$db = db_connect();
				$builder = $db->table('users');
				$res = $builder->where(['username'=>$uname,'password'=>$pass])->get()->getResultArray();
				if(count($res)>0)
				{
					$this->setSession($res);
					return true;
		        }
				else
					return false;
		}
		private function setSession($res)
		{

					session_start();
					$_SESSION['username'] = $res[0]['username'] ;
					$_SESSION['password'] = $res[0]['password'] ;
					$_SESSION['fname'] = $res[0]['fname'] ; 
					$_SESSION['lname'] = $res[0]['lname'] ; 
					$_SESSION['type'] = $res[0]['type'] ;
		
		}

}






?>