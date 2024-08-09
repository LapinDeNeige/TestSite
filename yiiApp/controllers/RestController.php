<?php
namespace app\controllers;

use yii\rest\Controller;
use app\models\User;
use yii\rest\ActiveController;

class RestController extends ActiveController;
{
	public function actionIndex()
	{
		return Users::getAll();
	}
	protected function verbs()
	{
		return ['index'=>['GET','HEAD']];
	}


}


?>