<?php
/*
 * UserNotificationInterface.php
 * 
 * Copyright 2019 Михаил 
 * 
 */

namespace common\components;

interface UserNotificationInterface
{
	public function getEmail();
	public function getSubject();
}
