<?php

require("../includes/config.php");
$rows = [];
$rows = query("SELECT `id`, `username`, `password`, `class` FROM `users` WHERE `id`= 1"); 

dump($rows);

?>