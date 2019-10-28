<?php
namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use frontend\models\News;
use Faker\Factory;

class TestController extends Controller
{	
 public function actionGenerate()
    {
        ini_set('max_execution_time', 10000);
        
        /* @var $faker Faker\Generator */
        $faker = Factory::create();
        
        for ($j = 0; $j < 1000; $j++) {
            
            $news = [];
            for ($i = 0; $i < 100; $i++) {
                $news[] = [$faker->text(35), $faker->text(rand(1000, 2000)), rand(0, 1)];
            }
            Yii::$app->db->createCommand()->batchInsert('news', ['title', 'content', 'status'], $news)->execute();
            unset($news);
            
        }

        return $this->render('generate');
    }
	
    //~ public function actionIndex()
    //~ {
        
        //~ $max = Yii::$app->params['maxNewsInList'];
        
        //~ $list = Test::getNewsList($max);
                
        //~ return $this->render('index', [
            //~ 'list' => $list,
        //~ ]);
    //~ }
    
    //~ public function actionView($id)
    //~ {
        //~ $item = Test::getItem($id);
        //~ return $this->render('view', [
            //~ 'item' => $item 
        //~ ]);
    //~ }    
    //~ public function actionMail()
    //~ {
        //~ $result = Yii::$app->mailer->compose()
                //~ ->setFrom('shilenkomihail1987@gmail.com')
                //~ ->setTo('shilenkomihail1987@gmail.com')
                //~ ->setSubject('Тема сообщения')
                //~ ->setTextBody('Текст сообщения')
                //~ ->setHtmlBody('<b>текст сообщения в формате HTML</b>')
                //~ ->send();
    //~ }
}
