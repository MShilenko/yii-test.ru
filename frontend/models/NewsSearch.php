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
use yii\helpers\ArrayHelper;

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
	
	public function advancedSearch($keyword)
	{
		$keyword = Html::encode($keyword);
		$sql = "SELECT * FROM idx_news_content WHERE MATCH ('$keyword') OPTION ranker=WORDCOUNT";
		$data = Yii::$app->sphinx->createCommand($sql)->queryAll();
		
		$ids = ArrayHelper::map($data, 'id', 'id');
		
		$data = News::find()->where(['id' => $ids])->asArray()->all();
		$data = ArrayHelper::index($data, 'id');
		
		$result = [];
		
		foreach($ids as $element){
			$result[] = [
				'id' => $data[$element]['id'],
				'title' => $data[$element]['title'],
				'content' => $data[$element]['content'],
			];
		}
		
		return $result;
	}
}
