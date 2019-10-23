<?php
/* @var $this yii\web\View */
/* @var $book_list yii\models\Book */
?>
<h1>Books</h1>

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

