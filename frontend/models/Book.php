<?php
/*
 * Book.php
 * 
 * Copyright 2019 Михаил 
 * 
 */

namespace frontend\models;

use Yii;
use yii\db\ActiveRecord;
use yii\helpers\Html;

class Book extends ActiveRecord
{
	public static function tableName(){
		return '{{book}}';
	} 
	
	public function rules(){
		return [
			[['name', 'publisher_id'], 'required'],
			[['date_published'], 'date', 'format' => 'php:Y-m-d'],
			[['isbn'], 'integer', 'min' => 6],
		];
	}
	
	public function getDatePublished(){
		return ($this->date_published) ? Yii::$app->formatter->asDate($this->date_published) : 'Not set date';
	}
	
	public function getPublisher(){
		return $this->hasOne(Publisher::className(), ['id' => 'publisher_id'])->one();
	}
	
	public function getPublisherName(){
		return ($this->getPublisher()) ? $this->getPublisher()->name : 'Not set author';
	}
	
	public function getbookToAthorRelations(){
        return $this->hasMany(BookToAuthor::className(), ['book_id' => 'id']);
    }
	
	public function getAuthors(){
        return $this->hasMany(Author::className(), ['id' => 'author_id'])->via('bookToAthorRelations')->all();
    }
    
    public function getFullName(){
		if($authors = $this->getAuthors()){
			echo Html::beginTag('ul');
				foreach($authors as $author){
					echo Html::tag('li', $author->first_name.' '.$author->last_name);
				}	
			echo Html::endTag('ul');
		}
	}
}
