
<form action="sell.php" method="post">
    <fieldset>
    
        <div class="form-group">
            <select class="form-control" name="symbol">
                <option> </option>               
                <?php displayhtml($rows) ?>
                </select>
                     
        </div>
        
        <div class="form-group">
        <button type="submit" class="btn btn-default">Sell</button>
        </div>
        
    </fieldset>
</form>

<div>
    or <a href="index.php">go back</a>.
</div>
