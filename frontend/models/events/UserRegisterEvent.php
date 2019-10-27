<?php
/*
 * UserRegisterEvent.php
 * 
 * Copyright 2019 Михаил 
 * 
 */

namespace frontend\models\events;
use frontend\models\User;
use yii\base\Event;
use common\components\UserNotificationInterface;

class UserRegisterEvent extends Event implements UserNotificationInterface
{
	public $user;
	public $subject;
	
	/**
	 * @return string  
	*/ 
	public function getSubject(){
		return $this->subject;
	}
	
	/**
	 * @return string  
	*/ 
	public function getEmail(){
		return $this->user->email;
	}
}
