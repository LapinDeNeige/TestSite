<?php
use yii\bootstrap5\Html;
use yii\bootstrap\Button;
use yii\bootstrap5\Modal;

use yii\data\ActiveDataProvider;
use yii\grid\GridView;
use yii\widgets\ListView;
use yii\widgets\ActiveForm;


/** @var yii\web\View $this */

$this->title = 'My Yii Application';

$this->registerJsFile(Yii::$app->request->baseUrl.'/js/script.js');
$this->registerCssFile(Yii::$app->request->baseUrl.'/css/new.css');
?>
<div class="site-index">


<?php 



if(!Yii::$app->user->isGuest)
{
	$columns=[
	'Name',
	];
	
	$dP=new ActiveDataProvider(['query'=>$query,'pagination'=>['pageSize'=>20,],]);
	
	echo '<div class="tbl-container">';
	
		echo GridView::widget([
		'options'=>['class'=>'tbl'],
		'tableOptions'=>['class'=>'tbl'],
		'dataProvider'=>$dP,
		'columns'=>$columns,
		'layout'=>'{items}{pager}',
		'showHeader'=>true,
		],
		); 
	
	echo '</div>';	
	
	
	Modal::begin(['id'=>'dlg','title'=>'Add new task','options'=>['class'=>'frm']]);
		$form=ActiveForm::begin(['id'=>'form','method'=>'post','action'=>['controllers/form']]);
			echo $form->field($addModel,'name')->textInput(['class'=>'txt']);
			echo '<div class="display:block;">';
				echo Html::submitButton('Save',['class'=>'btn-dark btn']);
				
			echo '</div>';
		ActiveForm ::end();
	Modal::end();
	
	
/*
$form=ActiveForm::begin(['id'=>'form']);
		echo $form->field($addModel,'name');
		echo Html::submitButton('Save');
ActiveForm::end();
*/
}
else
{
	$tt=Html::tag('h1','You are not logged in',['style'=>'color:white;']);
	echo Html::tag('div',$tt,['style'=>'position:absolute;left:35%;top:35%']);

}

?>




  
</div>
