<?php
/**
 * Class HomeController
 * @package App
 * @author Andrew Esteves <easily@andrewesteves.com.br>
 */

namespace App\Controller;

use Easily\EasilyController;
use Easily\EasilyAuthentication;
use Easily\EasilyFiles;
use Easily\EasilyUtils;

class HomeController extends EasilyController
{
	/**
	 * Index method
	 */
	public function index()
	{
		$data['home'] = $this->model->findAll('updated', 'desc');
		$data['blog'] = EasilyUtils::model('blog')->findAll('updated', 'desc', 5);		
		$this->render('home/index', $data);
	}

	/**
	 * Admin Index method
	 */
	public function _index()
	{
		$data['name'] = EasilyAuthentication::userInfo('name');
		$data['home'] = $this->model->findAll();
		$this->render('home/_index', $data, 'admin');
	}

	/**
	 * Admin Add method
	 */
	public function _add()
	{
		if($this->request('post')) {

			// get post data
			$title = $this->postData()['title'];
			$body  = $this->postData()['body'];

			// get post files data
			$myFile = $this->filesData()['image'];

			$validate = $this->model->validate($title, $body, $myFile['name']);

			// Validate must be true by type
			if($validate === true) {

				// Instatiate files object to manipulate the files
				$files = new EasilyFiles();
				
				// Upload and retrieve an array: [name, path, link]
				$image = $files->upload($myFile);

				// Set image name and image link to the post data
				$this->postData('image', $image['image']['name']);
				$this->postData('image_link', $image['image']['link']);

				if($this->model->insert($this->postData())) {
					$this->flashMessage('Dados salvos com sucesso!', 'alert alert-success');
					$this->redirect('admin/home/_index');
				}else{
					$this->flashMessage('Não foi possível salvar!', 'alert alert-danger');
				}

			}else{
				$this->flashMessage(implode('<br>', $validate), 'alert alert-danger');
				$this->redirect('admin/home/_index');
			}
		}else{
			$this->redirect('admin/home/_index');
		}
	}

	/**
	 * Admin Edit
	 */
	public function _edit($params)
	{
		$id = $params[0];
		if($this->request('post')) {
			if(!empty($this->filesData()['image']['name'])) {
				$files = new EasilyFiles();
				$image = $files->upload($this->filesData()['image']);
				$this->postData('image', $image['image']['name']);
				$this->postData('image_link', $image['image']['link']);
			}

			if($this->model->update($id, $this->postData())) {
				$this->flashMessage('Succefully saved!', 'alert alert-success');
			}else{
				$this->flashMessage('Failed to update!', 'alert alert-danger');
			}
		}

		$this->render('home/_edit', $this->model->findById($id), 'admin');	
	}

	/**
	 * Admin Delete
	 */
	public function _delete($params = null)
	{
		$id = $params[0];

		if($this->model->findById($id)) {
			if($this->model->delete($id)) {
				$this->flashMessage('Succefully deleted', 'alert alert-success');
				$this->referer();
			}
		}
	}

}