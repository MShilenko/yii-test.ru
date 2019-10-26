<?php
/* @var $this yii\web\View */
/* @var $book frontend\models\Book */
/* @var $publishers frontend\models\Publisher */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;

?>
<?php

$form = ActiveForm::begin();

	echo $form->field($book, 'name');
	echo $form->field($book, 'isbn');
	echo $form->field($book, 'date_published')->widget(
    DatePicker::className(), [
        // inline too, not bad
         'inline' => true, 
         'value' => '02-16-2012',
         // modify template for custom rendering
        'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
        ]
	]);
	echo $form->field($book, 'publisher_id')->dropDownList($publishers);
	echo HTML::submitButton('save', [
		'class' => 'btn btn-primary'
	]);

ActiveForm::end();
?>



