<?php
namespace App\Backend\Modules\Deconnexion;

use \OCFram\BackController;   


class DeconnexionController extends BackController
{
	public function executeDeconnexion()
	{
		session_destroy();

		$this->app->httpResponse()->redirect('.');
	}
}