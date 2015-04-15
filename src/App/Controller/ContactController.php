<?php
/**
 * Class ContactController
 * @package App
 * @author Andrew Esteves <easily@andrewesteves.com.br>
 */

namespace App\Controller;

use Easily\EasilyController;

class ContactController extends EasilyController
{
	/**
	 * Index method
	 */
	public function index()
	{
		$this->render('contact/index');
	}

	/**
	 * Admin Index method
	 */
	public function _index()
	{
		$this->render('contact/_index', [], 'admin');
	}
}