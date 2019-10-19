<?php /* @var $windowAttributs[] array */ ?>

    <h1>Window order</h1>

<?php foreach ($windowAttributs as $attr_name => $attr_value): ?>
    
    <table class="table-bordered">
		<tr>
			<td><?=$attr_name?></td>
			<td><?=$attr_value?></td>
		</tr>
    </table>
    
<?php endforeach;
