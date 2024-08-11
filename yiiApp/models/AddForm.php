<?php
	namespace app\models;
	
	use Yii;
	use yii\base\Model;
	
	class AddForm extends Model
	{
		public $name;
		public $task;
		
		public function rules()
		{
			return [
				['name','required'],
				['task','required'],
			];
		}
		
		
	}





?>