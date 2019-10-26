<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Author;

class AuthorController extends \yii\web\Controller
{
    public function actionCreate()
    {
		$model = new Author();
		
		if($model->load(Yii::$app->request->post())){
			$model->save();
			Yii::$app->session->setFlash('success', 'New author create');
			return $this->redirect(['author/index']);
		}
		
        return $this->render('create', [
			'model' => $model,
        ]);
    }

    public function actionDelete($id)
    {
		$model = Author::findOne($id);
		$model->delete();
		
        Yii::$app->session->setFlash('success', 'Author delete');
		return $this->redirect(['author/index']);
    }

    public function actionIndex()
    {
		$authorList = Author::find()->all();
        return $this->render('index', [
			'authorList' => $authorList,
        ]);
    }

    public function actionUpdate($id)
    {
		$model = Author::findOne($id);
		
		if($model->load(Yii::$app->request->post())){
			$model->save();
			Yii::$app->session->setFlash('success', 'Author update');
			return $this->redirect(['author/index']);
		}
		
        return $this->render('update', [
			'model' => $model,
        ]);
    }

}
