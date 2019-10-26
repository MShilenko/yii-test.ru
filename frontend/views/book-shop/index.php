<?php
/* @var $this yii\web\View */
/* @var $book_list yii\models\Book */

use yii\helpers\Url;
?>
<h1>Books</h1>

<a href="<?=Url::to(['create'])?>" class="btn btn-primary">Add new book</a>

<?php
foreach($book_list as $book){ ?>
	<div class="col-md-10">
		<h3><?=$book->name?></h3>
		<p><?=$book->getDatePublished()?></p>
		<p><?=$book->getPublisherName()?></p>
		<?=$book->getFullName()?>
		<hr>
	</div>
<?php } ?>

