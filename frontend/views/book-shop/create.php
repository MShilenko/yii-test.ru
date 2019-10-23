<?php
/* @var $this yii\web\View */
/* @var $book frontend\models\Book */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php
$form = ActiveForm::begin();

	echo $form->field($book, 'name');
	echo $form->field($book, 'isbn');
	echo $form->field($book, 'date_published');
	echo $form->field($book, 'publisher_id');
	
	echo HTML::submitButton('save', [
		'class' => 'btn btn-primary'
	]);

ActiveForm::end();
?>



