<?php
/* @var $this yii\web\View */
/* @var $model frontend\models\Author */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<h1>Create author</h1>

<?php $form = ActiveForm::begin();

	echo $form->field($model, 'first_name');
	echo $form->field($model, 'last_name');
	echo $form->field($model, 'birthdate');
	echo $form->field($model, 'rating');
	
	echo Html::submitButton('Create', [
		'class' => 'btn btn-primary',
	]);

ActiveForm::end() ?>


