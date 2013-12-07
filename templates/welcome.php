<aside>
    <img class="logo" src="../img/Doctor.png" alt="logo">
<aside>
<aside style="margin-left:auto; margin-right:auto; width:50%">
<h1>Welcome to Doctor Appointments!</h1>

<h2> <?= $name[0]["firstname"] . " " . $name[0]["lastname"] ?> </h2>

<p>Start making your appointments today!</p>
</aside>




<aside class= "form"> 
    <h2>Choose a Specialty</h2>
	<form action="results.php" method="GET">
    	<fieldset>
    
        	<div class="form-group">
            	<select class="form-control" name="specialty">
                	<option>  </option>               
                	<?php displayList($SPECIALTIES) ?>               
                </select>
                     
        	</div>
        
        	<div class="form-group">
        	<button type="submit" class="btn btn-default">Search</button>
        	</div>
        
    	</fieldset>
	</form>
</aside>
</div>

