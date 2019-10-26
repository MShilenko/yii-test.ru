<?php
/* @var $this yii\web\View */
/* @var $authorList[] frontend\models\Athor */

use yii\helpers\Url;
?>
<h1>Author List</h1>

<p><a href="<?=Url::to(['author/create'])?>" class="btn btn-primary">Create new author</a></p>

<table class="table table-condensed">
	<tr>
		<th>ID</th>
		<th>First name</th>
		<th>Last name</th>
		<th>Rating</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
<?php foreach($authorList as $author){ ?>
	<tr>
		<td><?=$author->id?></td>
		<td><?=$author->first_name?></td>
		<td><?=$author->last_name?></td>
		<td><?=$author->rating?></td>
		<td><a href="<?=Url::to(['author/update', 'id' => $author->id])?>">Edit</a></td>
		<td><a href="<?=Url::to(['author/delete', 'id' => $author->id])?>">Delete</a></td>
	</tr>
<?php } ?>
</table>
