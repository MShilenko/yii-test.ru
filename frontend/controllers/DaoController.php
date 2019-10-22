<?php
/*
 * DaoController.php
 * 
 * Copyright 2019 Михаил 
 * 
 */

namespace frontend\controllers;

use yii\web\Controller;
use Yii;

class DaoController extends Controller
{
	public function actionIndex(){
		//~ $db = new \yii\db\Connection([
		//~ 'dsn' => 'mysql:host=localhost;dbname=yii2advanced',
		//~ 'username' => 'root',
		//~ 'password' => '211187',
		//~ 'charset' => 'utf8',
		//~ ]);
		
		//~ $sql = 'SELECT * FROM city';
		//~ $command = new \yii\db\Command([
			//~ 'db' => $db,	
			//~ 'sql' => $sql,	
		//~ ]);
		
		//~ $arrResult = $command->queryAll();

		$sql = 'SELECT * FROM news';
		$result = Yii::$app->db->createCommand($sql)->queryAll();
		
		print_r($result);
		
		return $this->render('index');
	}
}
