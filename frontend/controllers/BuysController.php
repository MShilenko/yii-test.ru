<?php
/*
 * BuysController.php
 * 
 * Copyright 2019 Михаил

 * 
 */

namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use frontend\models\Windows;
class BuysController extends Controller
{
    public function actionIndex()
    {
        $model = new Windows();
        
        $formData = Yii::$app->request->post();
        
        if (Yii::$app->request->isPost) {
            
            $model->attributes = $formData;
            
            if ($model->validate()) {
				$model->adminSubmit();
                Yii::$app->session->setFlash('success', 'Submit!');
            }
        }
        
        return $this->render('index', [
            'model' => $model,
        ]);
        
        
        
        
    }

}
