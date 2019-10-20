<?php
/*
 * GalleryController.php
 * 
 * Copyright 2019 Михаил 
 * 
 */

namespace frontend\controllers;

use yii\web\Controller;

class GalleryController extends Controller
{
	public function actionIndex()
	{
		return $this->render('index');
	}
}
