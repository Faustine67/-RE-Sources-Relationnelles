<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class UserController extends BaseController
{
    public function index()
    {
        $data = [];
        helper(['form']);

		echo view('templates/header', $data);
		echo view('login');
		echo view('templates/footer');
	}

    public function login()
    {
        $data = [];
        helper(['form']);

		if ($this->request->getMethod() == 'post') {
            // conditions de validation des données
			$rules = [
				'email' => 'required|min_length[6]|max_length[50]|valid_email',
				'password' => 'required|min_length[8]|max_length[255]',

			];

			if (! $this->validate($rules)) {
				$data['validation'] = $this->validator;
			}else{
				$model = new UserModel();

				$user = $model->where('email', $this->request->getVar('email'))
											->first();
				if (password_verify(($this->request->getVar('password')), ($user['password']))){
					$this->session->set(['user' => $user]);
					return redirect()->to('');
				}
			}
        }
        return $this->smartyDisplay(
            view: 'login'
            ) ;
    }

	

	// private function setUserSession($user){
	// 	$data = [
	// 		'id' => $user['id'],
	// 		'firstname' => $user['firstname'],
	// 		'lastname' => $user['lastname'],
	// 		'email' => $user['email'],
	// 		'isLoggedIn' => true,
	// 	];

	// 	session()->set($data);
	// 	return true;
	// }

	public function register(){
		$data = [];
		helper(['form']);

		if ($this->request->getMethod() == 'post') {
            
			//let's do the validation here
			$rules = [
				'firstname' => 'required|min_length[3]|max_length[150]',
				'lastname' => 'required|min_length[3]|max_length[150]',
				'email' => 'required|min_length[6]|max_length[100]|valid_email|is_unique[user.email]',
				'password' => 'required|min_length[8]|max_length[255]',
				'password_confirm' => 'matches[password]',
			];

			if (! $this->validate($rules)) {
				$data['validation'] = $this->validator->getErrors();
                var_dump($data['validation']);
			}else{
				$newData = [
					'firstname' => $this->request->getVar('firstname'),
					'lastname' => $this->request->getVar('lastname'),
					'email' => $this->request->getVar('email'),
					'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
				];
				$userModel = new UserModel();
				$userModel->save($newData);
				$session = session();
				$session->setFlashdata('success', 'Successful Registration');
				return redirect()->to('/');

			}
        }
        return $this->smartyDisplay(
            view: 'register',
            params: compact('data') 
            ) ;
	}

	public function profile(){
		
		$data = [];
		helper(['form']);
		$model = new UserModel();

		if ($this->request->getMethod() == 'post') {
			//let's do the validation here
			$rules = [
				'firstname' => 'required|min_length[3]|max_length[20]',
				'lastname' => 'required|min_length[3]|max_length[20]',
				];

			if($this->request->getPost('password') != ''){
				$rules['password'] = 'required|min_length[8]|max_length[255]';
				$rules['password_confirm'] = 'matches[password]';
			}


			if (! $this->validate($rules)) {
				$data['validation'] = $this->validator;
			}else{

				$newData = [
					'id' => session()->get('id'),
					'firstname' => $this->request->getPost('firstname'),
					'lastname' => $this->request->getPost('lastname'),
					];
					if($this->request->getPost('password') != ''){
						$newData['password'] = $this->request->getPost('password');
					}
				$model->save($newData);

				session()->setFlashdata('success', 'Successfuly Updated');
				return redirect()->to('/profile');

			}
		}

		$data['user'] = $model->where('id', session()->get('id'))->first();
		echo view('templates/header', $data);
		echo view('profile');
		echo view('templates/footer');
	}

	public function logout(){
		session()->destroy();
		return redirect()->to('/');
	}

	public function change_password() {
		$id = $this->session->userdata('userId');
	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('new_password', 'senha', 'trim|required|min_length[6]|max_length[12]|xss_clean');
		$this->form_validation->set_rules('password_confirmation', 'confirmacao senha', 'trim|required|min_length[6]|max_length[12]|xss_clean');
	
		if ($this->form_validation->run() == true) {
			$new_password = $this->input->post('new_password');
			$passwordConfirmation = $this->input->post('password_confirmation');
	
			if ($new_password != $passwordConfirmation) {
				$this->session->set_flashdata('error', $this->lang->line('password_confirmation_differ'));
			} else {
				$hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
				$res = $this->Users_model->update_user_password($id, $hashed_password);
	
				if (!empty($res)) {
					$this->session->set_flashdata('msg', $this->lang->line('update_password_success'));
				} else {
					$this->session->set_flashdata('error', $this->lang->line('update_error'));
				}
			}
		} else {
			$this->session->set_flashdata('error', validation_errors());
		}
	
		//redirect(base_url() . 'users/prepare_change_password/');
	}
	

}
