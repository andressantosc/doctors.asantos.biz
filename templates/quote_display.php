<?php 
    $stock = lookup($_POST["symbol"]);
    print("A share of " . $stock["name"] . " (" . $stock["symbol"] . ")\n");
    print("costs: $" . number_format($stock["price"], 2) . "\n");   
?>

<div>
    <br>
    <a href="index.php">Go back</a>.
</div>
   

