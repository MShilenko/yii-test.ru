<?php
/* @var $model frontend\models\Employee */
if ($model->hasErrors()) {
    echo '<pre>';
    print_r($model->getErrors());
    echo '</pre>';
}
?>

<h1>Welcome to our company!</h1>

<form method="post">
    <p>First name:</p>
    <input name="firstName" type="text" />
    <br><br>
    
    <p>Last name:</p>
    <input name="lastName" type="text" />
    <br><br>
    
    <p>Middle name:</p>
    <input name="middleName" type="text" />
    <br><br>
    
    <p>Email:</p>
    <input name="email" type="text" />
    <br><br>
    
    <p>Birthday:</p>
    <input name="birthday" type="text" />
    <br><br>
    
    <p>Start Date:</p>
    <input name="startDate" type="text" />
    <br><br>
    
    <p>City:</p>
    <select name="city[]">
	  <option value="1">Moscow</option>
	  <option value="2">SPB</option>
	  <option value="3">Tambov</option>
	</select>
    <br><br>
    
    <p>Position:</p>
    <input name="position" type="text" />
    <br><br>
    
    <p>Identifikator:</p>
    <input name="identifikator" type="text" />
    <br><br>
    
    <input type="submit" />    

</form>
