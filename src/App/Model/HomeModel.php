<?php
/**
 * Class HomeModel
 * @package App
 * @author Andrew Esteves <easily@andrewesteves.com.br>
 */

namespace App\Model;

use Easily\EasilyModel;
use Easily\EasilyValidation;

class HomeModel extends EasilyModel
{
	/**
	 * Validate
	 */
	public function validate($title, $body, $myFile)
	{
		$validation = new EasilyValidation();
		$message = [];

		if(!$validation->validate($title)->minimum(5)->maximum(20)->isValid) {
			$message['title'] = 'Title deve conter de 5 a 20 caracteres!';
		}

		if(!$validation->validate($body)->between(5, 200)->isValid) {
			$message['body'] = 'Body entre 5 e 50 caracteres!';
		}

		if(!$validation->validate($myFile)->extension(['jpg', 'pjpeg', 'jpeg'])->isValid) {
			$message['image'] = 'Extensão permitida é .jpg';
		}

		if(!empty($message)) {
			$validation->setTitle($title);
			$validation->setBody($body);
			return $message;
		}else{
			return true;
		}
	}
}