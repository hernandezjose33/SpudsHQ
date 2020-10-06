<?php
    //output buffering.  sends requests to PHP at the same time. 
    ob_start();

    session_start();

    //If defined then make null
    defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);

    //front and back folders
    defined("TEMPLATE_FRONT") ? null : define("TEMPLATE_FRONT", __DIR__ . DS . "templates/front");
    defined("TEMPLATE_BACK") ? null : define("TEMPLATE_BACK", __DIR__ . DS . "templates/back");

    //database
    defined("DB_HOST") ? null : define("DB_HOST", "localhost");
    defined("DB_USER") ? null : define("DB_USER", "root");
    defined("DB_PASS") ? null : define("DB_PASS", "");
    defined("DB_NAME") ? null : define("DB_NAME", "ecom_db");

    $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        
    require_once("functions.php");
        
        
        
    //gives the directory all the way to the file
    //echo __FILE__;
    
    //give the directory
    echo TEMPLATE_BACK;








?>