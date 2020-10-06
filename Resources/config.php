<?php
    //If defined then make null
    defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);

    defined("TEMPLATE_FRONT") ? null : define("TEMPLATE_FRONT", __DIR__ . DS . "templates/front");
    defined("TEMPLATE_BACK") ? null : define("TEMPLATE_BACK", __DIR__ . DS . "templates/back");

    //gives the directory all the way to the file
    //echo __FILE__;
    
    //give the directory
    echo TEMPLATE_BACK;








?>