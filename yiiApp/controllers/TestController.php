<?php
namespace app\controllers;

use yii\rest\Controller;
use yii\rest\ActionController;

class TestController extends ActionController
{
	public function hahaAction()
	{
		return $this->render('index.php');
		
	}
	
}

?>