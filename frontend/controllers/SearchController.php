<?php

namespace frontend\controllers;

use Yii;
use frontend\models\forms\SearchForm;

class SearchController extends \yii\web\Controller
{
    public function actionIndex()
    {
		$model = new SearchForm();
		$results = null;
		
		
		if($model->load(Yii::$app->request->post())){
			$results = $model->search();
		}
		
        return $this->render('index', [
			'model' => $model,
			'results' => $results,
        ]);
    }
<<<<<<< HEAD
=======
    
    public function actionAdvanced()
    {
		$model = new SearchForm();
		$results = null;
		
		
		if($model->load(Yii::$app->request->post())){
			$results = $model->searchAdvanced();
		}
		
        return $this->render('advanced', [
			'model' => $model,
			'results' => $results,
        ]);
    }
>>>>>>> 85bb3c34fad58972478aa91b0d8526169f492800

}
