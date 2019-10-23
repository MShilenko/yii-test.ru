<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Book;

class BookShopController extends \yii\web\Controller
{
    public function actionIndex()
    {
		$book_list = Book::find()->limit(10)->all();
		//~ $book_list = Book::find()->where(['publisher_id'=> 1])->all();
		
        return $this->render('index', [
			'book_list' => $book_list,
        ]);
    }
    
    public function actionCreate()
    {	
		$book = new Book();
		
		if($book->load(Yii::$app->request->post())){
			if($book->save()){
				Yii::$app->session->setFlash('success', 'Bokk added!');
				return $this->refresh();
				//~ return $this->redirect(['book-shop/index']);
			}
		}
		
        return $this->render('create',[
			'book' => $book,
        ]);
    }

}
