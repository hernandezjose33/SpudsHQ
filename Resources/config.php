<?php
    //If defined then make null
    defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);

    //give the directory
    echo __DIR__;

    //gives the directory all the way to the file
    //echo __FILE__;
?>