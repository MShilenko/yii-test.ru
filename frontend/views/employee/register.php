<?php
/* @var $model frontend\models\Employee */

use yii\widgets\ActiveForm;
use yii\helpers\Html;

if ($model->hasErrors()) {
    echo '<pre>';
    print_r($model->getErrors());
    echo '</pre>';
}
?>

<h1>Welcome to our company!</h1>

<?php
$form = ActiveForm::begin();


echo $form->field($model, 'firstName');
echo $form->field($model, 'lastName');
echo $form->field($model, 'middleName');
echo $form->field($model, 'email');
echo $form->field($model, 'birthday');
echo $form->field($model, 'startDate');
echo $form->field($model, 'city')->dropDownList($model->getCitiesList());
echo $form->field($model, 'position');
echo $form->field($model, 'identifikator');

echo Html::submitButton('Send', ['class' => 'btn btn-primary']);


ActiveForm::end();
?>
