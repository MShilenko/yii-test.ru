<?php
/* @var $this yii\web\views */
/* @var $model frontend\models\subscribe */

//~ if (Yii::$app->session->hasFlash('subscribeStatus')) {
	//~ echo Yii::$app->session->getFlash('subscribeStatus');
//~ }
if($model->hasErrors()){
	echo '<pre>';
	print_r($model->getErrors());
	echo '</pre>';
}

$this->title = 'Подписка на новости.';
$this->registerMetatag([
	'name' => 'description',
	'content' => 'Подписка на новости',
]);

//~ $this->params['breadcrumbs'] = ['t1', 't2'];

?>

<form method="post">
    <p>Email:</p>
    <input type="text" name="email" />
    <br><br>
    <input type="submit" />
</form>
