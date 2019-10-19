<?php
/* @var $model frontend\models\Employee */
if ($model->hasErrors()) {
    echo '<pre>';
    print_r($model->getErrors());
    echo '</pre>';
}
?>

<h1>Windows</h1>

<form method="post">
    <p>Width:</p>
    <input name="width" type="text" />
    <br><br>
    
    <p>Height:</p>
    <input name="height" type="text" />
    <br><br>
    
    <p>Number of cameras:</p>
    <input name="numberOfCameras" value="1" type="radio" /> 1
    <br>
    <input name="numberOfCameras" value="2" type="radio" /> 2
    <br>
    <input name="numberOfCameras" value="3" type="radio" /> 3
    <br><br>
    
    <p>Total number of wings:</p>
    <input name="totalNumberOfWings" type="text" />
    <br><br>
    
    <p>Number of pivoting wings:</p>
    <input name="numberOfPivotingWings" type="text" />
    <br><br>
    
    <p>Color:</p>
    <select name="color">
		<option value="Red">Red</option>
		<option value="Green">Green</option>
		<option value="Blue">Blue</option>
    </select>
    <br><br>
    
    <p>Window sill:</p>
    <input name="windowSill" value="Yes" type="radio" /> Да
    <br>
    <input name="windowSill" value="No" type="radio" /> Нет
    <br><br>
        
    <p>Email:</p>
    <input name="email" type="text" />
    <br><br>
        
    <p>Name:</p>
    <input name="name" type="text" />
    <br><br>
    
    <input type="submit" />    

</form>

    <table class="table-bordered">
		<tr>
			<td>1</td>
			<td>2</td>
		</tr>
    </table>
