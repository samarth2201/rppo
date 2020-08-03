<?php namespace App\Controllers;


use App\Models\Datamodel;
class Validate extends BaseController
{
	public function index()
	{

		$data = [] ;
		$model = new Datamodel();
		$reqMethod = $this->request->getMethod(true);
		helper(['form','database','uri','url']) ;
		if($reqMethod == 'POST')
		{
			helper(['form','database','uri','url']) ;
			$uname = $this->request->getVar('username');
			$pass = $this->request->getVar('password');
			$rules = [
				'username' => 'required',
				'password' => 'required'

			];
			if($this->Validate($rules)){
					
				if($model->isExists($uname,$pass)==true){

						return redirect()->to('/show/home');	


				}
				else
				{
					return view('login',['errors'=>'User not fonud']);
				}
				




			}
			else
			{
				$data['errors'] = $this->validator->listErrors();
				return view('login',$data);
				

			}
		}
		else{
		
 		return view('login',$data);
	}

	}


























	public function register(){

			$values = [] ;
			$requestMethod = $this->request->getMethod();
			if($requestMethod=='post')
			{

					helper(['form']);

					$rules = [

						'fname' => 'required|max_length[20]' ,
						'lname' => 'required|max_length[20]' ,
						'username' => 'required|min_length[6]|is_unique[users.username]' ,
						'password' => 'required|min_length[6]' ,
						'confirm-password' => "required|matches[password]"

					];
					if($this->Validate($rules))
					{

					$values['fname'] = $this->request->getVar('fname');
					$values['lname'] = $this->request->getVar('lname');
					$values['username'] = $this->request->getVar('username');
					$values['password'] = $this->request->getVar('password');
					$model = new Datamodel() ; 
					$model->save($values);
					return view('register');


					}
					else
					{

						$data['errors'] = $this->validator->listErrors();
						return view('home',$data) ;
					}

			}
			else
			{
				
				
				return view('register');
				


			}
	}

	public function home()
	{

		return view('home');
	}
	public function test()
	{
		return view('test');
	}
	//--------------------------------------------------------------------

}
