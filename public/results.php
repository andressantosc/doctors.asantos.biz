<?php

    // configuration
    require("../includes/config.php"); 

    $doctors = query("SELECT * FROM `doctors` WHERE `specialty` = ?", $_GET["specialty"]);

	// if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
            
        // validate submission
        if (empty($_GET["specialty"]))
        {
            apologize("You must choose a symbol.");
        }       
        else
        {
        	render("doctor_table.php", ["doctors" => $doctors, "title" => "Results"]);
        }
    }
    else
    {
    	apologize("No Post");
    }