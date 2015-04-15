<?php
/**
 * Class BlogController
 * @package App
 * @author Andrew Esteves <easily@andrewesteves.com.br>
 */

namespace App\Controller;

use Easily\EasilyController;

class BlogController extends EasilyController
{
	/**
	 * Index method
	 */
	public function index()
	{
		$this->viewVars([
			'totalPages' => $this->model->countRecords(),
			'perPage' => 4
		]);

		$this->render('blog/index', $this->model->paginate('created', 'desc', 4, $this->getPage()));
	}

	/**
	 * View method
	 */
	public function view($params)
	{
		$id = $params['id'];
		if($data = $this->model->findById($id)) {
			$this->render('blog/view', $data);
		}else{
			$this->render('error/404');
		}
	}

	/**
	 * Admin Index method
	 */
	public function _index()
	{
		$data['blog'] = $this->model->findAll();
		$this->render('blog/_index', $data, 'admin');
	}

	/**
	 * Admin add method
	 */
	public function _add()
	{
		if($this->request('post')) {
			$this->postData('slug', $this->model->sluggable($this->postData()['title']));
			if($this->model->insert($this->postData())) {
				$this->flashMessage('Succefully saved!', 'alert alert-success');
				$this->redirect('admin/blog/_index');
			}
		}
		$this->render('blog/_add', [], 'admin');
	}

	/**
	 * Admin edit method
	 */
	public function _edit($params)
	{
		$id = $params['id'];
		if($this->request('post')) {
			$this->postData('slug', $this->model->sluggable($this->postData()['title']));
			if($this->model->update($id, $this->postData())) {
				$this->flashMessage('Succefully saved!', 'alert alert-success');
				$this->redirect('admin/blog/_edit/' . $id);
			}
		}
		$this->render('blog/_edit', $this->model->findById($id), 'admin');
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