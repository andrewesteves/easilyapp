<?php
/**
 * Class AboutController
 * @package App
 * @author Andrew Esteves <easily@andrewesteves.com.br>
 */

namespace App\Controller;

use Easily\EasilyController;

class AboutController extends EasilyController
{
	/**
	 * Index method
	 */
	public function index()
	{
		$this->render('about/index', $this->model->findById(1));
	}

	/**
	 * Admin Index method
	 */
	public function _index()
	{
		if($this->request('post')) {
			if($this->model->update(1, $this->postData())) {
				$this->flashMessage('Succefully updated!', 'alert alert-success');
			}else{
				$this->flashMessage('Ops, failed to update!', 'alert alert-danger');
			}
		}
		$this->render('about/_index', $this->model->findById(1), 'admin');
	}
}