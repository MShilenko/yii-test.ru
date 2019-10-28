<?php
/*
 * NewsSearch.php
 * 
 * Copyright 2019 Mihail <mihail@mihail-To-be-filled-by-O-E-M>
 *	
 */

namespace frontend\models;

use Yii;
use yii\helpers\Html;

class NewsSearch
{
	public function simpleSearch($keyword)
	{
		$keyword = Html::encode($keyword);
		$sql = "SELECT * FROM news WHERE content LIKE '%$keyword%' LIMIT 20";
		return Yii::$app->db->createCommand($sql)->queryAll();
	}
	
	public function fullTextSearch($keyword)
	{
		$keyword = Html::encode($keyword);
		$sql = "SELECT * FROM news WHERE MATCH (content) AGAINST ('$keyword') LIMIT 20";
		return Yii::$app->db->createCommand($sql)->queryAll();
	}
}
