<?php

/** @var yii\web\View $this */
/** @var string $name */
/** @var string $message */
/** @var Exception$exception */

use yii\helpers\Html;

$this->title = $name;

$this->registerJsFile(Yii::$app->request->baseUrl.'/js/script.js');
$this->registerCssFile(Yii::$app->request->baseUrl.'/css/new.css');
?>
<div class="site-error-pos ">
    <h1 class="site-error-fonts"> 404 </h1>    
</div>
