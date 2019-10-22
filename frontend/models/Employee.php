<?php
/*
 * Employee.php
 * 
 * Copyright 2019 Михаил

 * 
 */

namespace frontend\models;
use Yii;
use yii\base\Model;
use yii\helpers\ArrayHelper;

class Employee extends Model
{
    const SCENARIO_EMPLOYEE_REGISTER = 'employee_register';
    const SCENARIO_EMPLOYEE_UPDATE = 'employee_update';
    
    public $firstName;
    public $lastName;
    public $middleName;
    public $salary;
    public $email;
    public $birthday;
    public $startDate;
    public $city;
    public $position;
    public $identifikator;
    
    public function scenarios()
    {
        
        return [
            self::SCENARIO_EMPLOYEE_REGISTER => ['firstName', 'lastName', 'middleName', 'email', 'birthday', 'startDate', 'city', 'position', 'identifikator'],
            self::SCENARIO_EMPLOYEE_UPDATE => ['firstName', 'lastName', 'middleName'],
        ];
    }
    public function rules()
    {
        return [
            [['firstName', 'lastName', 'email', 'position','birthday'], 'required'],
            [['firstName'], 'string', 'min' => 2],
            [['lastName', 'position'], 'string', 'min' => 3],
            [['identifikator'], 'string', 'min' => 10],
            [['email'], 'email'],
            [['middleName'], 'required', 'on' => self::SCENARIO_EMPLOYEE_UPDATE],
            [['birthday', 'startDate'], 'date', 'format' => 'php:Y-m-d'],
            [['city'], 'integer'],
            [['identifikator', 'startDate', 'position'], 'required', 'on' => self::SCENARIO_EMPLOYEE_REGISTER],
        ];
    }
    
    public function save()
    {
        $sql = "INSERT INTO employee (id, firstName, lastName, middleName, email, birthday, startDate, city, position, identifikator) VALUE (null, '{$this->firstName}', '{$this->lastName}', '{$this->middleName}', '{$this->email}', '{$this->birthday}', '{$this->startDate}', '{$this->city}', '{$this->position}', '{$this->identifikator}')";
		Yii::$app->db->createCommand($sql)->execute();
    }
    
    public function getCitiesList()
    {
        $sql = "SELECT * FROM city";
		$result = Yii::$app->db->createCommand($sql)->queryAll();
		return ArrayHelper::map($result, 'id', 'name');
    }
}
