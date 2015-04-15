<?php
/**
 * Class UsersController
 * @package App
 * @author Andrew Esteves <easily@andrewesteves.com.br>
 */

namespace App\Controller;

use Easily\EasilyController;
use Easily\EasilyAuthentication;

class UsersController extends EasilyController
{
	/**
	 * Admin Index method
	 */
	public function _index()
	{		
		$data['name'] = EasilyAuthentication::userInfo('name');
		$data['users']  = $this->model->findAll();
		$this->render('users/_index', $data, 'admin');
	}

	/**
	 * Admin add
	 */
	public function _add()
	{
		if($this->request('post')) {
			$this->postData('password', EasilyAuthentication::passwordHash($this->postData()['password']));
			$this->postData('role', 'admin');
			if($this->model->insert($this->postData())) {
				$this->flashMessage('Succefully saved!', 'alert alert-success');
				$this->redirect('admin/users/_index');
			}
		}else{
			$this->redirect('admin/users/_index');
		}
	}

	/**
	 * Admin edit
	 */
	public function _edit($params)
	{
		$id = $params[0];
		$user = $this->model->findById($id);
		if($this->request('post')) {
			if(strlen($this->postData()['password']) > 4) {
				$this->postData('password', EasilyAuthentication::passwordHash($this->postData()['password']));
			}else{
				$this->postData('password', $user->password);
			}
			$this->postData('role', 'admin');
			if($this->model->update($id, $this->postData())) {
				$this->flashMessage('Succefully updated!', 'alert alert-success');
				$this->redirect('admin/users/_index');
			}
		}
		$this->render('users/_edit', $user, 'admin');	
	}

	/**
	 * Admin delete
	 */
	public function _delete($id = null)
	{		
		$id = $id[0];

		if($this->model->findById($id)) {
			if($this->model->delete($id)) {
				$this->flashMessage('Succefully deleted', 'alert alert-success');
				$this->referer();
			}
		}
	}

	/**
	 * Login method
	 */
	public function login()
	{
		if($this->request('post')) {
			$admin = new EasilyAuthentication('users');
			$admin->login([
				'email' => $this->postData()['email'],
				'password' => $admin->passwordHash($this->postData()['password'])
			], 'admin/home/_index');
		}

		$this->render('users/login', [], 'login');
	}

	/**
	 * Logout
	 */
	public function logout()
	{
		EasilyAuthentication::logout();
	}
}