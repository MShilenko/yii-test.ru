<?php
/*
 * Windows.php
 * 
 * Copyright 2019 Михаил

 * 
 */

namespace frontend\models;

use Yii;
use yii\base\Model;

class Windows extends Model
{
    
    public $width;
    public $height;
    public $numberOfCameras;
    public $totalNumberOfWings;
    public $numberOfPivotingWings;
    public $color;
    public $windowSill;
    public $email;
    public $name;
    
    
    public function rules()
    {
        return [
			[['width', 'height', 'numberOfCameras', 'totalNumberOfWings', 'numberOfPivotingWings', 'color', 'windowSill', 'email', 'name', ], 'required'],
			[['width'], 'integer', 'min' => 70, 'max' => 210, 'message' => 'Неверный диапазон'],
			[['height'], 'integer', 'min' => 100, 'max' => 200, 'message' => 'Неверный диапазон'],
			[['numberOfCameras'], 'in', 'range' => [1, 2, 3]],
			[['totalNumberOfWings'], 'integer', 'min' => 1],
			[['numberOfPivotingWings'], 'compare', 'compareAttribute' => 'totalNumberOfWings', 'operator' => '<=', 'type' => 'integer', 'message' => 'Число превышает totalNumberOfWings'],
			[['email'], 'email'],
			[['name', 'windowSill', 'color'], 'string'],
			[['windowSill'], 'default', 'value' => 'No'],
        ];
    }
    
    public function adminSubmit()
    {
     
        $viewData = ['windowAttributs' => $this->attributes];
        
        Yii::$app->mailer->compose('/windows/wind_list', $viewData)
                    ->setFrom('shilenkomihail1987@gmail.com')
                    ->setTo(Yii::$app->params['adminEmail'])
                    ->setSubject('Заказ окна')
                    ->send();
        
    }
}
