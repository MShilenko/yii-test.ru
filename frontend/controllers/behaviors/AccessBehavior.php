<?php
/*
 * AccessBehavior.php
 * 
 * Copyright 2019 Михаил <mihail@mihail-Presario-CQ58-Notebook-PC>
 * 
 */

namespace frontend\controllers\behaviors;

use Yii;
use yii\base\Behavior;
use yii\web\Controller;

class AccessBehavior extends Behavior
{
	public function events(){
		return [
			Controller::EVENT_BEFORE_ACTION => 'checkAccess',
		];
	}
	
	public function checkAccess(){
		if(Yii::$app->user->isGuest){
			return Yii::$app->controller->redirect(['site/index']);
		}
	}
}
