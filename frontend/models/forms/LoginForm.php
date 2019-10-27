<?php
namespace frontend\models\forms;

use Yii;
use yii\base\Model;
use frontend\models\User;

/**
 * Signup form
 */
class LoginForm extends Model
{
    public $username;
    public $password;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['password', 'required'],
            ['password', 'validatePassword'],
        ];
    }
    
    public function login()
    {
		if($this->validate()){
			$user = User::findByUsername($this->username);
			Yii::$app->user->login($user);
			Yii::$app->session->setFlash('success', 'You login!');
		}
    }
    
    public function validatePassword($attribute, $params){
		$user = User::findByUsername($this->username);
		
		if(!$user || !$user->validatePassword($this->password)){
			$this->addError($attribute, 'Incorrect password');
		}
	}

    //~ protected function sendEmail($user)
    //~ {
        //~ return Yii::$app
            //~ ->mailer
            //~ ->compose(
                //~ ['html' => 'emailVerify-html', 'text' => 'emailVerify-text'],
                //~ ['user' => $user]
            //~ )
            //~ ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name . ' robot'])
            //~ ->setTo($this->email)
            //~ ->setSubject('Account registration at ' . Yii::$app->name)
            //~ ->send();
    //~ }
}
