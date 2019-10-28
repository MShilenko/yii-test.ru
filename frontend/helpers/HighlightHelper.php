<?php
/*
 * HighlightHelper.php
 * 
 * Copyright 2019 Mihail
 * 
 */

namespace frontend\helpers;

class HighlightHelper
{
	public function process($keyword, $content)
	{
		return str_replace($keyword, '<b>'.$keyword.'</b>', $content);
	}

}
