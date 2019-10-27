<?php
namespace frontend\models\forms;

use Yii;
use yii\base\Model;
use frontend\models\User;
use frontend\models\events\UserRegisterEvent;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => User::ClassName(), 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => User::ClassName(), 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
    }
    
    public function save(){
		if($this->validate()){
			$user = new User();
			$user->username = $this->username;
			$user->email = $this->email;
			$user->created_at = $time = time();
			$user->updated_at = $time;
			$user->auth_key = Yii::$app->security->generateRandomString();
			$user->password_hash = Yii::$app->security->generatePasswordHash($this->password);
			
			if($user->save()){
				$event = new UserRegisterEvent();
				$event->user = $user;
				$event->subject = 'User registered';
				$user->trigger(User::USER_REGISTERED, $event);
				
				return $user;
			}
		}
	}

    /**
     * Signs user up.
     *
     * @return bool whether the creating new account was successful and email was sent
     */
    //~ public function signup()
    //~ {
        //~ if (!$this->validate()) {
            //~ return null;
        //~ }
        
        //~ $user = new User();
        //~ $user->username = $this->username;
        //~ $user->email = $this->email;
        //~ $user->setPassword($this->password);
        //~ $user->generateAuthKey();
        //~ $user->generateEmailVerificationToken();
        //~ return $user->save() && $this->sendEmail($user);

    //~ }

    /**
     * Sends confirmation email to user
     * @param User $user user model to with email should be send
     * @return bool whether the email was sent
     */
    protected function sendEmail($user)
    {
        return Yii::$app
            ->mailer
            ->compose(
                ['html' => 'emailVerify-html', 'text' => 'emailVerify-text'],
                ['user' => $user]
            )
            ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name . ' robot'])
            ->setTo($this->email)
            ->setSubject('Account registration at ' . Yii::$app->name)
            ->send();
    }
}
